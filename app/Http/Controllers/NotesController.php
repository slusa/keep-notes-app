<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use Illuminate\Support\Facades\Auth;

class NotesController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $notes = Note::orderBy('priority', 'DESC')->get()->where('user_id', $id);
        return view('notes.index')->with('notes', $notes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notes.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $note = new Note($request->all());
        $note->save();
        return redirect('notes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $note = Note::findOrFail($id);
        return view('notes.edit')->with('note', $note);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $note = Note::findOrFail($id);
        // return view('notes.add')->with('note', $note);
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
        $note = Note::findOrFail($id);
        $note->update($request->all());
        return redirect('notes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = Note::findOrFail($id);
        $note->delete();
        return redirect('notes');
    }

    // Change Priority of the note
    public function changePriority($id) {
        $note = Note::findOrFail($id);
        if($note && $note->priority == 0) {
            $note->priority = 1;
            $note->save();
        } else {
            $note->priority = 0;
            $note->save();
        }
        return redirect('notes');
    }
}






