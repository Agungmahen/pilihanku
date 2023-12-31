<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function soal(){
        return view ('pertanyaan/soal1');
    }
    public function soal1(){
        return view ('pertanyaan/soal2');
    }
    public function soal2(){
        return view ('pertanyaan/soal3');
    }
    public function soal3(){
        return view ('pertanyaan/soal4');
    }
    public function soal_proses(Request $req){
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
        $soal11 = $req->input('soal11');
        $soal12 = $req->input('soal12');
        $soal13 = $req->input('soal13');
        $soal14 = $req->input('soal14');
        $soal15 = $req->input('soal15');

        // $m = $input >= 40;
        // $m = 40 >= $input <=60;

        $nilai1 = ($soal1 == 'A') ? 20 : 0;
        $nilai2 = ($soal2 == 'A') ? 20 : 0;
        $nilai3 = ($soal3 == 'A') ? 20 : 0;
        $nilai4 = ($soal4 == 'A') ? 20 : 0;
        $nilai5 = ($soal5 == 'A') ? 20 : 0;
        $nilai6 = ($soal6 == 'A') ? 20 : 0;
        $nilai7 = ($soal7 == 'A') ? 20 : 0;
        $nilai8 = ($soal8 == 'A') ? 20 : 0;
        $nilai9 = ($soal9 == 'A') ? 20 : 0;
        $nilai10 = ($soal10 == 'A') ? 20 : 0;
        $nilai11 = ($soal11 == 'A') ? 20 : 0;
        $nilai12 = ($soal12 == 'A') ? 20 : 0;
        $nilai13 = ($soal13 == 'A') ? 20 : 0;
        $nilai14 = ($soal14 == 'A') ? 20 : 0;
        $nilai15 = ($soal15 == 'A') ? 20 : 0;

        $jumlah = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 + $nilai7 + $nilai8 + $nilai9 + $nilai10 + $nilai11 + $nilai12 + $nilai13 + $nilai14 + $nilai15;
        // return $jumlah;
        $informatika = $jumlah;        
        return view ('pertanyaan/soal2',compact('informatika'));
    }
    public function soal1_proses(Request $req){
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
        $soal11 = $req->input('soal11');
        $soal12 = $req->input('soal12');
        $soal13 = $req->input('soal13');
        $soal14 = $req->input('soal14');
        $soal15 = $req->input('soal15');

        // $m = $input >= 40;
        // $m = 40 >= $input <=60;

        $nilai1 = ($soal1 == 'A') ? 20 : 0;
        $nilai2 = ($soal2 == 'A') ? 20 : 0;
        $nilai3 = ($soal3 == 'A') ? 20 : 0;
        $nilai4 = ($soal4 == 'A') ? 20 : 0;
        $nilai5 = ($soal5 == 'A') ? 20 : 0;
        $nilai6 = ($soal6 == 'A') ? 20 : 0;
        $nilai7 = ($soal7 == 'A') ? 20 : 0;
        $nilai8 = ($soal8 == 'A') ? 20 : 0;
        $nilai9 = ($soal9 == 'A') ? 20 : 0;
        $nilai10 = ($soal10 == 'A') ? 20 : 0;
        $nilai11 = ($soal11 == 'A') ? 20 : 0;
        $nilai12 = ($soal12 == 'A') ? 20 : 0;
        $nilai13 = ($soal13 == 'A') ? 20 : 0;
        $nilai14 = ($soal14 == 'A') ? 20 : 0;
        $nilai15 = ($soal15 == 'A') ? 20 : 0;

        $jumlah = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 + $nilai7 + $nilai8 + $nilai9 + $nilai10 + $nilai11 + $nilai12 + $nilai13 + $nilai14 + $nilai15;
        $sistem_informasi = $jumlah;
        return view ('pertanyaan/soal3',compact('sistem_informasi'));
    }
    public function soal2_proses(Request $req){
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
        $soal11 = $req->input('soal11');
        $soal12 = $req->input('soal12');
        $soal13 = $req->input('soal13');
        $soal14 = $req->input('soal14');
        $soal15 = $req->input('soal15');

        // $m = $input >= 40;
        // $m = 40 >= $input <=60;

        $nilai1 = ($soal1 == 'A') ? 20 : 0;
        $nilai2 = ($soal2 == 'A') ? 20 : 0;
        $nilai3 = ($soal3 == 'A') ? 20 : 0;
        $nilai4 = ($soal4 == 'A') ? 20 : 0;
        $nilai5 = ($soal5 == 'A') ? 20 : 0;
        $nilai6 = ($soal6 == 'A') ? 20 : 0;
        $nilai7 = ($soal7 == 'A') ? 20 : 0;
        $nilai8 = ($soal8 == 'A') ? 20 : 0;
        $nilai9 = ($soal9 == 'A') ? 20 : 0;
        $nilai10 = ($soal10 == 'A') ? 20 : 0;
        $nilai11 = ($soal11 == 'A') ? 20 : 0;
        $nilai12 = ($soal12 == 'A') ? 20 : 0;
        $nilai13 = ($soal13 == 'A') ? 20 : 0;
        $nilai14 = ($soal14 == 'A') ? 20 : 0;
        $nilai15 = ($soal15 == 'A') ? 20 : 0;

        $jumlah = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 + $nilai7 + $nilai8 + $nilai9 + $nilai10 + $nilai11 + $nilai12 + $nilai13 + $nilai14 + $nilai15;
        $teknik_komputer= $jumlah;
        return view ('pertanyaan/soal4',compact('teknik_komputer'));
    }
    public function soal3_proses(Request $req){
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
        $soal11 = $req->input('soal11');
        $soal12 = $req->input('soal12');
        $soal13 = $req->input('soal13');
        $soal14 = $req->input('soal14');
        $soal15 = $req->input('soal15');

        // $m = $input >= 40;
        // $m = 40 >= $input <=60;

        $nilai1 = ($soal1 == 'A') ? 20 : 0;
        $nilai2 = ($soal2 == 'A') ? 20 : 0;
        $nilai3 = ($soal3 == 'A') ? 20 : 0;
        $nilai4 = ($soal4 == 'A') ? 20 : 0;
        $nilai5 = ($soal5 == 'A') ? 20 : 0;
        $nilai6 = ($soal6 == 'A') ? 20 : 0;
        $nilai7 = ($soal7 == 'A') ? 20 : 0;
        $nilai8 = ($soal8 == 'A') ? 20 : 0;
        $nilai9 = ($soal9 == 'A') ? 20 : 0;
        $nilai10 = ($soal10 == 'A') ? 20 : 0;
        $nilai11 = ($soal11 == 'A') ? 20 : 0;
        $nilai12 = ($soal12 == 'A') ? 20 : 0;
        $nilai13 = ($soal13 == 'A') ? 20 : 0;
        $nilai14 = ($soal14 == 'A') ? 20 : 0;
        $nilai15 = ($soal15 == 'A') ? 20 : 0;

        $jumlah = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 + $nilai7 + $nilai8 + $nilai9 + $nilai10 + $nilai11 + $nilai12 + $nilai13 + $nilai14 + $nilai15;
        $teknik_komputer= $jumlah;
        return view ('pertanyaan/soal4',compact('teknik_komputer'));
    }


    
}
