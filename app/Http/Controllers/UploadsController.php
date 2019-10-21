<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class UploadsController extends Controller
{
    public function store()
    {

        if (!is_dir(public_path('/images'))) {
            mkdir(public_path('/images'), 0777);
        }


        $images = Collection::wrap(request()->file('file'));

        $images->each(function ($image) {
            $basename = Str::random();
            $original = $basename . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/images'), $original);
        });
        dd($images);
    }
}
