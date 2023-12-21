<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class QuestionController extends Controller
{
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
            'date' => date('Y-m-d H:i:s'),
        ]);
        return redirect('contentCourse/' . $id_course . '/' . $id_content)->with('success', 'Question posted');
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
            'date' => date('Y-m-d H:i:s'),
        ]);
        return redirect('contentCourse/' . $id_course . '/' . $id_content)->with('success', 'Reply posted');
    }

}
