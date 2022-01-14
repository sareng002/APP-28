<?php

namespace App\Http\Controllers;

use App\Models\pdkmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class chartcontroller extends Controller
{
    public function index(){

        $jm = pdkmodel::all()->count();
        // dd($jm);
       
        $data = pdkmodel::select(DB::raw('jenis_kelamin, count(jenis_kelamin) as jumlahjiwa'))->groupby('jenis_kelamin') ->orderby('jenis_kelamin','asc')->get();
        $lk=[];
        $pr=[];
        
        foreach ($data as $item){

            $lk[]=$item->jenis_kelamin;
            $pr[]=$item->jumlahjiwa;
            
        }
                // dd($pr);
        
        $kk= pdkmodel::select(DB::raw('SHDK, count(SHDK) as jumlah_SHDK'))->groupby('SHDK') ->orderby('SHDK','asc')->get();
        $kkket=[];
        $kkjum=[];
        foreach($kk as $jumkk)
        {
            $kkket[]=$jumkk->SHDK;
            $kkjum[]=$jumkk->jumlah_SHDK;
        }
            // dd($kkjum);

        return view('Dashboard.post.index')->with(['data'=> $data,
                                                    'lk'=>$lk ,'pr'=>$pr ,
                                                    'jm'=>$jm, 'kk'=>$kk,
                                                    'kkket'=>$kkket,
                                                    'kkjum'=>$kkjum]);
    }

}