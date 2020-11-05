<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="main2.html">PanOveflow</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="main3.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="questions.php">Questions</a>
            </li>

        </ul>

    </div>
</nav>
<div class="first" style=" text-align:center">
    <?php
    require_once('Sout.php');
    require_once('link.php');


    $link = $conn->connect();

    $id = $_GET['mess'];

    $stmt = $link->prepare("SELECT users.username,questions.id, questions.image, questions.title,questions.content , questions.date FROM questions
INNER JOIN users 
on users.id=questions.user_id
WHERE id=$id");


    $stmt->execute();


    Sout::print($stmt->get_result());
    ?>

</div>
<div class="container">
    <div class="col-lg-12">
        <h2 class="text-center">
            Answers: </h2>
    </div>
    <div class="col-lg-12">


    </div>
    <div class="col-lg-12">
        <form action="Addanswer.php" method="get">
            <div class="form-group">
                <label for="comment-name">Name:</label>
                <input type="email" class="form-control" name="author" id="comment-name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="comment-body">Comment:</label>
                <textarea type="password" name="content" class="form-control" id="comment-body"
                          placeholder="comment"></textarea>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date">
            </div>
            <div class="form-group form-check text-right">
                <button type="submit" name="add" id="comment-add" class="btn btn-primary">add Comment</button>
            </div>
        </form>
    </div>

</div>


</body>
</html>