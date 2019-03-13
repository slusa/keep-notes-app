<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreNoteRequest;
use App\Note;
use App\Color;
use Illuminate\Support\Facades\Auth;
use Session;

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
        $notesLow = Note::orderBy('title')->get()->where('user_id', $id)->where('priority', 0);
        $notesHigh = Note::orderBy('title')->get()->where('user_id', $id)->where('priority', 1);
        $colors = Color::pluck('hashtag','color')->all();
        if (count($notesLow) + count($notesHigh) == 0) {
            return view('notes.empty');
        } else {
            return view('notes.index', compact('notesLow', 'notesHigh', 'colors'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Session::flash('note_adding', 'yes');
        Session::forget('note_editing');
        $colors = Color::pluck('color','hashtag')->all();
        return view('notes.add')->with('colors', $colors);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNoteRequest $request)
    {
        $note = new Note($request->validated());
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
        $colors = Color::pluck('color','hashtag')->all();
        Session::flash('note_editing', 'yes');
        return view('notes.edit', compact('note', 'colors'));
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

    // Change color
    public function changeColor($id, Request $request)
    {
        $note = Note::findOrFail($id);
        $note->color = $request->color;
        $note->save();
        return redirect('notes');
    }

    // Filter color
    public function filterColor($color)
    {
        $id = Auth::id();
        $notesLow = Note::orderBy('title')->get()->where('user_id', $id)->where('priority', 0)->where('color', $color);
        $notesHigh = Note::orderBy('title')->get()->where('user_id', $id)->where('priority', 1)->where('color', $color);
        $colors = Color::pluck('hashtag','color')->all();
        if (count($notesLow) + count($notesHigh) == 0) {
            return view('notes.empty', compact('colors'));
        } else {
            return view('notes.index', compact('notesLow', 'notesHigh', 'colors'));
        }
    }

}






