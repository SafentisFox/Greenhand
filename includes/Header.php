<header>
    <div><a href=""><img src="../Assets/logo-placeholder.png" alt="" class="GH_logo"></a></div>
    <nav id="header-links">
        <a href="../index.php#our-activities">Our Activities</a>
        <a href="../index.php#our-articles">Our Articles</a>
        <a href="../About_Us/about_us.php">About Us</a>
        <a href="../index.php#contact-us">Contact Us</a>
    </nav>
    <div id="mobile-dropdown">
        <div id="img-container" onclick="toggleDropdownMenu()">
            <img src="../Assets/dropdown-menu.png" alt="">
            <div id="mobile-dropdown-menu" class="section-card">
                <a href="../index.php/#our-activities">Our Activities</a>
                <a href="../index.php/#our-articles">Our Articles</a>
                <a href="../About_Us/about_us.php">About Us</a>
                <a href="../index.php/#contact-us">Contact Us</a>
            </div>
        </div>
    </div>
    <div id="header-sign-up">
        <a href="../SignUp/SignUp.html">Sign Up</a>
        <?php
        if(isset($_SESSION['id'])){
            echo '<a href="../LogIn/logout.php">Log Out</a>';
        }
        else{
            echo '<a href="../LogIn/login.php">Log In</a>';
        }
        ?>
    </div>
</header>