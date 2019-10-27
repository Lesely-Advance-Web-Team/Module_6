<!DOCTYPE html>
    <head>
        <title>Mod6 Web Class 1st CSM</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>

        <?php include 'header.php' ?>
        <?php include 'nav.php' ?>
   <main>
    <ul class="blog-list">
        <?php
        function getPostTitlesFromDatabase() {
        //Retreive posts from posts table
        include_once 'db_connect.php';
        $sql = "SELECT title FROM posts";
        $results = mysqli_query($conn, $sql);

        //Get each result, assoc array, add title
        $postTitles = array();
        while($row = mysqli_fetch_assoc($results)){
            array_push($postTitles, $row['title']);
        }
        return $postTitles;
    }
    

        $postTitles = getPostTitlesFromDatabase();

        foreach($postTitles as $postTitle) {
            echo "<li><a href='post.php?title=" . $postTitle . "'>" . $postTitle . "</a></li>";
        }
                    ?>
                
                </ul>
        </main>
                <?php include 'footer.php' ?>

            </body>
        </html>        