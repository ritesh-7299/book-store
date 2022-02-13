<?php
require_once 'header.php';
require_once 'logincheck.php';
?>

<div class="cotainer">
    <div class="row">
        <div class="col-lg-2">
        </div>

        <div class="col-lg-10">

            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Enter username" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>&nbsp;&nbsp;
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">View All</button>
            </form>

        </div>
    </div>
</div>
<?php
require_once 'footer.php';