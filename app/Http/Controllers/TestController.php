<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{
    protected $levels = [
        // Levels definition here...
        1 => [
            [
                "type" => "image",
                "question" => "Which image shows a cat?",
                "audio" => "audio/cat_question.mp3",
                "options" => [
                    ["image" => "images/review-1.png", "is_correct" => false],
                    ["image" => "images/review-1.png", "is_correct" => true],
                    ["image" => "images/review-1.png", "is_correct" => false],
                    ["image" => "images/review-1.png", "is_correct" => false],
                ],
            ],
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
            // Add more questions for level 1...
        ],
        2 => [
            [
                "type" => "button",
                "question" => "Which fruit is orange?",
                "audio" => "audio/orange_question.mp3",
                "options" => [
                    ["label" => "Apple", "is_correct" => false],
                    ["label" => "Banana", "is_correct" => false],
                    ["label" => "Orange", "is_correct" => true],
                    ["label" => "Grapes", "is_correct" => false],
                ],
            ],
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
            // Add more questions for level 2...
        ],
        3 => [
            [
                "type" => "button",
                "question" => "Which fruit is orange?",
                "audio" => "audio/orange_question.mp3",
                "options" => [
                    ["label" => "Apple", "is_correct" => false],
                    ["label" => "Banana", "is_correct" => false],
                    ["label" => "Orange", "is_correct" => true],
                    ["label" => "Grapes", "is_correct" => false],
                ],
            ],
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
            // Add more questions for level 2...
        ],
        4 => [
            [
                "type" => "button",
                "question" => "Which fruit is orange?",
                "audio" => "audio/orange_question.mp3",
                "options" => [
                    ["label" => "Apple", "is_correct" => false],
                    ["label" => "Banana", "is_correct" => false],
                    ["label" => "Orange", "is_correct" => true],
                    ["label" => "Grapes", "is_correct" => false],
                ],
            ],
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
            // Add more questions for level 2...
        ],
        5 => [
            [
                "type" => "button",
                "question" => "Which fruit is orange?",
                "audio" => "audio/orange_question.mp3",
                "options" => [
                    ["label" => "Apple", "is_correct" => false],
                    ["label" => "Banana", "is_correct" => false],
                    ["label" => "Orange", "is_correct" => true],
                    ["label" => "Grapes", "is_correct" => false],
                ],
            ],
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
            // Add more questions for level 2...
        ],
        // Define levels 3, 4, and 5 similarly...
    ];
    

    public function showTestForm(Request $request)
    {
        $level = $request->query('level', 1); // Default to level 1
        $totalQuestions = count($this->levels[$level]);

        // Re-initialize session data if the level is changed or not set
        if (!Session::has('shuffled_questions') || Session::get('level') != $level) {
            $shuffledQuestions = $this->levels[$level];
            shuffle($shuffledQuestions);
            Session::put('shuffled_questions', $shuffledQuestions);
            Session::put('current_question', 0);
            Session::put('answers', []);
            Session::put('level', $level);
        }

        $questionIndex = Session::get('current_question');
        $shuffledQuestions = Session::get('shuffled_questions');

        if ($questionIndex >= $totalQuestions) {
            return redirect()->route('evaluation.result', ['level' => $level]);
        }

        $currentQuestion = $shuffledQuestions[$questionIndex];

        return view('evaluation', compact('currentQuestion', 'questionIndex', 'totalQuestions', 'level'));
    }

    public function submitTestForm(Request $request)
    {
        $level = Session::get('level', 1);
        $totalQuestions = count($this->levels[$level]);
        $questionIndex = Session::get('current_question');
        $answers = Session::get('answers');

        $answers[$questionIndex] = $request->input('answer');
        Session::put('answers', $answers);
        Session::put('current_question', ++$questionIndex);

        if ($questionIndex >= $totalQuestions) {
            return redirect()->route('evaluation.result', ['level' => $level]);
        }

        return redirect()->route('evaluation.form', ['level' => $level]);
    }

    public function showResult(Request $request)
    {
        $level = $request->query('level', 1);
        $totalQuestions = count($this->levels[$level]);
        $answers = Session::get('answers', []);
        $shuffledQuestions = Session::get('shuffled_questions', []);
        $correctAnswers = 0;
    
        foreach ($answers as $index => $answer) {
            if (isset($shuffledQuestions[$index]) && $this->checkAnswer($shuffledQuestions[$index], $answer)) {
                $correctAnswers++;
            }
        }
    
        $score = ($correctAnswers / $totalQuestions) * 100;
        $pass = $score >= 50;
    
        // Store the score for this level in session
        $levelScores = Session::get('level_scores', []);
        $levelScores[$level] = $score;
        Session::put('level_scores', $levelScores);
    
        // Check if all levels are completed
        if ($level == count($this->levels)) {
            Session::forget(['current_question', 'answers', 'shuffled_questions', 'level']);
            
            // Calculate the average score
            $averageScore = array_sum($levelScores) / count($levelScores);
            return view('congratulations', compact('levelScores', 'averageScore'));
        }
    
        return view('result', compact('correctAnswers', 'totalQuestions', 'score', 'pass', 'level'));
    }
    

    private function checkAnswer($question, $userAnswer)
    {
        if ($question['type'] === 'true_false') {
            return $question['answer'] == $userAnswer;
        } elseif ($question['type'] === 'single_choice_image') {
            return $question['answer'] == $userAnswer;
        } else {
            foreach ($question['options'] as $key => $option) {
                if (isset($option['is_correct']) && $option['is_correct'] && $key == $userAnswer) {
                    return true;
                }
            }
            return false;
        }
    }
}

?>