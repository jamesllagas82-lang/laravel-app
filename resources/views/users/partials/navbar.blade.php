<nav class="navbar">
    <div class="container">
        <a href="/" class="logo">MyPortfolio</a>

        <ul class="nav-links">
            <li><a href="/">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>
</nav>

<style>
.navbar {
    width: 100%;
    padding: 15px 0;
    background: #111;
    position: fixed;
    top: 0;
    left: 0;
}

.container {
    width: 90%;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    color: white;
    font-size: 20px;
    font-weight: bold;
    text-decoration: none;
}

.nav-links {
    list-style: none;
    display: flex;
    gap: 20px;
}

.nav-links a {
    color: white;
    text-decoration: none;
    transition: 0.3s;
}

.nav-links a:hover {
    color: #00bcd4;
}
</style>