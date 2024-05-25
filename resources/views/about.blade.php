<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        #about{
            margin-top: 40px;
        }
    </style>
</head>
<body>
@include('layouts/nav2')

<!-- about section starts -->

<section class="about" id="about">

<h1 class="heading">about us</h1>

<div class="container">

    <figure class="about-image">

        <img src="images/about-1.jpg" alt="" height="500">
        <img src="" alt="" class="about-img">
    </figure>

    <div class="about-content">
        <h3>18 years of experience</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus aut impedit expedita aliquam
            provident quod excepturi minus. Similique eveniet fugiat doloribus nisi saepe cupiditate iusto itaque totam! Officia, enim qui.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni voluptatum ipsa quod dolores officia at excepturi quas numquam vero dolorem vitae
            veritatis quisquam fugit voluptates doloribus, id pariatur in ipsam?</p>
        <a href="#" class="btn">
            <span class="text text-1">read more</span>
            <span class="text text-2" aria-hidden="true">read more</span>
        </a>
    </div>

</div>

</section>

@include('layouts/footer')
</body>
</html>