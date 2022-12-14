<section data-bs-version="5.1" class="menu cid-s48OLK6784" once="menu" id="menu1-h">
    <nav class="navbar navbar-dropdown navbar-fixed-top collapsed">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="#">Franchising Business</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <?php 
                $a_id = $_SESSION["u"];
            ?>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="franchisees.php?a_id=<?php echo $a_id; ?>">Franchisees</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="register.php">Registration<br></a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="franchisee-detail.php?id=<?php echo $a_id; ?>">Personal Information</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="profile.php?id=<?php echo $a_id; ?>">Franchisee Profile<br></a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="clients.php?id=<?php echo $a_id; ?>">Clients<br></a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="viewers.php?id=<?php echo $a_id; ?>">Viewers<br></a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="partners.php?id=<?php echo $a_id; ?>">Partners<br></a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="recap.pdf" target="_blank">View Presentation<br></a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="logout.php">Logout</a></li></ul>
            </div>
        </div>
    </nav>

</section>