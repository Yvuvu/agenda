<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seance;
use Redirect, Response;

class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(request()->ajax())
    {
    $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
    $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');
    $data = Seance::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->get(['id','title','start', 'end']);
    return Response::json($data);
    }
    return view('fullcalendar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $insertArr = [ 'title' => $request->title,
        'start' => $request->start,
        'end' => $request->end
        ];
        $seance = Seance::insert($insertArr);
        return Response::json($seance);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
        $where = array('id' => $request->id);
        $updateArr = ['title' => $request->title,'start' => $request->start, 'end' => $request->end];
        $seance  = Seance::where($where)->update($updateArr);
        return Response::json($seance);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $seance = Seance::where('id',$request->id)->delete();
        return Response::json($seance);    
    }
}
