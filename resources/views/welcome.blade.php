<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #e4ecf3);
            padding-top: 70px; /* FIX NAVBAR OVERLAP */
        }

        /* HERO */
        .hero {
            min-height: calc(100vh - 70px);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 80px 10%;
            gap: 40px;
        }

        .hero-text {
            max-width: 600px;
        }

        .hero h1 {
            font-size: 50px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
            color: #555;
            line-height: 1.6;
        }

        .hero-img {
            width: 420px;
            height: 420px;
            max-width: 100%;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0 10px 30px rgba(0,0,0,0.25);
            border: 5px solid white;
        }

        /* SECTIONS */
        section {
            padding: 80px 10%;
            text-align: center;
        }

        /* CARDS */
        .card {
            background: white;
            padding: 20px;
            margin: 10px;
            display: inline-block;
            width: 250px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        /* BUTTONS */
        .btn {
            padding: 10px 18px;
            border-radius: 6px;
            text-decoration: none;
            display: inline-block;
            margin-right: 10px;
        }

        .btn-dark {
            background: #111;
            color: white;
        }

        .btn-outline {
            border: 1px solid #111;
            color: #111;
        }

        /* MOBILE RESPONSIVE */
        @media (max-width: 768px) {

            .hero {
                flex-direction: column;
                text-align: center;
                padding: 60px 5%;
            }

            .hero h1 {
                font-size: 32px;
            }

            .hero-img {
                width: 250px;
                height: 250px;
            }
        }
    </style>
</head>

<body>

    {{-- NAVBAR --}}
    @include('users.partials.navbar')

    {{-- HERO --}}
    <div class="hero" id="home">

        <div class="hero-text">
            <h1>
                Hi, I’m James 👋 <br>
                Junior Software Developer
            </h1>

            <p>
                Fresh IT graduate passionate about building modern web applications,
                mobile-friendly systems, and clean UI/UX experiences.
            </p>

            <div style="margin-top:20px;">
                <a href="#projects" class="btn btn-dark">View Projects</a>
                <a href="#" class="btn btn-outline">Download CV</a>
            </div>
        </div>

        <img class="hero-img" src="{{ asset('images/profile.jpg') }}" alt="Profile">

    </div>

    {{-- ABOUT --}}
    <section id="about">
        <h2>About Me</h2>
        <p style="max-width:700px; margin:auto;">
            I am a fresh IT graduate with a passion for web development and software systems.
            I enjoy building applications that solve real problems and improve user experience.
        </p>
    </section>

    {{-- PROJECTS --}}
    <section id="projects">
        <h2>Projects</h2>

        <div class="card">Portfolio Website</div>
        <div class="card">CRUD System</div>
        <div class="card">E-Commerce API</div>
    </section>

    {{-- CONTACT --}}
    <section id="contact">
        <h2>Contact</h2>
        <p>Email: jamesllagas82@gmail.com</p>
    </section>

</body>

</html>