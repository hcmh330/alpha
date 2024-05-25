<?php
// app/Http/Controllers/TestController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{
    protected $questions = [
        // Type 1: Multiple choice with images
        [
            "type" => "image",
            "question" => "Which image shows a cat?",
            "options" => [
                ["image" => "images/review-1.png", "is_correct" => false],
                ["image" => "images/review-1.png", "is_correct" => true],
                ["image" => "images/review-1.png", "is_correct" => false],
                ["image" => "images/review-1.png", "is_correct" => false],
            ],
        ],
        // Type 2: Multiple choice with buttons
        [
            "type" => "button",
            "question" => "Which fruit is orange?",
            "options" => [
                ["label" => "Apple", "is_correct" => false],
                ["label" => "Banana", "is_correct" => false],
                ["label" => "Orange", "is_correct" => true],
                ["label" => "Grapes", "is_correct" => false],
            ],
        ],
        // Type 3: Single choice with image
        [
            "type" => "single_choice_image",
            "question" => "Which animal is shown in the picture?",
            "image" => "images/review-5.png",
            "options" => [
                "Lion",
                "Tiger",
                "Elephant",
                "Giraffe"
            ],
            "answer" => 0,
        ],
        // Type 4: Single choice with buttons
        [
            "type" => "single_choice_button",
            "question" => "What is the capital of France?",
            "options" => [
                ["label" => "London", "is_correct" => false],
                ["label" => "Berlin", "is_correct" => false],
                ["label" => "Paris", "is_correct" => true],
                ["label" => "Rome", "is_correct" => false],
            ],
        ],
        // Type 5: True/False
        [
            "type" => "true_false",
            "question" => "Is the earth round?",
            "answer" => true,
        ],
        // Add more questions...
    ];

    public function showTestForm()
    {
        $totalQuestions = count($this->questions);

        if (!Session::has('current_question')) {
            Session::put('current_question', 0);
            Session::put('answers', []);
        }

        $questionIndex = Session::get('current_question');
        
        if ($questionIndex >= $totalQuestions) {
            return redirect()->route('evaluation.result');
        }

        $currentQuestion = $this->questions[$questionIndex];

        return view('evaluation', compact('currentQuestion', 'questionIndex', 'totalQuestions'));
    }

    public function submitTestForm(Request $request)
    {
        $totalQuestions = count($this->questions);
        $questionIndex = Session::get('current_question');
        $answers = Session::get('answers');

        $answers[$questionIndex] = $request->input('answer');
        Session::put('answers', $answers);
        Session::put('current_question', ++$questionIndex);

        if ($questionIndex >= $totalQuestions) {
            return redirect()->route('evaluation.result');
        }

        return redirect()->route('evaluation.form');
    }

    public function showResult()
    {
        $totalQuestions = count($this->questions);
        $answers = Session::get('answers', []);
        $correctAnswers = 0;

        foreach ($answers as $index => $answer) {
            if ($this->checkAnswer($this->questions[$index], $answer)) {
                $correctAnswers++;
            }
        }

        Session::forget(['current_question', 'answers']);
        return view('result', compact('correctAnswers', 'totalQuestions'));
    }

    private function checkAnswer($question, $userAnswer) {
        if ($question['type'] === 'true_false') {
            return $question['answer'] == $userAnswer;
        } elseif ($question['type'] === 'single_choice_image') {
            return $question['answer'] == $userAnswer;
        } else {
            foreach ($question['options'] as $key => $option) {
                if ($option['is_correct'] && $key == $userAnswer) {
                    return true;
                }
            }
            return false;
        }
    }
}
