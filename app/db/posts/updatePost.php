<?php
use app\models\PostData;
use app\db\components\QueryBuilder;
if(!isset($_GET['id'])||empty($_GET['id'])){
    exit;

}

$post=$newPost->getPostId($_GET['id']);


if(count($_POST)>0){
    $_POST["id"]=$_GET['id'];
    $id=$postData->update($_POST);
    header("Location: /");
    exit;
}


require_once "App/views/posts/updatePost.view.php";
