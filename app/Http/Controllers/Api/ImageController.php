<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use Storage;
use Illuminate\Support\Str;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        if ($request->image_content) {
            $path = 'images/' . Str::random(40) . '.png';

            $image = Image::make($request->image_content)
                ->resize(400, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save('storage/' . $path);
        } else {
            $path = $request->file('image')->store('images', 'public');

            $image = Image::make('storage/' . $path)
                ->resize(400, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save();
        }

        $image->insert('https://cdn.learnku.com/uploads/images/201901/24/1/OyBnfB2vlk.png!/both/44x44', 'top-right', 10, 10)->save();

        return response()->json(['path' => Storage::disk('public')->url($path)]);
    }
}
