    <footer id="footer">
        <div id="copyright">
            &copy; <?=$siteName?> 2013 - ...
        </div>
        <?php if(CURRENT_PAGE != '/'): ?>
        <div id="sub-menu">
            <ul>
                <?php
                    $routes = getMenu(false);
                    $em = end($routes);
                    foreach ($routes as $path => $route) {
                        echo '<a href="'.$basePath.$path.'/"'.($path == CURRENT_PAGE ? 'class="hint"' : '').'>'.$route['title'].'</a>';
                        if ($route != $em){
                            echo '|';
                        } 
                    }
                ?>
            </ul>
        </div>
        <?php endif; ?>
        <div id="social">
            <a href="http://vk.com/ventodeforro"><img src="<?=$basePath?>resources/img/icon_vk.png" alt="Vento de Forró ВКонтакте" /></a>
            <a href="https://www.facebook.com/groups/ventodeforro/"><img src="<?=$basePath?>resources/img/icon_facebook.png" alt="Vento de Forró Facebook" /></a>
            <a href="http://www.youtube.com/user/ventodeforro"><img src="<?=$basePath?>resources/img/icon_youtube.png" alt="Vento de Forró YouTube" /></a>
        </div>
    </footer><!-- #footer -->