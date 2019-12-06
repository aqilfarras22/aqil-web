<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience as Exp;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Exp::all(); // Mengambil data dari database
	    return view('experience', ['data' => $data]); // mengirim ke view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list(){
        $data = Exp::all(); // Mengambil data dari database
	    return view('experiences.list', ['data' => $data]); // mengirim ke view
    }
    public function create()
    {
        return view('experiences.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'experience'=>'required|max:100',
            'from'=>'required|date',
            'to'=>'required|date'
        ]);
        Exp::create(['experience'=>$request->experience,
        'from'=>$request->from,'to'=>$request->to]);
        return redirect('/admin/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Exp::find($id);
        var_dump($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Exp::findOrFail($id)->first();
        return view('experiences.edit', ['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'experience'=>'required|max:100',
            'from'=>'required|date',
            'to'=>'required|date'
        ]);
        Exp::find($id)->update(['experience'=>$request->experience,
        'from'=>$request->from,'to'=>$request->to]);
        return redirect('/admin/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Exp::findOrFail($id)->delete();
        return redirect('/admin/index');
    }
}
