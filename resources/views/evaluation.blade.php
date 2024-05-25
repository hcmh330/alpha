<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اختبار تقييم مستوى الأمية</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            direction: rtl;
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .question {
            margin-bottom: 20px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .question h3 {
            margin-bottom: 20px;
        }
        .options label {
            display: block;
            margin: 10px 0;
        }
        .submit-btn {
            margin-top: 20px;
            float: left;
        }
        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
            border-radius: 8px;
        }
        audio {
            max-width: 100%;
            margin-top: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 40px;
        }
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    @include('layouts.nav2')
    <div class="container">
        <h1 class="fade-in">اختبار تقييم مستوى الأمية</h1>
        <form method="POST" action="{{ route('evaluation.submit') }}">
            @csrf
            <div class="question fade-in">
                <h3>{{ $currentQuestion['question'] }}</h3>
                @if(isset($currentQuestion['type']) && $currentQuestion['type'] === 'image')
                    @foreach($currentQuestion['options'] as $optionIndex => $option)
                        <label class="fade-in">
                            <input type="radio" name="answer" value="{{ $optionIndex }}" required>
                            <img src="{{ asset($option['image']) }}" alt="Option Image">
                        </label>
                    @endforeach
                @elseif(isset($currentQuestion['type']) && $currentQuestion['type'] === 'button')
                    @foreach($currentQuestion['options'] as $optionIndex => $option)
                        <label class="fade-in">
                            <input type="radio" name="answer" value="{{ $optionIndex }}" required>
                            {{ $option['label'] }}
                        </label>
                    @endforeach
                @elseif(isset($currentQuestion['type']) && $currentQuestion['type'] === 'single_choice_image')
                    <img src="{{ asset($currentQuestion['image']) }}" alt="Question Image">
                    @foreach($currentQuestion['options'] as $optionIndex => $option)
                        <label class="fade-in">
                            <input type="radio" name="answer" value="{{ $optionIndex }}" required>
                            {{ $option }}
                        </label>
                    @endforeach
                @elseif(isset($currentQuestion['type']) && $currentQuestion['type'] === 'single_choice_button')
                    @foreach($currentQuestion['options'] as $optionIndex => $option)
                        <label class="fade-in">
                            <input type="radio" name="answer" value="{{ $optionIndex }}" required>
                            {{ $option['label'] }}
                        </label>
                    @endforeach
                @elseif(isset($currentQuestion['type']) && $currentQuestion['type'] === 'true_false')
                    <label class="fade-in">
                        <input type="radio" name="answer" value="true" required>
                        True
                    </label>
                    <label class="fade-in">
                        <input type="radio" name="answer" value="false" required>
                        False
                    </label>
                @endif
            </div>
            <button type="submit" class="btn btn-primary submit-btn fade-in">التالي</button>
        </form>
    </div>
    @include('layouts.footer')

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
