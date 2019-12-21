<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . '/ecommerce/config.php');
?>

<section id="createAnAccount" class="mt-5">
    <div class="container">
        <div class="row" >
            <div class="col-8 offset-2">
                <h4 class="createAccount">CREATE AN ACCOUNT</h4>
                <form method="post" action="<?=$webroot?>admin/Users/login-processor.php" enctype="multipart/form-data">
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

