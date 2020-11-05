<?php


class RecSout
{
    static function Print($result)
    {
        foreach ($result as $article) {
            $i = rand(1, 40);
            echo '<div  class="item2" data="' . $i . '" data-actually="' . $article['date'] . '" style= "display: flex ;  flex-direction: row; margin: 15px;">';
            print "<table style=\"color:black; height:100%; font-size: 20px\">";

            echo '<img  src="' . $article['image'] . '"  height="142px" width="142px">';
            print '<tr class="inner-item"><td ><strong class="search-news">' . $article['title'] . '</strong></td></tr> <br>';
            echo '<br>';
            print '<tr style="margin-left: 6px;color: darkred;font-size: 15px;"><td> ' . $article['content'] . '</td></tr> <br>';
            print '<tr style="margin-left: 6px;color: darkred;font-size: 15px;"><td> ' . $article['author'] . '</td></tr> <br>';

            print '<tr style="margin-left: 6px; color: gray; font-size: 15px;"><td>' . $article['date'] . '</td></tr> <br>';
            print "</table>";
            echo "</div>";
        }
    }

}