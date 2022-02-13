<?php
require_once 'header.php';
require_once 'loginCheck.php';
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
                <h3 class="card-title text-primary">Registerd Users</h3>
                <a href="registered_users.php" class="btn btn-success" style="width: 100%;">View Users</a>
            </div>
        </div>


        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/bookstore-logo.jpg" alt="Card image cap">
            <div class="card-body">
                <h3 class="card-title text-primary">Manage Books</h3>
                <a href="manage_books.php" class="btn btn-success" style="width: 100%;">View Users</a>
            </div>
        </div>


        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/bookstore-logo.jpg" alt="Card image cap">
            <div class="card-body">
                <h3 class="card-title text-primary">Orders History</h3>
                <a href="orders.php" class="btn btn-success" style="width: 100%;">View Users</a>
            </div>
        </div>

    </div>
</div>
<?php
require_once 'footer.php';