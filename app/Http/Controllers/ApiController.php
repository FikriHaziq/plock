<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{    
    public function getStatus() {
        $file = base_path("storage/app/door.txt");
        $current = file_get_contents($file);

        $result = [];
        array_push($result,[
            'status' => $current
        ]);
        return response($result, 200);
    }

    public function setStatus() {
        $file = base_path("storage/app/door.txt");
        $current = file_get_contents($file);
        if($current=="UNLOCK"){
            $current = "LOCK";
        }
        else if($current=="LOCK"){
            $current = "UNLOCK";
        }
        file_put_contents($file, $current);
        $result = [];
        array_push($result,[
            'status' => $current
        ]);
        return response($result, 200);
    }
}


