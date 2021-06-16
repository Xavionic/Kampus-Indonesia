<?php

namespace App\Http\Controllers;

use App\Models\University;
use App\Models\Department;
use Illuminate\Http\Request;
use PDO;

class KampusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $universities = University::all();
        return view('kampus.index', ['universities' => $universities]);
    }

    public function jurusan(){
        $university = University::all()->where('id', '=', request('univ_id'));
        $departments = Department::all()->where('univ_id', '=', request('univ_id'));
        return view('kampus.jurusan', ['university' => $university, 'departments' => $departments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(){
        return view('kampus.buat');
    }

    public function new()
    {
        //
        $id = auth()->user()->id;
        University::create([
            'name' => request('name'),
            'detail' => request('detail'),
        ]);

        return Redirect('/kampus');
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
    }

    public function __invoke()
    {
        
    }
}
