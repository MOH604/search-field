<?php

include 'header.php';

?>

<h3>Search Page</h3>

<div class="article-container">
    <?php
        if(isset($_POST['submit-search'])){
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM article WHERE a_title LIKE '%$search%' OR a_text LIKE '%$search%' OR a_authur LIKE '%$search%' OR a_date LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);

            echo "There are ".$queryResult." results!";

            if($queryResult > 0){
                while($row = mysqli_fetch_assoc($result)){
                     echo "<div class='article.box'>
                                <h3>".$row['a_title']."</h3>
                                <h3>".$row['a_text']."</h3>
                                <h3>".$row['a_date']."</h3>
                                <h3>".$row['a_authur']."</h3>
                            </div>"."<br>";
                }
            }
            else "There is no results matching your search!";
        }

    ?>

</div>

