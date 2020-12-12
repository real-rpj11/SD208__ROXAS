<?php
session_start();

if (isset($_POST['submit'])) {
    $_SESSION['bookmarks'][$_POST['bookmark']] = $_POST['url'];
}
if (isset($_POST['clear'])) {
    $_SESSION['bookmarks'] = array();
}
if (isset($_POST['delete'])) {
    unset($_SESSION['bookmarks'][$_POST['bookmark']]);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Bookmark</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<style>
    body {
        background-image: url('exercises5-background.jpg');
        background-repeat: no-repeat;
        background-size: 100%;
    }

</style>

<body>

    <div class="container">
        <p class="h1 text-center font-weight-bold mt-2">Bookmarks</p>
        <div class="row">
            <div class="col-md">
                <form action="bookmark.php" method="post" class="bg bg-light border border-dark rounded m-1 p-5">
                    <div class="form-group">
                        <label for="name" class="font-weight-bold">BOOKMARK NAME:</label>
                        <input type="text" class="form-control" name="bookmark">
                    </div>
                    <div class="form-group">
                        <label for="url" class="font-weight-bold">URL</label>
                        <input type="url" class="form-control" name="url">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Add Bookmark" name="submit" class="btn btn-success">
                        <input type="submit" value="Clear All" name="clear" class="btn btn-danger">
                    </div>
                </form>
            </div>
            <div class="col-md">
                <table class="table table-striped bg bg-light m-1 p-1">
                    <tbody>
                        <?php
                        foreach ($_SESSION['bookmarks'] as $bookmarkname => $url) { ?>
                            <tr class="border border-dark">
                                <td ><a style="text-decoration: none; font-weight: bold; font-size: 20px;" href="<?php echo $url; ?>" target="_blank"><?php echo  $bookmarkname; ?></a></td>
                                <form action="" method="post">
                                    <td><input type="hidden" name="bookmark" value="<?php echo $bookmarkname; ?>"></td>
                                    <td class="text-right"><input type="submit" value="X" name="delete" class="btn btn-secondary"></td>
                                </form>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</body>

</html>