<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Web Design Mastery | Travel Worldwide</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700&display=swap");

        :root {
           
            --text-dark: #0a0a0a;
            --white: #ffffff;
            --max-width: 1200px;

            --primary-color: #c9128d;
            --secondary: #0099cc;
            --black: black;
            
            --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, 0.1);
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .btn {
            padding: 0.75rem 1.5rem;
            outline: none;
            border: none;
            font-size: 1rem;
            color: var(--white);
            background-color: var(--primary-color);
            border-radius: 5px;
            transition: 0.3s;
            cursor: pointer;
        }

        .btn:hover {
            background-color: rgba(255, 154, 48, 0.8);
        }

        img {
            display: flex;
            width: 100%;
        }

        a {
            text-decoration: none;
            transition: 0.3s;
        }

        html,
        body {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Poppins", sans-serif;
        }

        .header {
            position: relative;
            isolation: isolate;
        }

        nav {
            position: absolute;
            width: 100%;
            max-width: var(--max-width);
            top: 0;
            left: 50%;
            transform: translate(-50%);
            padding: 1rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 9;
        }

        .nav__logo a img {
            max-width: 80px;
        }

        .nav__logo .logo-color {
            display: none;
        }

        .nav__links {
            list-style: none;
            position: absolute;
            right: 1rem;
            top: 75px;
            width: 100%;
            max-width: 350px;
            padding: 2rem;
            align-items: center;
            justify-content: center;
            gap: 2rem;
            flex-direction: column;
            background-color: var(--secondary);
            border-radius: 1rem;
            display: none;
        }

        .nav__links.open {
            display: flex;
        }

        .nav__links a {
            white-space: nowrap;
            font-weight: 500;
            color: var(--white);
        }

        .nav__links a:hover {
            color: var(--primary-color);
        }

        .nav__menu__btn {
            padding: 5px 11px;
            font-size: 1.5rem;
            color: var(--white);
            background-color: var(--secondary );
            border: 1px solid var(--white);
            border-radius: 5px;
        }

        .header__container {
            display: grid;
        }

        .header__image {
            position: relative;
            isolation: isolate;
            min-height: max(75vh, 500px);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            border-bottom-left-radius: 8rem;
        }

        .header__image::after {
            position: relative;
            content: "";
            top: 0;
            left: 0;
            height: 100%;
            width: 500px;
            background-color: var(--primary-color);
            z-index: 1;
            animation: scroll-right 0.5s 0.3s linear forwards;
        }

        .header__image.reveal {
            background-image: url("assets/ww.png");
        }

        .header__image.reveal::after {
            left: unset;
            right: 0;
            animation: scroll-left 0.5s linear forwards;
        }

        @keyframes scroll-right {
            0% {
                width: 0;
            }

            100% {
                width: 100%;
            }
        }

        @keyframes scroll-left {
            0% {
                width: 100%;
            }

            100% {
                width: 0;
            }
        }

        .header__content {
            text-align: center;
            padding: 4rem 1rem;
        }

        .header__content h1 {
            font-size: 4rem;
            font-weight: 700;
            line-height: 3rem;
            color: var(--text-dark);
        }

        .header__content h2 {
            margin-bottom: 2rem;
            font-size: 4rem;
            font-weight: 200;
            line-height: 3rem;
            color: var(--text-dark);
        }

        .header__content p {
            margin-bottom: 2rem;
            color: var(--text-dark);
        }

        .banner {
            margin-top: 5rem;
            display: grid;
        }

        .banner__card {
            padding: 2rem;
        }

        .banner__card:nth-child(1) {
            position: relative;
            isolation: isolate;
            padding-block: 5rem;
            background-color: var(--white);

        }

        .banner__card:nth-child(2) {
            background-color: #ffd457;
        }

        .banner__card:nth-child(3) {
            background-color: #ffc823;
        }

        .banner__card:nth-child(4) {
            background-color: #ffad23;
        }

        .banner__card h4 {
            font-size: 1.2rem;
            font-weight: 500;
            color: var(--text-dark);
        }

        .banner__card p {
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
            color: var(--text-dark);
        }

        .banner__card a {
            font-size: 1rem;
            font-weight: 600;
            color: var(--text-dark);
        }

        .banner__content {
            position: absolute;
            bottom: 0;
            left: 0;
            height: calc(100% + 4rem);
            width: 100%;
            padding-top: 4rem;
            padding-right: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            z-index: 1;
            background-color: var(--primary-color);
            border-top-right-radius: 100%;
        }

        .banner__content h2 {
            font-size: 6rem;
            font-weight: 700;
            line-height: 5rem;
            color: var(--text-dark);
        }

        .banner__content p {
            font-weight: 500;
            color: var(--text-dark);
        }

        .banner__content h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text-dark);
        }

        @media (width > 540px) {
            .header__image {
                min-height: max(75vh, 550px);
            }

            .banner {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (width > 768px) {
            nav {
                padding: 2rem 1rem;
            }

            .nav__logo .logo-color {
                display: flex;
            }

            .nav__logo .logo-white {
                display: none;
            }

            .nav__menu__btn {
                display: none;
            }

            .nav__links {
                padding: 0.75rem 3rem;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                display: flex;
                gap: 3rem;
                flex-direction: row;
                max-width: fit-content;
                border-radius: 5rem;
                background-color: var(--secondary);
            }

            .header__container {
                display: grid;
                grid-template-columns:
                    minmax(1rem, 1fr) minmax(0, calc(var(--max-width) * 0.4)) minmax(0, calc(var(--max-width) * 0.6)) minmax(1rem, 1fr);
                align-items: center;
            }

            .header__image {
                min-height: max(75vh, 650px);
                grid-area: 1/3/2/5;
            }

            .header__content {
                text-align: left;
                padding-top: 10rem;
                grid-column: 2/3;
            }

            .header__content h1 {
                font-size: 5rem;
                line-height: 4rem;
            }

            .header__content h2 {
                font-size: 5rem;
                line-height: 4rem;
            }

            .banner {
                display: grid;
                grid-template-columns:
                    minmax(1rem, 1fr) minmax(0, calc(var(--max-width) / 4)) minmax(0, calc(var(--max-width) / 4)) minmax(0, calc(var(--max-width) / 4)) minmax(0, calc(var(--max-width) / 4)) minmax(1rem, 1fr);
                background-color: #ffad23;
            }

            .banner__card:nth-child(1) {
                grid-column: 1/3;
            }
        }

        @media (width > 1024px) {
            .nav__links {
                padding: 0.75rem 4rem;
                gap: 4rem;
            }
        }
    </style>
</head>

<body>

    <header class="header">
        <nav>
            <div class="nav__logo">
                <a href="#">
                    <img src="assets/2.png" alt="logo" class="logo-color" />
                    <img src="assets/logo-white.png" alt="logo" class="logo-white" />
                </a>
            </div>
            <ul class="nav__links" id="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Booking</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <div class="nav__menu__btn" id="menu-btn">
                <span><i class="ri-menu-line"></i></span>
            </div>
        </nav>
        <div class="header__container">
            
            <div class="header__content">
                <h1>DISCOVER</h1>
                <h2>WORLDWIDE</h2>
                <p>
                    We are passionate about uncovering the wonders of our diverse world
                    and sharing them with you. Our mission is to inspire a sense of
                    discovery, and stories that make our planet unique.
                </p>
                <div>
                    <button class="btn">Explore</button>
                </div>
            </div>
            <div class="header__image"><img src="assets/ww.png" alt=""></div>
        </div>
    </header>

  

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="main.js">
        const menuBtn = document.getElementById("menu-btn");
        const navLinks = document.getElementById("nav-links");
        const menuBtnIcon = menuBtn.querySelector("i");

        menuBtn.addEventListener("click", (e) => {
            navLinks.classList.toggle("open");

            const isOpen = navLinks.classList.contains("open");
            menuBtnIcon.setAttribute("class", isOpen ? "ri-close-line" : "ri-menu-line");
        });

        navLinks.addEventListener("click", (e) => {
            navLinks.classList.remove("open");
            menuBtnIcon.setAttribute("class", "ri-menu-line");
        });

        const headerImage = document.querySelector(".header__image");
        headerImage.addEventListener(
            "animationend",
            (e) => {
                setTimeout(() => {
                    headerImage.classList.add("reveal");
                });
            }, {
                once: true
            }
        );

        const scrollRevealOption = {
            distance: "50px",
            origin: "bottom",
            duration: 1000,
        };

        ScrollReveal().reveal(".header__content h1", {
            ...scrollRevealOption,
            delay: 1500,
        });
        ScrollReveal().reveal(".header__content h2", {
            ...scrollRevealOption,
            delay: 2000,
        });
        ScrollReveal().reveal(".header__content p", {
            ...scrollRevealOption,
            delay: 2500,
        });
        ScrollReveal().reveal(".header__content div", {
            ...scrollRevealOption,
            delay: 3000,
        });

        ScrollReveal().reveal(".header .nav__links", {
            delay: 3500,
        });
    </script>
</body>

</html>