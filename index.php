
<?php
require_once "vendor/autoload.php";
//require_once "App/db/posts/index.php";
echo "jehhgdh"
$route = $_GET['route'];
switch($route)
{
    case '':
        require_once 'app/db/posts/index.php';
        break;

    case 'insertPost':
        require_once 'app/db/posts/insertPost.php';
        break;

    case 'deletePost':
        require_once 'app/db/posts/deletePost.php';
        break;

    case 'updatePost':
        require_once 'app/db/posts/updatePost.php';
        break;
}
