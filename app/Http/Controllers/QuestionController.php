<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;


class QuestionController extends Controller
{
    //
    private $status_code    =        200;

    public function getAllQuestions(){

            $questions    =   Question::all();

            // if password is correct
            if(!is_null($questions)) {

                return response()->json(["status" => $this->status_code, "success" => true, "message" => "All questions.", "data" => $questions]);
            }

            else {
                return response()->json(["status" => "failed", "success" => false, "message" => "No question is there in database."]);
            }
    }
}
