<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id_course, $id_content)
    {
        $data = $request->all();
        if (strlen($data['questionInput']) < 1) {
            return redirect()->back();
        }
        $question = Question::create([
            'id_user' => Auth::user()->id,
            'id_content' => $id_content,
            'detail_question' => $data['questionInput'],
            'date' => date('Y-m-d'),
        ]);
        return redirect('contentCourse/' . $id_course . '/' . $id_content);
    }

    public function reply(Request $request, $id_course, $id_content, $id_parent)
    {
        $data = $request->all();
        if (strlen($data['questionInput']) < 1) {
            return redirect()->back();
        }
        $question = Question::create([
            'id_user' => Auth::user()->id,
            'id_parent' => $id_parent,
            'id_content' => $id_content,
            'detail_question' => $data['questionInput'],
            'date' => date('Y-m-d'),
        ]);
        return redirect('contentCourse/' . $id_course . '/' . $id_content);
    }

    

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }
}
