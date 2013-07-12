        <header id="header">
            <a href="<?=$basePath?>"><img src="<?=$basePath?>resources/img/logo.jpg" id="logo" alt="<?=$siteName?>" width="300" /></a>
            <ul id="main-menu">
                <?php
                    require ('routes.conf.php');
                    $routes = getMenu();
                    foreach ($routes as $path => $route) {
                        echo '<li><a href="'.$basePath.$path.'/"'.($path == CURRENT_PAGE ? 'class="active"' : '').'>'.$route['title'].'</a></li>'."\n";
                    }
                ?>
            </ul>
        </header><!-- #header-->