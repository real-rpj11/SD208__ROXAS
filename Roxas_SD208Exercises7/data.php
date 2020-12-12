<?php
include('test.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Tabled Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<style>
    body{
        background-image: url('background.jpg');
        background-repeat: no-repeat;
    }
</style>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-11 text-center text-white">
                <p class="h1">Data Table</p>
            </div>
            <div class="col float-md-right">
                <button class="btn btn-primary"><a style="text-decoration: none;color: white;" href="index.php">Add</a></button>
            </div>
        </div>
        <?php if (isset($_SESSION['message'])) : ?>
            <div class="bg bg-warning border border-dark rounded p-2 m-2 text-center font-weight-bold mw-100">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>


        <?php endif; ?>
      
        <table class="table table-hover table-light p-2 m-1 mx-100">
            <thead>
                <th scope="col">#</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th colspan="2" class="text-center">Actions</th>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td class="font-weight-bold"><?php echo $row['id']; ?></td>
                        <td><?php echo $row['firstname']; ?></td>
                        <td><?php echo $row['lastname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td>
                            <button type="submit" class="btn btn-success text-dark"><a style="text-decoration: none;color: black;" href="update.php?edit=<?php echo $row['id']; ?>">Update</a></button>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-danger text-dark"><a style="text-decoration: none;color: black;" href="test.php?del=<?php echo $row['id'] ?>">Delete</a></button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>