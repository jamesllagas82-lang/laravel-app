<nav class="navbar">
    <div class="container">

        <a href="#home" class="logo">MyPortfolio</a>

        <button class="menu-toggle" onclick="toggleMenu()">
            ☰
        </button>

        <ul class="nav-links" id="navLinks">
            <li><a href="#home" onclick="closeMenu()">Home</a></li>
            <li><a href="#about" onclick="closeMenu()">About</a></li>
            <li><a href="#projects" onclick="closeMenu()">Projects</a></li>
            <li><a href="#contact" onclick="closeMenu()">Contact</a></li>
        </ul>

    </div>
</nav>

<style>
.navbar {
    position: fixed;
    top: 0;
    width: 100%;
    background: rgba(17,17,17,0.9);
    backdrop-filter: blur(10px);
    padding: 15px 0;
    z-index: 1000;
}

.container {
    width: 90%;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
}

.logo {
    color: white;
    font-size: 20px;
    font-weight: bold;
    text-decoration: none;
}

/* DESKTOP */
.nav-links {
    list-style: none;
    display: flex;
    gap: 25px;
}

.nav-links a {
    color: white;
    text-decoration: none;
    transition: 0.3s;
}

.nav-links a:hover {
    color: #00bcd4;
}

/* TOGGLE BUTTON */
.menu-toggle {
    display: none;
    font-size: 28px;
    background: none;
    border: none;
    color: white;
    cursor: pointer;
}

/* MOBILE DRAWER */
@media (max-width: 768px) {

    .menu-toggle {
        display: block;
    }

    .nav-links {
        position: absolute;
        top: 60px;
        right: 0;

        width: 220px;
        flex-direction: column;
        gap: 15px;

        padding: 15px;
        border-radius: 12px;

        background: rgba(17,17,17,0.95);
        backdrop-filter: blur(12px);

        /* smooth animation */
        opacity: 0;
        transform: translateY(-15px);
        pointer-events: none;
        transition: all 0.25s ease-in-out;
    }

    .nav-links.show {
        opacity: 1;
        transform: translateY(0);
        pointer-events: auto;
    }
}
</style>

<script>
function toggleMenu() {
    document.getElementById("navLinks").classList.toggle("show");
}

function closeMenu() {
    document.getElementById("navLinks").classList.remove("show");
}
</script>