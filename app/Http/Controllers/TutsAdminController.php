<?php

namespace App\Http\Controllers;

use App\Http\Requests\TutRequest;
use App\Models\Tut;
use Illuminate\Http\Request;

class TutsAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tuts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TutRequest $request)
    {
        $tut = $request->user()->tuts()->create($request->only('title', 'description'));

        return redirect()->route('dashboard.tuts.edit', $tut)->withStatus('tut-successfully-created');
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
     * @param Tut $tut
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Tut $tut)
    {
        $tut = $tut->load('media');
        return view('dashboard.tuts.edit', compact('tut'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Tut $tut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Tut $tut)
    {
        $tut->update($request->only('title', 'description'));

        return redirect()->back()->withStatus('tut-successfully-updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $id;
    }
}
