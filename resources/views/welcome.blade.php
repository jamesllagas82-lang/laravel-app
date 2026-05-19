@include('users.partials.header')

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

    @include('users.partials.footer')
<!-- </body>

</html> -->