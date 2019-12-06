<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Skills;

class SkillController extends Controller
{
    public function index()
    {
        $data = Skills::all(); // Mengambil data dari database
	    return view('skill', ['data' => $data]); // mengirim ke view
    }

}
