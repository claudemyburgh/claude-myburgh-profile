<?php

namespace App\Http\Controllers;

use App\Models\Tut;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class TutImageUploadController extends Controller
{
    public function upload(Request $request,Tut $tut)
    {
        foreach ($request->image as $media) {
            $tut->addMedia($media)->toMediaCollection('tuts');
        }

        return back()->withStatus('success');
    }

    public function destroy($id)
    {
        Media::find($id)->delete();

        return redirect()->back()->withStatus('success');
    }

}
