<header id="nawalNavbar">
    <nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand ml-3" href="index.php">
            <img src="assets/img/logo/logo-rouge-fond-transparent.png" class="d-inline-block align-top"
                 alt="logo de la wild code school"/></a>

        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="link-1" href="clothes.php">Clothes</a>
                </li>
                <li class="nav-item">
                    <a class="link-1" href="goodies.php">Goodies</a>
                </li>
                <li class="nav-item">
                    <a class="link-1" href="kitchen.php">Kitchen</a>
                </li>
                <li class="nav-item">
                    <a class="link-1" href="slippers.php">Slippers</a>
                </li>
                <li class="nav-item">
                    <a class="link-1" href="figurines.php">Figurines</a>
                </li>
                <li class="nav-item">
                    <a class="link-1" href="index.php#aboutus">About Us</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"/>
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="jumbotron paral paralsec m-0">
        <div class="container text-center">
            <h1 class="display-4"><?= $titleJumbo; ?></h1>
            <!--   <div id="secretgift"> <img id="secretgift" src="https://www.starwars-universe.com/images/multimedia/Images/Th%E8mes%20de%20Bureau/Gifs%20anim%E9s/~Landing.gif"></div>-->
            <p class="lead"><?= $subTitleJumbo; ?></p>
            <?php if ($addNewProductButton && !empty($namePageNewProductForm)) : ?>
            <form action="<?= $namePageNewProductForm ?>">
                    <button type="submit" class="btn btn-outline-light btn-lg">+ ADD NEW</button>
                </form><?php endif ?>
        </div>
    </div>

</header>