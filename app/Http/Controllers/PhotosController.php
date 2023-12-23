<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Tasks;
use App\Models\Photos;

use Illuminate\Http\Request;

class PhotosController extends Controller
{
    //
    public function userPhotos(){
        // $items=User::with('photo')->get();
        $items=Tasks::with('photos')->get();
        return $items;
    }

    public function showPhotos(){
        $items=Photos::with(['users','tasks'])->get();
        return $items;
    }
}
