<?php 

namespace App\Http\Controllers; 

use Illuminate\Http\Request; 

class MyController extends Controller 
{ 
     public function mot(){ 
        return view('mot'); 
    } 
 
    public function filieres(){ 
        return view('filieres'); 
    } 
 
    public function contact(){ 
        return view('contact'); 
    } 
}