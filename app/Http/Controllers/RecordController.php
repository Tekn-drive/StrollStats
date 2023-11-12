<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Record;

class RecordController extends Controller
{
    
    public function allView(){
        $Record;

        return view('wtf', ['records' => $records]);
    }
}

// 10073211