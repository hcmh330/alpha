<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        #teacher{
            margin-top: 40px;
        }
    </style>

</head>
<body>

@include('layouts/nav2')

<!-- teacher section starts -->

<section class="teacher" id="teacher">

<h1 class="heading">our expert teacher</h1>

<div class="box-container">

    <div class="box">
        <div class="image">
            <img src="images/teacher-1.png" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>
        <div class="content">
            <h3>john deo</h3>
            <span>instructor</span>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/teacher-2.png" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>
        <div class="content">
            <h3>john deo</h3>
            <span>instructor</span>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/teacher-3.png" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>
        <div class="content">
            <h3>john deo</h3>
            <span>instructor</span>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/teacher-4.png" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>
        <div class="content">
            <h3>john deo</h3>
            <span>instructor</span>
        </div>
    </div>

</div>

</section>

<!-- teacher section ends -->

@include('layouts/footer')
    
</body>
</html>