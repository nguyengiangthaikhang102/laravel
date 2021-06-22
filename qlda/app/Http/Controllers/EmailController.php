<?php

namespace App\Http\Controllers;
        

use Illuminate\Support\Facades\Session;
use App\Mail\RFIDMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index(){
        return view('RFID.email');
    }
    public function send(Request $request){

        $data= [
            'name' => $request->name,
            'img'=> $request->file('img')
        ];
        $to ='nguyengiangthaikhang1@gmail.com';
        Mail::to($to)->send(new RFIDMail($data));
        Session::flash('danger', 'Tên đăng nhập hoặc mật khẩu không đúng');
        return redirect()->back();
    }
}
