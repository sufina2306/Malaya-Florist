<?php

namespace App\Http\Controllers;

use App\Models\pemesanan;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Galeri;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function ubahStatus(Request $request, $id)
    {

        $pesanan = Pemesanan::find($id);
        $pesanan->status = $request->status;
        $pesanan->save();

        // Redirect atau lakukan sesuatu setelah berhasil mengubah status
        return redirect('/admin/pesanan')->with('success', 'Status pesanan berhasil diubah!');
    }

public function adminpesanan(Request $request)
    {
        $search = $request->input('search');
        $data = pemesanan::with('user')
            ->where(function ($query) use ($search) {
                $query->where('kode_produk', 'LIKE', '%' . $search . '%');
            })
            ->orderBy('created_at', 'desc') // Mengurutkan berdasarkan waktu pembuatan (contoh: 'created_at')
            ->paginate(5);
    
        return view('admin.pesanan', compact('data'));
    }
    
    public function adminhome(request $request)
    {
        $tanggalSemingguYangLalu = Carbon::now()->subWeek();

        $totalharga = Pemesanan::where(function ($query) use ($tanggalSemingguYangLalu) {
            $query->where('status', 'sudahdibayar')
                ->orWhereNull('status');
        })->whereBetween('created_at', [
            $tanggalSemingguYangLalu,
            Carbon::now() // Tanggal hari ini
        ])->sum('harga');
        $totalpesanan = Pemesanan::whereBetween('created_at', [
            $tanggalSemingguYangLalu,
            Carbon::now() // Tanggal hari ini
        ])->count();
        $search = $request->input('search');
        $data = User::where('level', 'user') // Filter hanya level 'user'
            ->where(function ($query) use ($search) {
                if (!empty($search)) {
                    $query->where('nama', 'LIKE', '%' . $search . '%');
                }
            })
            ->paginate(5);
        return view('admin.home', compact('data', 'totalharga', 'totalpesanan'));
    }
    public function tambah()
    {
        return view('admin.tambah');
    }





    public function adminProduk(Request $request)
    {
        $search = $request->input('search');
        $data = Produk::where(function ($query) use ($search) {
            $query->where('kode_produk', 'LIKE', '%' . $search . '%');
        })->paginate(5);
        return view('admin.produk', compact('data'));
    }

    public function tambahProduk()
    {
        return view('admin.tambahProduk');
    }
    public function postTambahProduk(Request $request)
    {
        $request->validate([
            'kodeproduk' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|max:5120',

        ]);
        $galeri = new Produk;
        $galeri->kode_produk = $request->kodeproduk;
        $galeri->harga = $request->harga;
        $galeri->kategori = $request->kategori;
        $galeri->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $galeri->gambar = $filename;
        }
        $galeri->save();
        if ($galeri) {
            return redirect('/admin/produk')->with('success', 'Produk baru berhasil
        ditambahkan!');
        } else {
            return back()->with('failed', 'Data Produk gagal ditambahkan!');
        }
    }
    public function editProduk($id)
    {
        $data = Produk::find($id);
        $kategori = ['congratulations', 'pernikahan', 'duka_cita'];

        return view('admin.editProduk', compact('data', 'kategori'));
    }
   public function postEditProduk(Request $request, $id)
{
    $request->validate([
        'kodeProduk' => 'required',
        'harga' => 'required',
        'deskripsi' => 'required',
        'kategori' => 'required',
    ]);

    $produk = Produk::find($id);
    $produk->kode_produk = $request->kodeProduk;
    $produk->harga = $request->harga;
    $produk->deskripsi = $request->deskripsi;
    $produk->kategori = $request->kategori;

    if ($request->hasFile('gambar')) {
        // Jika ada file gambar baru diunggah
        $filepath = 'images/' . $produk->gambar;
        if (File::exists($filepath)) {
            File::delete($filepath);
        }

        $file = $request->file('gambar');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('images/', $filename);
        $produk->gambar = $filename;
    }
    // Jika tidak ada inputan gambar baru, gambar lama akan dipertahankan

    $produk->save();

    if ($produk) {
        return redirect('/admin/produk')->with('success', 'Produk berhasil diupdate!');
    } else {
        return back()->with('failed', 'Produk gagal diupdate!');
    }
}

public function deleteProduk($id)
{
    $produk = Produk::find($id);

    if (!$produk) {
        return back()->with('failed', 'Produk tidak ditemukan!');
    }
 

    // Hapus gambar
    $filepath = 'images/' . $produk->gambar;
    if (File::exists($filepath)) {
        File::delete($filepath);
    }

    // Hapus produk
    $produk->delete();

    return back()->with('success', 'Data produk berhasil dihapus!');
}

    public function cetakbukti($id)
    {
        $data = Pemesanan::with('user', 'produk')
            ->where('id', $id)
            ->first();
        if ($data) {
            $pdf = PDF::loadView('admin.cetakbukti', ['data' => $data]);
            return $pdf->download('bukti_pemesanan_' . $id . '.pdf');
        } else {
            return redirect()->back()->with('error', 'Data pemesanan tidak ditemukan');
        }
    }


    // admin galeri
    public function admingaleri(Request $request)
    {
        $search = $request->input('search');
        $data = Galeri::where(function ($query) use ($search) {
            $query->where('kategori', 'LIKE', '%' . $search . '%');
        })->paginate(5);
        return view('admin.galeri', compact('data'));
    }
    public function tambahGaleri()
    {
        return view('admin.tambahGaleri');
    }
    public function editGaleri($id)
    {
        $data = Galeri::find($id);
        $kategori = ['congratulations', 'pernikahan', 'duka_cita'];
        return view('admin.editGaleri', compact('data', 'kategori'));
    }
    public function postGaleri(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'gambar' => 'required|image|max:5120',

        ]);
        $galeri = new Galeri;
        $galeri->judul = $request->judul;
        $galeri->deskripsi = $request->deskripsi;
        $galeri->kategori = $request->kategori;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $galeri->gambar = $filename;
        }
        $galeri->save();
        if ($galeri) {
            return redirect('/admin/galeri')->with('success', 'Galeri baru berhasil
        ditambahkan!');
        } else {
            return back()->with('failed', 'Data Galeri gagal ditambahkan!');
        }
    }
 public function postEditGaleri(Request $request, $id)
{
    $request->validate([
        'judul' => 'required',
        'deskripsi' => 'required',
        'kategori' => 'required',
    ]);

    $galeri = Galeri::find($id);

    $galeri->judul = $request->judul;
    $galeri->deskripsi = $request->deskripsi;
    $galeri->kategori = $request->kategori;

    if ($request->hasFile('gambar')) {
        // Jika ada file gambar baru diunggah
        $filepath = 'images/' . $galeri->gambar;
        if (File::exists($filepath)) {
            File::delete($filepath);
        }

        $file = $request->file('gambar');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('images/', $filename);
        $galeri->gambar = $filename;
    }
    // Jika tidak ada inputan gambar baru, gambar lama akan dipertahankan

    $galeri->save();

    if ($galeri) {
        return redirect('/admin/galeri')->with('success', 'Galeri berhasil diupdate!');
    } else {
        return back()->with('failed', 'Galeri gagal diupdate!');
    }
}

    public function deleteGaleri($id)
    {
        $galeri = Galeri::find($id);
        $filepath = 'images/' . $galeri->gambar;
        if (File::exists($filepath)) {
            File::delete($filepath);
        }
        $galeri->delete();
        if ($galeri) {
            return back()->with('success', 'Data Galeri berhasil di
        hapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus data Galeri!');
        }
    }


    // admin
    public function admin(Request $request)
    {
        $search = $request->input('search');
        $data = User::where('level', 'admin') // Filter hanya level 'admin'
            ->where(function ($query) use ($search) {
                if (!empty($search)) {
                    $query->where('nama', 'LIKE', '%' . $search . '%');
                }
            })
            ->paginate(5);

        return view('admin.admin', compact('data'));
    }
    public function tambahAdmin()
    {
        return view('admin.tambahAdmin');
    }
    public function editAdmin($id)
    {
        $data = User::find($id);
        return view('admin.editAdmin', compact('data'));
    }
  public function postTambahAdmin(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'email' => 'required|email:dns|unique:users,email', // Tambahkan aturan unique di sini
        'nohp' => 'required',
        'password' => 'required|min:8|max:20|confirmed'
    ]);

    // Memeriksa apakah email sudah ada dalam basis data
    $existingUser = User::where('email', $request->email)->first();

    if ($existingUser) {
        return back()->with('failed', 'Email sudah digunakan. Mohon gunakan email lain.');
    }

    $user = new User;
    $user->nama = $request->nama;
    $user->email = $request->email;
    $user->nohp = $request->nohp;
    $user->password = Hash::make($request->password);
    $user->level = 'admin';

    $user->save();

    if ($user) {
        return redirect('/admin/admin')->with('success', 'Akun berhasil dibuat, silahkan melakukan proses login!');
    } else {
        return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
    }
}

    public function postEditAdmin(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email:dns',
            'nohp' => 'required',
        ]);
        $user = User::find($id);

        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->nohp = $request->nohp;

        $user->save();

        if ($user) {
            return redirect('/admin/admin')->with('success', 'Data admin berhasil diupdate!');
        } else {
            return back()->with('failed', 'Gagal mengupdate data admin!');
        }
    }
    public function deleteAdmin($id)
    {
        $data = User::find($id);

        if ($data->nama === 'Sufina') {
            return redirect()->back()->with('error', 'Pengguna dengan nama "Sufina" tidak dapat dihapus.');
        }
        $data->delete();

        if ($data) {
            return back()->with('success', 'Data berhasil di hapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus data!');
        }
    }
}
