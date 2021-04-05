<?php

if (isset($url_action)) {
    switch ($url_action) {
        case "404":
            require APP . 'view/basic/html_header.php';
            require APP . 'view/basic/navbar.php';
            require APP . 'view/errors/404.php';
            require APP . 'view/basic/html_footer.php';
            break;
        case "access_denied":
            require APP . 'view/basic/html_header.php';
            require APP . 'view/basic/navbar.php';
            require APP . 'view/errors/access_denied.php';
            require APP . 'view/basic/html_footer.php';
            break;
        default:
            require APP . 'view/basic/html_header.php';
            require APP . 'view/basic/navbar.php';
            require APP . 'view/errors/default.php';
            require APP . 'view/basic/html_footer.php';
    }
}
