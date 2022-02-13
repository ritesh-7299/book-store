<?php
require_once '../config.php';
require_once 'header.php';
require_once 'logincheck.php';
require_once 'function.php';

?>

<div class="cotainer">
    <div class="row">
        <div class="col-lg-2">
        </div>

        <div class="col-lg-10">

            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Enter username" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Delete"></button>&nbsp;&nbsp;

            </form>

        </div>
    </div>
</div>
<?php
require_once 'footer.php';