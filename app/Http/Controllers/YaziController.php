<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Yazi;
class YaziController extends Controller
{
    //
    public function index(){
        $yazilar=Yazi::with("kategori")->paginate(5);        
        return view('index')->with('yazilar',$yazilar);

    }

    public function yazi($url)
    {
        $içerik = Yazi::where('url','=',$url)->with("kategori")->with("yorum")->get();
        return view('yazi')->with('icerik',$içerik);
    }
}
