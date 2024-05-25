<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        #blog{
            margin-top: 40px;
        }
    </style>

</head>
<body>

@include('layouts/nav2')

 <!-- blog section starts -->

 <section class="blog" id="blog">

<h1 class="heading">our blogs</h1>

<div class="box-container">

    <div class="box">
        <div class="image shine">
            <img src="images/blog-1.jpg" alt="">
            <h3>09 dec 2022</h3>
        </div>
        <div class="content">
            <div class="icons">
                <a href="#"><i class="fas fa-user"></i>by admin</a>
            </div>
            <h3>we have best courses for you</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam explicabo minus.</p>
            <a href="#" class="btn">
                <span class="text text-1">read more</span>
                <span class="text text-2" aria-hidden="true">read more</span>
            </a>
        </div>
    </div>

    <div class="box">
        <div class="image shine">
            <img src="images/blog-2.jpg" alt="">
            <h3>09 dec 2022</h3>
        </div>
        <div class="content">
            <div class="icons">
                <a href="#"><i class="fas fa-user"></i>by admin</a>
            </div>
            <h3>we have best courses for you</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam explicabo minus.</p>
            <a href="#" class="btn">
                <span class="text text-1">read more</span>
                <span class="text text-2" aria-hidden="true">read more</span>
            </a>
        </div>
    </div>

    <div class="box">
        <div class="image shine">
            <img src="images/blog-3.jpg" alt="">
            <h3>09 dec 2022</h3>
        </div>
        <div class="content">
            <div class="icons">
                <a href="#"><i class="fas fa-user"></i>by admin</a>
            </div>
            <h3>we have best courses for you</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam explicabo minus.</p>
            <a href="#" class="btn">
                <span class="text text-1">read more</span>
                <span class="text text-2" aria-hidden="true">read more</span>
            </a>
        </div>
    </div>

</div>

</section>

<!-- blog section ends -->

@include('layouts/footer')
    
</body>
</html>