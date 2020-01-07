<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

   public function index()
   {
        $file = base_path("storage/app/door.txt");
        $current = file_get_contents($file);
        // dd($current);
        // Append a new person to the file
        // $current = "";
        // Write the contents back to the file
        // file_put_contents($file, $current);
        return view('welcome',compact('current'));
   }
}


