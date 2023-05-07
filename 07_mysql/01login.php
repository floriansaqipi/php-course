<?php include "db.php" ?>
<?php include "functions.php" ?>

<?php

createRows();

?>
<?php include "includes/header.php"?>

<body>
    <div class="container">
        <div class="col-sm-6">
            <h1 class="text-center">Create</h1>
            <form action="01login.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="submit" value="Create">
                </div>

            </form>

        </div>
    


<?php include "includes/footer.php"; ?>