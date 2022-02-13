<?php
require_once 'header.php';
require_once 'logincheck.php';
?>
<div class="cotainer">
    <div class="row">
        <div class="col-lg-2">

        </div>
        <div class="col-lg-10">
            <div class="alert alert-success bg-success text-center text-light">
                <h5>Welcome to Admin Panel</h5>
            </div>
        </div>
        <div class="col-lg-2">

        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/bookstore-logo.jpg" alt="Card image cap">
            <div class="card-body">
                <h3 class="card-title text-primary">Add Books</h3>
                <a href="add_books.php" class="btn btn-success" style="width: 100%;">Add Books</a>
            </div>
        </div>


        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/bookstore-logo.jpg" alt="Card image cap">
            <div class="card-body">
                <h3 class="card-title text-primary">View Books</h3>
                <a href="view_books.php" class="btn btn-success" style="width: 100%;">View Books</a>
            </div>
        </div>


        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/bookstore-logo.jpg" alt="Card image cap">
            <div class="card-body">
                <h3 class="card-title text-primary">Remove Books</h3>
                <a href="delete_books.php" class="btn btn-success" style="width: 100%;">Remove Books</a>
            </div>
        </div>

    </div>
</div>
<?php
require_once 'footer.php';