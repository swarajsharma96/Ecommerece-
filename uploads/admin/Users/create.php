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
                <p class="text-center font-weight-bolder text-warning">
                    <?php
                    session_start();
                    echo $_SESSION['message'];
                    $_SESSION['message'] = "";
                    ?>
                </p>
                <h3>New One</h3>
                <form method="post" action="store.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="input-title">Name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="input-name"
                            name="name"
                            value=""
                            aria-describedby="titleHelp"
                            placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="input-email">Email</label>
                        <input
                            type="text"
                            class="form-control"
                            id="input-email"
                            name="email"
                            value=""
                            aria-describedby="emailHelp"
                            placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="input-phone">Phone</label>
                        <input
                                type="tel"
                                class="form-control"
                                id="input-phone"
                                name="phone"
                                value=""
                                aria-describedby="PhoneHelp"
                                placeholder="Enter Phone">
                    </div>
                    <div class="form-group">
                        <label for="input-password">Password</label>
                        <input
                                type="password"
                                class="form-control"
                                id="input-password"
                                name="password"
                                value=""
                                aria-describedby="passwordHelp"
                                placeholder="Enter password">
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
