<?php

    include_once ROOT.'/models/News.php';

class NewsController
{
    public static function actionHome ()
    {
        $newsList = [];
        $newsList = News::getNewsList();

        require_once (ROOT.'/views/news/home.php');

        return true;
    }

    public function actionView ($id)
    {
        if ($id) {
            $newsItem = News::getNewsItemById($id);

            require_once (ROOT.'/views/news/view_id.php');
        }
        return true;
    }

    public function actionArchive ()
    {
        $newsArchive = News::getNewsArchive();

        require_once (ROOT.'/views/news/archive.php');

        return true;
    }
}

?>