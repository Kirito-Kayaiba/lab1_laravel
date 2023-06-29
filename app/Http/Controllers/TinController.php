<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TinController extends Controller
{
    function index(){
        return view("index");
    }
    function lienhe(){
        return view("lienhe");
    }
    // function index(){
    //     echo "Đây là trang chủ";
    // }
    // function lienhe(){
    //     echo "Đây là trang liên hệ";
    // }

    function lay1tin($id){
        $data = ['id'=>$id];
        return view("chitiet", $data);
    }
}
