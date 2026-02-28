<nav class="custom-navbar" style="background-color: white !important;">
    <div class="container nav-wrapper">

        <!-- Logo -->
        <div class="logo">
            <a href="#">
                <img src="images/logo-2.jpg" alt="Kittur Developers" style="height:80px">
            </a>
        </div>

        <!-- Navigation -->
        <ul class="nav-menu" id="navMenu">
            <li><a href="mainIndex.php">Home</a></li>

            <li class="dropdown">
                <a href="#">Projects</a>
                <ul class="dropdown-menu">
                    <li><a href="project.php">Completed Projects</a></li>
                    <li><a href="ongoing-project.php">Current Projects</a></li>
                </ul>
            </li>

            <li><a href="career5.php">Career</a></li>
            <li><a href="about2.php">About</a></li>
            <li><a href="contact-us.php">Contact</a></li>
        </ul>

        <!-- Hamburger -->
        <button class="menu-toggle" id="menuToggle">☰</button>

    </div>
</nav>
<script>
    const menuToggle = document.getElementById("menuToggle");
    const navMenu = document.getElementById("navMenu");

    // Toggle menu in mobile
    menuToggle.addEventListener("click", function () {
        navMenu.classList.toggle("active");
    });

    // Dropdown click for mobile
    document.querySelectorAll(".dropdown > a").forEach(item => {
        item.addEventListener("click", function (e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                this.nextElementSibling.classList.toggle("show");
            }
        });
    });
</script>