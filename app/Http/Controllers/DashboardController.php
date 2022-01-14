<?php

namespace App\Http\Controllers;

use App\Models\pdkmodel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        return view('Dashboard.index')->with(['data'=> $data ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        pdkmodel :: insert ($data);
        return redirect('/Dashboard') ->with('success_message', 'Berhasil menambah user baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $data= pdkmodel::findOrFail($id);
        return View ('Dashboard/editdata') ->with([ 'data'=> $data ]) ;
        // return View ('/editdata') ->with([ 'data'=> $data ]) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = pdkmodel::findOrFail($id);
        $data = $request->except(['_token']);
        $item->update($data);
        return Redirect('/Dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = pdkmodel::findOrFail($id);
        $item->delete();
        return Redirect('/Dashboard');
    }

    // public function tambahdata(Request $request)
    // {
    //     return view('dashboard.tambahdata');
    // }
    // public function editdata(Request $request)
    // {
    //     return view('dashboard.editdata');
    // }

    
}