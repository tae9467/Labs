<header>
    <img alt="RIT Saunders college of business logo" src="/assets/img/ritLogo.png">
    <div></div>
    <nav class="hideInMobile">
        <ul>
            <li><a <?php if(('/Home/remoteLabs' === $_SERVER["REQUEST_URI"]) || ('/Home' === $_SERVER["REQUEST_URI"])){ ?> class="active" <?php } ?>" href="/Home/remoteLabs"><i class="bi bi-pc-display"></i> Remote Labs</a></li>
            <li><a <?php if(('/Home/software' === $_SERVER["REQUEST_URI"])){ ?> class="active" <?php } ?>" href="/Home/software"><i class="bi bi-menu-button-wide"></i> Software</a></li>
            <li><a <?php if(('/Home/files' === $_SERVER["REQUEST_URI"])){ ?> class="active" <?php } ?>" href="/Home/files"><i class="bi bi-folder"></i> Printing & Files</a></li>
            <li><a <?php if(('/Home/support' === $_SERVER["REQUEST_URI"])){ ?> class="active" <?php } ?>" href="/Home/support"><i class="bi bi-headset"></i> Support</a></li>
            <li><a <?php if(('/Home/laptops' === $_SERVER["REQUEST_URI"])){ ?> class="active" <?php } ?>" href="/Home/laptops"><i class="bi bi-laptop"></i> Laptops</a></li>
        </ul>
    </nav>
    <nav class="hideInDesktop">
        <ul>
            <li><a <?php if(('/Home/remoteLabs' === $_SERVER["REQUEST_URI"]) || ('/Home' === $_SERVER["REQUEST_URI"])){ ?> class="active" <?php } ?>" href="/Home/remoteLabs"><i class="bi bi-pc-display"></i> Remote Labs</a></li>
        </ul>
    </nav>
    <!-- For mobile screens -->
    <section onclick="toggleMobileMenu(this)" onmouseover="turnColor()" onmouseleave="resetColor()">
        <div class="bar1 bar"></div>
        <div class="bar2 bar"></div>
        <div class="bar3 bar"></div>
        <ul>
            <li><a <?php if(('/Home/remoteLabs' === $_SERVER["REQUEST_URI"]) || ('/Home' === $_SERVER["REQUEST_URI"])){ ?> class="active" <?php } ?>" href="/Home/remoteLabs"><i class="bi bi-pc-display"></i> Remote Labs</a></li>
            <li><a <?php if(('/Home/software' === $_SERVER["REQUEST_URI"])){ ?> class="active" <?php } ?>" href="/Home/software"><i class="bi bi-menu-button-wide"></i> Software</a></li>
            <li><a <?php if(('/Home/files' === $_SERVER["REQUEST_URI"])){ ?> class="active" <?php } ?>" href="/Home/files"><i class="bi bi-folder"></i> Printing & Files</a></li>
            <li><a <?php if(('/Home/support' === $_SERVER["REQUEST_URI"])){ ?> class="active" <?php } ?>" href="/Home/support"><i class="bi bi-headset"></i> Support</a></li>
            <li><a <?php if(('/Home/laptops' === $_SERVER["REQUEST_URI"])){ ?> class="active" <?php } ?>" href="/Home/laptops"><i class="bi bi-laptop"></i> Laptops</a></li>
        </ul>
    </section>
</header>


