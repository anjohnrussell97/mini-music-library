<?php

namespace App\Http\Controllers;

use App\Models\music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musics = Music::latest()->paginate(5);

        return view('musics.index', compact('musics'))
                ->with('i',(request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('musics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\music  $music
     * @return \Illuminate\Http\Response
     */
    public function show(music $music)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\music  $music
     * @return \Illuminate\Http\Response
     */
    public function edit(music $music)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\music  $music
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, music $music)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\music  $music
     * @return \Illuminate\Http\Response
     */
    public function destroy(music $music)
    {
        $music->delete();
  
        return redirect()->route('musics.index')
                        ->with('success','Music deleted successfully');
    }
}
