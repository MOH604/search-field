<?php

include 'header.php';

?>

<form action="search.php" method="POST">
    <input type="text" name="search" placeholder="Search">
    <button type="submit" name="submit-search">Search</button>
</form>

<h3>Front Page</h3>
<h2>All articles</h2>

<div class="article-container">
    <?php

    $sql = 'SELECT * FROM article';
    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);

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

    ?>


</div>


</body>
</html>