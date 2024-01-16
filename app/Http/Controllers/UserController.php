<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produk;
use App\Models\Pembelian;
use App\Models\Galeri;
use App\Models\pemesanan;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    //

    public function index()
    {
        return view('users.index', [
            'users' => User
                ::all()
        ]);
    }
    public function userProduk(Request $request)
    {
        $search = $request->input('kategori');
        $data = Produk::where(function ($query) use ($search) {
            $query->where('kategori', 'LIKE', '%' . $search . '%');
        })->paginate();
        return view('user.produk', compact('data'));
    }

    public function showDetail($id)
    {
        $produk = Produk::find($id);
        return view('user.detailproduk', compact('produk'));
    }
    public function store(Request $request)
    {
        // Validasi request jika perlu
        Pembelian::create([
            'id_produk' => $request->id_produk,
            'jumlah' => $request->jumlah,
        ]);
        return redirect('/')->with('success', 'Pembelian berhasil!');
    }

    public function postPemesanan(Request $request)
{
    $request->validate([
        'kodeProduk' => 'required',
        'hargaproduk' => 'required',
        'atasnama' => 'required',
        'papan' => 'required',
        'alamat' => 'required',
        'ucapan'=> 'required',
        'iduser' => 'required'
    ]);

    $pemesanan = new pemesanan;
    $pemesanan->Kode_produk = $request->kodeProduk;
    $pemesanan->harga = $request->hargaproduk;
    $pemesanan->atasnama = $request->atasnama;
    $pemesanan->size = $request->papan;
    $pemesanan->alamat = $request->alamat;
    $pemesanan->ucapan = $request->ucapan;
    $pemesanan->id_user = $request->iduser;
    $pemesanan->status = 'belumdibayar';

    $pemesanan->save();

    if ($pemesanan) {
        return redirect()->route('user.pembayaran', ['id' => $pemesanan->id])
        ->with('success', 'Pemesanan berhasil ditambah!');
    } else {
        return back()->with('failed', 'Gagal menambah pemesanan!');
    }
}

    public function pembayaran(Request $request, $id)
    {
        $pembayaran = pemesanan::find($id);
        $search = $request->input('kategori');
        $data = Pemesanan::where('id', 'LIKE', '%' . $search . '%')->paginate(5);
        return view('user.pembayaran', compact('data', 'pembayaran'));
    }
    public function riwayat(Request $request)
    {
        $userId = Auth::id();
        $search = $request->input('search');
        
        $query = Pemesanan::with('user', 'produk')->where('id_user', $userId);
    
        if ($search) {
            $query->where(function ($innerQuery) use ($search) {
                $innerQuery->where('kode_produk', 'LIKE', '%' . $search . '%')
                           ->orWhere('atasnama', 'LIKE', '%' . $search . '%');
            });
        }
    
        $data = $query->get();
    
        return view('user.riwayatpemesanan', compact('data'));
    }
    

    public function galeri(request $request){
        $search = $request->input('kategori');
        $data = Galeri::where(function ($query) use ($search) {
            $query->where('kategori', 'LIKE', '%' . $search . '%');
        })->paginate();
        return view('user.galeri', compact('data'));
    }
}