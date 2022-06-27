<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiaiController extends Controller
{
    public function giaiptb1(Request $req){

        // Validation

        $validated = $req->validate([
            'a'=>'required|numeric',
            'b'=>'required|numeric',
            // 'check'=>'required',
        ],[
            'a.required' => 'he so a bat buoc nhap',
            'b.required' => 'he so b bat buoc nhap',
            'a.numeric' => 'he so a phai la so thực',
            'b.numeric' => 'he so b phai la so thực',
        ]);
        //XU ly
        $a=$req->input('a');
        $b=$req->input('b');
        $check=$req->input('option');
        $kq ="";
      
        
        switch ($check) {
            case "+":
                $kq = $a+$b;
                break;
            case "-":
                $kq = $a-$b;

                break;
            case "*":
                $kq = $a*$b;

                break;
            case "/":
                $kq = $a/$b;

                break;
            
            default:
                echo "Số nằm ngoài phạm vi";
                break;
        }
        return view('ptb1',compact('kq','a','b','check'));

}
}