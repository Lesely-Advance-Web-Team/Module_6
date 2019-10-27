<!DOCTYPE html>
    <head>
        <title>Mod6 Web Class 1st CSM</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <?php include 'header.php' ?>
        <?php include 'nav.php' ?>
        <main>

            <h2>New Blog Post Submission</h2>
            <form class="post-submissions-form" action="submit-post.php" method="POST">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" placeholder="Title">
                <br>
                <label for="author">Author</label>
                <input type="text" id="author" name="author" placeholder="Author">
                <br>
                <label for="location">Location</label>
                <input type="text" id="location" name="date" placeholder="Location">
                <br>
                <label for="date">Date</label>
                <input type="date" id="date" name="date" placeholder="Date">
                <br>
                <label for="content">Description</label>
                <textarea name="content" id="description" placeholder="Description"></textarea>
                <button type="submit" value="Submit">Submit</button>
            </form>

        </main>
        <?php include 'footer.php' ?>
    </body>
</html>