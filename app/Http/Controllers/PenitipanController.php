<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PenitipanController extends Controller
{
    public function index(){
        $datatransaksi = DB::table('hewan')->count();
        $datauser = DB::table('users')->count();
        return view('index',compact('datatransaksi','datauser'));
    }

    //LOGIN
    public function indexlogin(){
        return view('login');
    }

    public function proseslogin(Request $a){
        $cek = $a -> validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($cek)){
            $a -> session() -> regenerate();
            return redirect()->intended('/index');
        }

        return back()->with('alert-danger', 'Maaf Username atau Password Salah');
    }

    public function logout(Request $a){
        Auth::logout();

        $a->session()->invalidate();
        $a->session()->regenerateToken();
        return redirect('/login');
    }

    //DATA HEWAN
    public function datahewan(){
        $data = DB::table('hewan')->get();
        $pelanggan = DB::table('pelanggan')->get();
        return view('data-hewan',compact('data','pelanggan'));
    }

    public function simpanhewan(Request $a)
    {
        try {
            $kode = DB::table('hewan')->max('id_hewan');
            $addNol = '';
            $kode = str_replace("HWN", "", $kode);
            $kode = (int) $kode + 1;
            $incrementKode = $kode;

            if (strlen($kode) == 1) {
                $addNol = "000";
            } elseif (strlen($kode) == 2) {
                $addNol = "00";
            } elseif (strlen($kode) == 3) {
                $addNol = "0";
            }
            $kodeBaru = "HWN".$addNol.$incrementKode;

            DB::table('hewan')->insert([
                'id_hewan' => $kodeBaru,
                'nama_hewan' => $a->nama,
                'jenis_hewan' => $a->jenis_hewan,
                'umur' => $a->umur,
                'jenis_kelamin' => $a->jenis_kelamin,
                'ciri' => $a->ciri,
                'pemilik' => $a->pemilik
            ]);

            return redirect('/hewan')->with('success', 'Data Berhasil Disimpan');
        } catch (Exception $e){
            return redirect()->back()->with('error', 'Error Data Tidak Valid');
        }
    }

    public function updatehewan(Request $a){
        try {
            DB::table('hewan')->where('id_hewan',$a->id)->update([
                'id_hewan' => $a->id,
                'nama_hewan' => $a->nama,
                'jenis_hewan' => $a->jenis_hewan,
                'umur' => $a->umur,
                'jenis_kelamin' => $a->jenis_kelamin,
                'ciri' => $a->ciri,
                'pemilik' => $a->pemilik
            ]);
            return redirect('/hewan')->with('success', 'Data Berhasil Diedit');
        } catch (\Exception $e){
            return redirect()->back()->with('error', 'Error Data Tidak Valid');
        }
    }
    public function deletehewan(Request $a, $id_hewan){
        try {
            DB::table('hewan')->where('id_hewan',$id_hewan)->delete();
            return redirect('/hewan')->with('success', 'Data Berhasil Dihapus');
        } catch (\Exception $e){
            return redirect()->back()->with('error', 'Error Data Tidak Valid');
        }
    }

    //DATA PELANGGAN
    public function datapelanggan(){
        $data = DB::table('pelanggan')->get();
        return view('data-pelanggan',compact('data'));
    }

    public function simpanpelanggan(Request $a)
    {
        try {
            $kode = DB::table('pelanggan')->max('id_pelanggan');
            $addNol = '';
            $kode = str_replace("CST", "", $kode);
            $kode = (int) $kode + 1;
            $incrementKode = $kode;

            if (strlen($kode) == 1) {
                $addNol = "000";
            } elseif (strlen($kode) == 2) {
                $addNol = "00";
            } elseif (strlen($kode) == 3) {
                $addNol = "0";
            }
            $kodeBaru = "CST".$addNol.$incrementKode;

            DB::table('pelanggan')->insert([
                'id_pelanggan' => $kodeBaru,
                'nama_pelanggan' => $a->nama,
                'tempat_lahir' => $a->tempat,
                'tanggal_lahir' => $a->tanggal,
                'jenis_kelamin' => $a->jenis_kelamin,
                'alamat' => $a->alamat,
                'nohp' => $a->no
            ]);

            return redirect('/pelanggan')->with('success', 'Data Berhasil Disimpan');
        } catch (Exception $e){
            return redirect()->back()->with('error', 'Error Data Tidak Valid');
        }
    }

    public function updatepelanggan(Request $a){
        try {
            DB::table('pelanggan')->where('id_pelanggan',$a->id)->update([
                'id_pelanggan' => $a->id,
                'nama_pelanggan' => $a->nama,
                'tempat_lahir' => $a->tempat,
                'tanggal_lahir' => $a->tanggal,
                'jenis_kelamin' => $a->jenis_kelamin,
                'alamat' => $a->alamat,
                'nohp' => $a->nohp
            ]);
            return redirect('/pelanggan')->with('success', 'Data Berhasil Diedit');
        } catch (\Exception $e){
            return redirect()->back()->with('error', 'Error Data Tidak Valid');
        }
    }
    public function deletepelanggan(Request $a, $id_pelanggan){
        try {
            DB::table('pelanggan')->where('id_pelanggan',$id_pelanggan)->delete();
            return redirect('/pelanggan')->with('success', 'Data Berhasil Dihapus');
        } catch (\Exception $e){
            return redirect()->back()->with('error', 'Error Data Tidak Valid');
        }
    }

    //DATA TRANSAKSI
    public function datatransaksi(){
        $data = DB::table('transaksi')
        ->join('hewan', 'transaksi.id_hewan', '=', 'hewan.id_hewan')
        ->join('pelanggan', 'transaksi.id_pelanggan', '=', 'pelanggan.id_pelanggan')
        ->select('transaksi.id_transaksi','transaksi.id_hewan', 'hewan.nama_hewan','transaksi.id_pelanggan','pelanggan.nama_pelanggan',
        'transaksi.lama_hari','transaksi.tgl_penitipan','transaksi.tgl_pengembalian','transaksi.harga','transaksi.total')
        ->get();
        $pelanggan = DB::table('pelanggan')->get();
        $hewan = DB::table('hewan')->get();
        return view('data-transaksi',compact('data','pelanggan','hewan'));
    }

    public function simpantransaksi(Request $a)
    {
        try {
            $kode = DB::table('transaksi')->max('id_transaksi');
            $addNol = '';
            $kode = str_replace("TRS", "", $kode);
            $kode = (int) $kode + 1;
            $incrementKode = $kode;

            if (strlen($kode) == 1) {
                $addNol = "000";
            } elseif (strlen($kode) == 2) {
                $addNol = "00";
            } elseif (strlen($kode) == 3) {
                $addNol = "0";
            }
            $kodeBaru = "TRS".$addNol.$incrementKode;

            $total = $a->harga*$a->lama_hari;
            DB::table('transaksi')->insert([
                'id_transaksi' => $kodeBaru,
                'id_hewan' => $a->hewan,
                'id_pelanggan' => $a->pelanggan,
                'lama_hari' => $a->lama_hari,
                'tgl_penitipan' => $a->tanggal_penitipan,
                'tgl_pengembalian' => $a->tanggal_pengembalian,
                'harga' => $a->harga,
                'total' => $total
            ]);

            return redirect('/transaksi')->with('success', 'Data Berhasil Disimpan');
        } catch (Exception $e){
            return redirect()->back()->with('error', 'Error Data Tidak Valid');
        }
    }

    public function updatetransaksi(Request $a){
        try {
            $total = $a->harga*$a->lama_hari;
            DB::table('transaksi')->where('id_transaksi',$a->id)->update([
                'id_hewan' => $a->hewan,
                'id_pelanggan' => $a->pelanggan,
                'lama_hari' => $a->lama_hari,
                'tgl_penitipan' => $a->tanggal_titip,
                'tgl_pengembalian' => $a->tanggal_pengambilan,
                'harga' => $a->harga,
                'total' => $total
            ]);
            return redirect('/transaksi')->with('success', 'Data Berhasil Diedit');
        } catch (\Exception $e){
            return redirect()->back()->with('error', 'Error Data Tidak Valid');
        }
    }
    public function deletetransaksi(Request $a, $id_transaksi){
        try {
            DB::table('transaksi')->where('id_transaksi',$id_transaksi)->delete();
            return redirect('/transaksi')->with('success', 'Data Berhasil Dihapus');
        } catch (\Exception $e){
            return redirect()->back()->with('error', 'Error Data Tidak Valid');
        }
    }
}
