<?php

class News
{
     public static function getNewsItemById ($id)
     {
         $id = intval($id);
         if ($id) {
             $db = Db::getConnection();
             $result = $db->query('SELECT * FROM news WHERE id='. $id);
             $newsItem = $result->fetch();
             return $newsItem;
         }
     }

    public static function getNewsList ()
    {
        $db = Db::getConnection();

        $newsList = [];

        $result = $db->query('SELECT id, title, date, short_content, preview '
                                      . 'FROM news '
                                      . 'ORDER BY date DESC '
                                      . 'LIMIT 4');
        $i=0;
        while ($row = $result->fetch()){
            $newsList[$i]['id']=$row['id'];
            $newsList[$i]['title']=$row['title'];
            $newsList[$i]['date']=$row['date'];
            $newsList[$i]['short_content']=$row['short_content'];
            $newsList[$i]['preview']=$row['preview'];
            $i++;
        }

        return $newsList;
    }

    public static function getNewsArchive ()
    {
        $db = Db::getConnection();

        $newsArchive = [];

        $result = $db->query('SELECT id, title, date, author_name FROM news ORDER BY date DESC LIMIT 4, 6');
        $i=0;
        while ($row = $result->fetch()){
            $newsArchive[$i]['id']=$row['id'];
            $newsArchive[$i]['title']=$row['title'];
            $newsArchive[$i]['date']=$row['date'];
            $newsArchive[$i]['author_name']=$row['author_name'];
            $i++;
        }

        return $newsArchive;
    }

}


?>