<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Lesion;

class LesionController extends Controller
{
    public function show($id)
    {
        $lesion = Lesion::findOrFail($id);
        return view('lesions.detail', compact('lesion'));
    }
}
