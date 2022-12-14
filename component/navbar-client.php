<section data-bs-version="5.1" class="menu cid-s48OLK6784" once="menu" id="menu1-h">
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <?php 
                    $f_id = $_REQUEST["id"];

                    include("fetch-franchisees.php");
                    foreach($result as $u) {
                        $name = $u->first_name . " " . $u->last_name;

                    }
                ?>
                <span class="navbar-caption-wrap" style="font-size: .7em"><a class="navbar-caption text-black" href="#">Welcome to <?php echo $name; ?>'s Profile!</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="how-to-franchise.php?id=<?php echo $f_id; ?>">Toktok</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="siomaiking.php?id=<?php echo $f_id; ?>">Siomai King</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="kind.php?id=<?php echo $f_id; ?>">Kind</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="my-story.php?id=<?php echo $f_id; ?>">My Story</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="shoplinks.php?id=<?php echo $f_id; ?>">Shoplinks</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="contacts.php?id=<?php echo $f_id; ?>">Contacts</a></li></ul>
            </div>
        </div>
    </nav>

</section>