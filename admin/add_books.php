<?php
require_once 'header.php';
require_once 'logincheck.php';
$bookname_error = $author_error = $price_error = $category_error = $file_error = "";

?>
<div class="cotainer">
    <div class="row">

        <div class="col-lg-12">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-5"></div>

                <form class="form" method="POST">
                    <div class="form-group">
                        <label for="">Name Of Book</label>
                        <input type="text" name="book_name" class="form-control">
                        <span class="text-danger"><?php echo $bookname_error; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="">Author</label>
                        <input type="text" name="author" class="form-control">
                        <span class="text-danger"><?php echo $author_error; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="text" name="price" class="form-control">
                        <span class="text-danger"><?php echo $price_error; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="">Category</label>
                        <input type="text" name="category" class="form-control">
                        <span class="text-danger"><?php echo $category_error; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="">Upload Book Image</label>
                        <input type="file" name="book_img" class="form-control">
                        <span class="text-danger"><?php echo $file_error; ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Add Book" class="btn btn-success">
                    </div>
                </form>

                <div class="col-sm-4"></div>
            </div>



        </div>
    </div>
</div>
<?php
require_once 'footer.php';