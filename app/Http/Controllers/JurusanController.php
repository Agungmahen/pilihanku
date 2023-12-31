<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function jurusan (){
        return view ("informasijurusan/index");
    }   
    public function kampuss1 (){
        return view ("informasijurusan/kampuss1");
    } 
    public function kampusd3 (){
        return view ("informasijurusan/kampusd3");
    } 
    public function kampusd4 (){
        return view ("informasijurusan/kampusd4");
    }   

}
