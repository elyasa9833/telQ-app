<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApiQuestionController extends Controller
{
    
    // show own question list
    public function listQuestion()
    {
        $user = auth()->user()->id;
        $questions = Question::where('user_id', $user)->select('id', 'user_id', 'content', 'image')->get();

        return response()->json($questions, 200);
    }

    public function addQuestion(Request $request)
    {
        $createQuestion = $request->validate([
            'content' => 'required|max:255',
            'image' => 'image|file|max:3072|nullable'
        ]);

        if($request->file('image')) {
            $createQuestion['image'] = $request->file('image')->store('post-images');
        }

        $createQuestion['user_id'] = auth()->user()->id;

        Question::create($createQuestion);

        return response()->json([
            "message" => "Data berhasil ditambahkan",
            "content" => $createQuestion['content']
        ], 200);
    }

    // delete a post, but in api
    public function destroyQuestion(Request $request)
    {
        $id = $request->content_id;
        $question = Question::findOrFail($id);
        if($question->user_id == auth()->user()->id){
            if($question->image){
                Storage::delete($question->image);
            };
            
            $question->delete();
            return response()->json([
                "message" => "Data berhasil dihapus"
            ], 200);
        }
        abort(404);
    }

    public function editQuestion(Request $request)
    {
        $updateQuestion = $request->validate([
            'content' => 'required',
            'image' => 'nullable'
        ]);
        $question = Question::findOrFail($request->content_id);
        if($question->user_id == auth()->user()->id){
            $question->update($updateQuestion);
            return response()->json([
                "message" => "Data berhasil diedit",
                "content" => $question['content']
            ], 200);
        }
        abort(404);
    }
}