<?php

namespace App\Http\Controllers;

use App\Models\Tut;
use Illuminate\Http\Request;

class TipsController extends Controller
{

    /**
     * @param Tut $tips
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Tut $tips)
    {
        return view('tips.index', [
            'tips' => $tips->with('media')->get()
        ]);
    }


    public function show(Tut $tip)
    {
        return view('tips.show', [
           'tip' => $tip->load('media')
        ]);
    }

}
