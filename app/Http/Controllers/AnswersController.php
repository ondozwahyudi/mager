<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answers;
use App\Questions;

class AnswersController extends Controller
{

    public function store(Request $request,$kelas,$id)
    {
        Answers::create($request->validate([
            'body' => 'required'
        ]) + ['user_id' => \Auth::id()] + ['questions_id' => $id]);
        return back()->with('success', "Your anwer has been submitted successfully");
    }

    public function edit($kelas, $uuid, $id)
    {
        $answers = Answers::where('id', $id)->first();
        return  view('kelas.kls_questions_edit', compact('answers', 'uuid', 'kelas'));
    }

    public function update(Request $request, $kelas, $uuid, $id)
    {
        $question = Answers::where('id', $id)->first();
        $question->update([
            'body'    => $request->body
        ]);
        return back()->with('success', 'Berhasil diubah!');
    }

    public function delete($id)
    {
        $question = Answers::where('id', $id)->firstOrFail();
        $question->delete();
        return back()->with('success', 'Berhasil dihapus!');
    }
}
