<?php

class Comments
{

    /**
     * returns single comment item with id
     * @param integer $id
     */
    public static function getCommentsItemById($id)
    {
        $id = intval($id);
        if ($id) {
            try {
                $db = Db::getConnection();
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
            $result = $db->query('SELECT * FROM news WHERE id =' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $commentsItem = $result->fetch();
            return $commentsItem;

        }
    }

    /**
     * returns array of news items
     */
    public static function getCommentsList()
    {
        try {
            $db = Db::getConnection();
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
            $commentsList = array();
            $result = $db->query('SELECT * FROM news ORDER BY date DESC LIMIT 10');
            $i = 0;

            while ($row = $result->fetch()) {
                $commentsList[$i]['id'] = $row['id'];
                $commentsList[$i]['date'] = $row['date'];
                $commentsList[$i]['content'] = $row['content'];
                $commentsList[$i]['author_name'] = $row['author_name'];
                $commentsList[$i]['preview'] = $row['preview'];
                $i++;
            }
        return $commentsList;
    }
}