<?php


namespace App\Http\Controllers;


use function PHPUnit\Framework\matchesRegularExpression;

class profileController extends Controller
{
    public function showprofile($name=null){
        if(!$name){
            return "Please enter name";
        }
        return view('profile') ->with('ten',$name);
    }
}
