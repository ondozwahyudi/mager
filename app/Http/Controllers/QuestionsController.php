<?php

namespace App\Http\Controllers;

use App\Kelas;
use Illuminate\Http\Request;

use App\Questions;
use Ramsey\Uuid\Uuid;

class QuestionsController extends Controller
{

    public function store(Request $request, $id)
    {
        Questions::create($request->validate([
            'title' => 'required',
            'body' => 'required',
        ])+['uuid'  => Uuid::uuid4()] + ['kelas_id' => $id] + ['user_id' => auth()->user()->id]);
        return back()->with("success", "Your question has been submitted");
    }

    public function show($kelas, $uuid){
        $question = Questions::where('uuid', $uuid)->first();
        return  view('kelas.kls_questions_show', compact('question', 'kelas'));
    }

    public function json_edit(Request $request)
    {
        $data = Questions::where('uuid', $request->uuid)->first();
        return response()->json($data);
    }

    public function update(Request $request,$kelas, $uuid)
    {

        $question = Questions::where('uuid', $uuid)->first();
        $question->update([
            'title'  => $request->title,
            'body'    => $request->body
        ]);
        return back()->with('success', 'Berhasil diubah!');
    }

    public function delete($uuid)
    {
        $question = Questions::where('uuid', $uuid)->firstOrFail();
        $question->delete();
        return back()->with('success', 'Berhasil dihapus!');
    }


}


