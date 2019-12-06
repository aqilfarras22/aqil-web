<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Edukasi;

class EducationController extends Controller
{
    public function index() {
        $data = Edukasi::all();
        return view('education', compact('data'));
    }
}
