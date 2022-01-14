<?php

namespace App\Http\Controllers;

use App\Models\pdkmodel;
use Illuminate\Http\Request;

class tablecontroller extends Controller
{
    public function index(Request $request)
    {
        if ($request)
        {
            $data = pdkmodel::where ('nama', 'like' ,'%'.$request->cari.'%')
                -> orWhere('kk','like', '%'.$request->cari.'%')-> orWhere('nik','like', '%'.$request->cari.'%') -> orWhere('alamat','like', '%'.$request->cari.'%')->Paginate(10);
        }else{
            $data = pdkmodel::Paginate(10);
            $data= pdkmodel::all();
        }
        return view('Dashboard.post.table.datapenduduk') ->with(['data'=> $data ]);;
    }
}
