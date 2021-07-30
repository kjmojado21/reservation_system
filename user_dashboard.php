<?php
include 'datafile.php';
$available_items = $reservation_app->get_items('AVAILABLE');
// echo "<pre>";
// print_r($available_items);
// echo "</pre>";
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
        <div class="jumbotron bg-info text-center">
            <div class="display-4 text-light">
                AVAILABLE ITEMS TO BORROW
            </div>
        </div>
    </div>
        <?php if(!empty($reservation_app->display_announcement())){ ?>
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong><?php echo $reservation_app->display_announcement()['ann_message'] ?></strong> 
            </div>
            
            <script>
              $(".alert").alert();
            </script>
        <?php }?>
    <div class="container mt-3">
        <div class="row">
            <?php $index = 1; ?>
            <?php foreach ($available_items as $row) { 
                $item_id = $row['item_id'];
                ?>
                <div class="col-3">
                    <div class="card w-75 mt-3 mr-3">
                        <div class="card-header">
                            <?php echo "ITEM NUMBER: ".$index ?>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-info text-center">
                                <?php echo $row['item_name'] ?>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-6">
                                    <a href="item_details.php?item_key=<?php echo $item_id ?>" class="btn btn-info">Details</a>
                                </div>
                                <div class="col-6">
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            $index++;
        } ?>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>