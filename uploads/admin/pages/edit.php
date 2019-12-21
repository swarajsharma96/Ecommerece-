<?php
$_id = $_GET['id'];

//echo $_id;
$_id = $_GET['id'];
//var_dump($_GET);
//connection to database
$conn = new PDO("mysql:host=localhost;dbname=banners", "root","");
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = " SELECT * FROM `page` where id = :id";

//prepare a statement
$stmt = $conn->prepare($query);
$stmt->bindParam(':id',$_id);
$result = $stmt->execute();
$page = $stmt->fetch();

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Create</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">

                <form method="post" action="update.php">
                    <div class="form-group">
                        <input
                            type="hidden"
                            class="form-control"
                            id="input-id"
                            name="id"
                            value="<?= $page['id'];?>"
                            aria-describedby="idHelp"
                            placeholder="Enter id">
                    </div>
                    <div class="form-group">
                        <label for="input-title">Title</label>
                        <input
                            type="text"
                            class="form-control"
                            id="input-title"
                            name="title"
                            value="<?= $page['title'];?>"
                            aria-describedby="titleHelp"
                            placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label for="input-description">Description</label>
                        <input
                            type=text
                            class="form-control"
                            id="input-description"
                            name="description"
                            value="<?= $page['description'];?>"
                            aria-describedby="descriptionHelp"
                            placeholder="Enter Description">
                    </div><div class="form-group">
                        <label for="input-link">Link</label>
                        <input
                            type=text
                            class="form-control"
                            id="input-link"
                            name="link"
                            value="<?= $page['link'];?>"
                            aria-describedby="SubscriberHelp"
                            placeholder="Enter Subscriber">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
