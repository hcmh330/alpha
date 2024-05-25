<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>نتيجة الاختبار</title>
    <style>
        body { direction: rtl; font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0; }
        .container { max-width: 800px; margin: 50px auto; padding: 20px; background: #fff; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        .result { font-size: 18px; }
        .result p { margin: 10px 0; }
        .result a { display: inline-block; margin-top: 20px; padding: 10px 20px; background: #4CAF50; color: #fff; text-decoration: none; border-radius: 5px; }
        .result a:hover { background: #45a049; }
    </style>
</head>
<body>
    <div class="container">
        <h1>نتيجة الاختبار</h1>
        <div class="result">
            <p>لقد أجبت على {{ $correctAnswers }} من أصل {{ $totalQuestions }} أسئلة بشكل صحيح.</p>
            <p>عدد الإجابات الصحيحة: {{ $correctAnswers }}</p>
            <p>عدد الإجابات الخاطئة: {{ $totalQuestions - $correctAnswers }}</p>
            <a href="{{ route('evaluation.form') }}">إعادة الاختبار</a>
        </div>
    </div>
</body>
</html>
