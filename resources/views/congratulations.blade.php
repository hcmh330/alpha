<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congratulations!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0 auto;
            max-width: 800px;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .heading {
            font-size: 25px;
            margin-bottom: 20px;
        }
        .fa {
            font-size: 25px;
        }
        .checked {
            color: orange;
        }
        .level {
            margin: 20px 0;
        }
        .level .title {
            float: left;
            width: 15%;
        }
        .level .bar-container {
            float: left;
            width: 70%;
            text-align: left;
            position: relative;
        }
        .level .bar {
            width: 0;
            height: 12px; /* Reduced height */
            transition: width 2s;
        }
        .level .score {
            float: right;
            width: 15%;
            text-align: right;
        }
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        .average-score {
            margin-top: 30px;
        }
        .average-score .score {
            font-size: 30px; /* Increased font size */
            color: #4caf50; /* Green color */
            font-weight: bold;
            height: 40px; /* Increased height */
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .average-score .score-container {
            background-color: #e0f2f1; /* Light green background */
            padding: 20px;
            border-radius: 10px;
        }
        @media (max-width: 400px) {
            .level .title, .level .bar-container, .level .score {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Congratulations!</h1>
        <div class="heading">Your Final Scores:</div>

        @foreach($levelScores as $level => $score)
            @php
                $roundedScore = round($score);
                $barColor = '#0000FF'; // default blue

                if ($roundedScore == 100) {
                    $barColor = '#04AA6D'; // green
                } else if ($roundedScore < 100 && $roundedScore >= 80) {
                    $barColor = '#0000FF'; // blue
                } else if ($roundedScore < 80 && $roundedScore >= 60) {
                    $barColor = '#00bcd4'; // light blue
                } else if ($roundedScore < 60 && $roundedScore >= 50) {
                    $barColor = '#ff9800'; // orange
                } else if ($roundedScore < 50) {
                    $barColor = '#f44336'; // red
                }
            @endphp
            <div class="level row">
                <div class="title">Level {{ $level }}</div>
                <div class="bar-container">
                    <div class="bar" style="width: {{ $roundedScore }}%; background-color: {{ $barColor }};"></div>
                </div>
                <div class="score">{{ $roundedScore }}%</div>
            </div>
        @endforeach

        <div class="average-score">
            <div class="heading">Average Score:</div>
            <div class="score-container">
                <div class="score">{{ round($averageScore) }}%</div>
            </div>
        </div>
        <p>You have completed all levels! Take a well-deserved rest. If new levels are added later, we will let you know. You can also repeat all levels to improve your score!</p>
        <a href="{{ route('evaluation.form', ['level' => 1]) }}">Start Over</a>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const bars = document.querySelectorAll('.bar');
            bars.forEach(function(bar) {
                const width = bar.style.width;
                bar.style.width = '0';
                setTimeout(function() {
                    bar.style.width = width;
                }, 100);
            });
        });
    </script>
</body>
</html>
