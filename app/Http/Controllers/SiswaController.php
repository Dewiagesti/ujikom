<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Siswa;
use Illuminate\View\View;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view ('layouts.siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Siswa::create($input);
        return redirect('siswa')->with('flash_message', 'siswa Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $siswa = Siswa::find($id);
        return view('layouts.siswa.show')->with('siswa', $siswa);
   }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('layouts.siswa.edit')->with('siswa', $siswa);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $siswa = Siswa::find($id);
        $input = $request->all();
        $siswa->update($input);
        return redirect('siswa')->with('flash_message', 'siswa Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Siswa::destroy($id);
        return redirect('siswa')->with('flash_message', 'Siswa deleted!');
        
    }
}
