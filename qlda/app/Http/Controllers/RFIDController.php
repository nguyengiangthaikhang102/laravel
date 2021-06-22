<?php

namespace App\Http\Controllers;

use App\Models\RFID;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\RFIDExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;
class RFIDController extends Controller
{
    public function index(){
        return view('dashboard');
    }
    public function checkin(Request $request){
        $new = new RFID();
        $new->checkin=$request->input('rfid');
        $new->save();
     
        return view('dashboard');
    }
    public function out(){
        return view('RFID.checkout');
    }
    public function checkout(Request $request){
        $new = new RFID();
        $new->checkin=$request->input('rfid');
        $new->save();

        return view('RFID.checkout');
    }

    public function  search(Request $request){
        if (isset($_GET['query'])){
            $search_text=$_GET['query'];
            $countries =DB::table('rfid')->where('checkin','=',$search_text)->paginate(2);
            $countries->appends($request->all());
            return view('RFID.search',['countries'=>$countries]);
        }else{
            return view('RFID.search');
        }
    }
    public function export()
    {
        return Excel::download(new RFIDExport, 'rfids.xlsx');
    }
    public function photo(){
        return view('RFID.camera');
    }


}
