<?php
include 'datafile.php';
$item_list = $reservation_app->get_item_list();

// print_r($item_list);
// die();
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <!-- add item -->
                <form action="datafile.php" method="post" class="p-3">
                    <input type="text" name="item_name" placeholder="Item Name" id="" class="form-control mt-3">
                    <input type="text" name="desc" id="" placeholder="Description" class="form-control mt-3">

                    <button type="submit" name="save_item" class="btn btn-info mt-3 btn-block">Save item</button>

                </form>
            </div>
            <div class="col-lg-6">
                <!-- item list -->
                <table class="table mt-3">
                    <thead class="thead-dark">
                        <th>Item Name</th>
                        <th>Description</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        <?php foreach ($item_list as $row) { ?>
                            <tr>
                                <td><?php echo $row['item_name'] ?></td>
                                <td><?php echo $row['item_desc'] ?></td>
                                <?php
                                if ($row['status'] == 'AVAILABLE') {
                                ?>
                                    <td>
                                        <span class="badge badge-pill badge-success">
                                            <?php echo $row['status'] ?>
                                        </span>
                                    </td>
                                <?php
                                } else {
                                ?>
                                    <td>
                                        <span class="badge badge-pill badge-danger">
                                            <?php echo $row['status'] ?>
                                        </span>
                                    </td>
                                <?php
                                }
                                ?>

                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container">
        <form action="datafile.php" method="post" class="w-50 mx-auto p-2 mt-5">
            <input type="text" name="announcement" id="" placeholder="add announcement"  class="form-control">
            <button type="submit" name="add_announcent"  class="btn btn-primary  mt-3">Post Annoucement</button>
        </form>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>