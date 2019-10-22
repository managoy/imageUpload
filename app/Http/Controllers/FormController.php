<?php

namespace App\Http\Controllers;

use App\Form;
use App\ImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class FormController extends Controller
{

    public function create()
    {
        return view('MultipleImage.create');
    }

    public function store(Request $request)
    {

        //dd($request);
//        if ($request->hasfile('images')) {
//            foreach ($request->file('images') as $image) {
//                dd($image);
//                $name = $image->getClientOriginalName();
//                $image->move(public_path() . '/images', $name);
//                $data[] = $name;
//            }
//        }

//        if($request->hasfile('images')){
//            dd('True!!');
//        }else{
//            dd("False");
//        }


//        $temp = $request->get('images');
//        dd($request);
        $img = $request->file('images');


            $images = Collection::wrap($img);




        $images->each(function ($image) {
                $basename = Str::random();
                $original = $basename . '.' . $image->getClientOriginalExtension();
            $thumbnail = $basename . '_thumb.' . $image->getClientOriginalExtension();
            Image::make($image)
                ->fit(250,250)
                ->save(public_path('/images/' . $thumbnail));

            $image->move(public_path('/images'), $original);
//
//            ImageUpload::create([
//                'original' => '/images/' . $original,
//                'thumbnail' => '/images/' . $thumbnail,
//            ]);

        });

//
//        $form = new Form();
//        $form->filename = json_encode($data);
//        $form->save();
        return back()->with('success', 'Your images has been successfully');
    }
}
