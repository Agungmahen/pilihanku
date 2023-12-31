<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\pembelianmodel;
use Illuminate\Http\Request;

class MinatBakatController extends Controller
{
    public function minatbakat(){
        // $data = user::findOrFail($id);
        return view("minatbakat/index");
    }

    public function bayar (Request $request){
        if ( $request->file('bukti')){
            $photo = $request->file('bukti');
            $file = uniqid(). ".".$photo->getClientOriginalExtension();
            $photo->move('bukti',$file);
            }   
            
        //     $user = auth()->user();
        //     $data = User::where('id',$user->name)->get();
        // $data->status=$data_user;
        // $data->bukti = $file;
        // $data->save();

        $user = auth()->user();
        $user->bukti = $file;
        $user->save();
        // return $user;

        return redirect('pembelian');
    }

    public function soal (){
        return view ("minatbakat/soal");
        }

    public function proses(Request $req){


        $soal1 = $req->input('soal1');
        $soal2 = $req->input('soal2');
        $soal3 = $req->input('soal3');
        $soal4 = $req->input('soal4');
        $soal5 = $req->input('soal5');

        // $m = $input >= 40;
        // $m = 40 >= $input <=60;

        $nilai1 = ($soal1 == 'a') ? 20 : 0;
        $nilai2 = ($soal2 == 'a') ? 20 : 0;
        $nilai3 = ($soal3 == 'a') ? 20 : 0;
        $nilai4 = ($soal4 == 'a') ? 20 : 0;
        $nilai5 = ($soal5 == 'a') ? 20 : 0;

        $minat  = 60;

        if ($minat >= 60) {
            $hasil_minat = "Minat";
        } else {
            $hasil_minat = "Tidak Minat";
        }


        // $hasil = $soal1 + $soal2 + $soal3 + $soal4 + $soal5;
        return view("minatbakat/hasil",compact('hasil_minat'));
    }

    public function minat (){
        return view('minatbakat/minat');
    }

    public function minat_proses(Request $req){
        $soal1 = $req->input('soal1');
        $soal2 = $req->input('soal2');
        $soal3 = $req->input('soal3');
        $soal4 = $req->input('soal4');
        $soal5 = $req->input('soal5');
        $soal6 = $req->input('soal6');
        $soal7 = $req->input('soal7');
        $soal8 = $req->input('soal8');
        $soal9 = $req->input('soal9');
        $soal10 = $req->input('soal10');

        if($soal1 == 'A'){
            $nilai1 = 4;
        }elseif($soal1 == 'B'){
            $nilai1 = 3;
        }elseif($soal1 == 'C'){
            $nilai1 = 2;
        }elseif($soal1 == 'D'){
            $nilai1 = 1;
        }

        if($soal2 == 'A'){
            $nilai2 = 4;
        }elseif($soal2 == 'B'){
            $nilai2 = 3;
        }elseif($soal2 == 'C'){
            $nilai2 = 2;
        }elseif($soal2 == 'D'){
            $nilai2 = 1;
        }

        if($soal3 == 'A'){
            $nilai3 = 4;
        }elseif($soal3 == 'B'){
            $nilai3 = 3;
        }elseif($soal3 == 'C'){
            $nilai3 = 2;
        }elseif($soal3 == 'D'){
            $nilai3 = 1;
        }
        
        if($soal4 == 'A'){
            $nilai4 = 4;
        }elseif($soal4 == 'B'){
            $nilai4 = 3;
        }elseif($soal4 == 'C'){
            $nilai4 = 2;
        }elseif($soal4 == 'D'){
            $nilai4 = 1;
        }
        if($soal5 == 'A'){
            $nilai5 = 4;
        }elseif($soal5 == 'B'){
            $nilai5 = 3;
        }elseif($soal5 == 'C'){
            $nilai5 = 2;
        }elseif($soal5 == 'D'){
            $nilai5 = 1;
        }

        if($soal6 == 'A'){
            $nilai6 = 4;
        }elseif($soal6 == 'B'){
            $nilai6 = 3;
        }elseif($soal6 == 'C'){
            $nilai6 = 2;
        }elseif($soal6 == 'D'){
            $nilai6 = 1;
        }

        if($soal7 == 'A'){
            $nilai7 = 4;
        }elseif($soal7 == 'B'){
            $nilai7 = 3;
        }elseif($soal7 == 'C'){
            $nilai7 = 2;
        }elseif($soal7 == 'D'){
            $nilai7 = 1;
        }
        if($soal8 == 'A'){
            $nilai8 = 4;
        }elseif($soal8 == 'B'){
            $nilai8 = 3;
        }elseif($soal8 == 'C'){
            $nilai8 = 2;
        }elseif($soal8 == 'D'){
            $nilai8 = 1;
        }
        if($soal9 == 'A'){
            $nilai9 = 4;
        }elseif($soal9 == 'B'){
            $nilai9 = 3;
        }elseif($soal9 == 'C'){
            $nilai9 = 2;
        }elseif($soal9 == 'D'){
            $nilai9 = 1;
        }
        if($soal10 == 'A'){
            $nilai10 = 4;
        }elseif($soal10 == 'B'){
            $nilai10 = 3;
        }elseif($soal10 == 'C'){
            $nilai10 = 2;
        }elseif($soal10 == 'D'){
            $nilai10 = 1;
        }

        $jumlah = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 + $nilai7 + $nilai8 + $nilai9 + $nilai10; 
        $hasil = $jumlah * 2.5;
        //  $hasil = 70;

        // if ($hasil >= 70 && $hasil <= 100) {
        //    $abjad = 'Komputer';
        // } elseif ($hasil >= 45 && $hasil < 75) {
        //    $abjad = 'Seni';
        // } elseif ($hasil >= 20 && $hasil < 50) {
        //    $abjad = 'Manajement';
        // } elseif ($hasil >= 0 && $hasil < 25) {
        //    $abjad = 'Ilmu Alam';
        // } else {
        //    $abjad = 'Tidak Diketahui';
        // }

        

        return view ('minatbakat/hasil',compact('hasil','abjad'));


    }

    public function pembelian (){
        $user = auth()->user();
        $data = user::where('name',$user->name)->get();

        return view ('pembelian/index',compact('data'));
    }
   
}