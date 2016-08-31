<?php
include_once ROOT.'/models/Comments.php';

class CommentsController
{
    public function actionIndex()
    {
        $commentsList = array();
        $commentsList = Comments::getCommentsList();

        require_once(ROOT.'/views/index.php');
        return true;
    }
    public function actionView($id)
    {
        $commentsItem = Comments::getCommentsItemById($id);

        echo'<pre>';
        print_r($commentsItem);
        echo'<pre>';
        return true;

        echo'actionView';
    }



}