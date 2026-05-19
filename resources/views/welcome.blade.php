<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Portfolio</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f5f5;
        }

        .hero {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex-direction: column;
            padding-top: 60px; /* fix navbar overlap */
        }

        .hero h1 {
            font-size: 48px;
            margin: 0;
        }

        .hero p {
            font-size: 18px;
            color: #555;
        }

        section {
            padding: 80px 10%;
            text-align: center;
        }

        .card {
            background: white;
            padding: 20px;
            margin: 10px;
            display: inline-block;
            width: 250px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    {{-- NAVBAR --}}
    @include('users.partials.navbar')

    {{-- HERO --}}
    <div class="hero">
        <h1>Hi, I'm a Laravel Developer</h1>
        <p>I build modern, clean and scalable web applications.</p>
    </div>

    {{-- ABOUT --}}
    <section id="about">
        <h2>About Me</h2>
        <p>I am passionate about Laravel, backend systems, and building real-world applications.</p>
    </section>

    {{-- PROJECTS --}}
    <section id="projects">
        <h2>Projects</h2>

        <div class="card">Portfolio Website</div>
        <div class="card">Laravel CRUD System</div>
        <div class="card">E-Commerce API</div>
    </section>

    {{-- CONTACT --}}
    <section id="contact">
        <h2>Contact</h2>
        <p>Email: yourname@gmail.com</p>
    </section>

    {{-- FOOTER --}}
    @include('users.partials.footer')

</body>
</html>