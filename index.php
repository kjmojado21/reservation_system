<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/319afa374e.js"></script>
</head>

<body>
  <div class="container my-5">
    <div class="card w-75 mt-5 mx-auto">
      <div class="card-header bg-info text-light">
        <p class="lead text-center">
          RESERVATION SYSTEM V1.0
        </p>
      </div>
      <div class="card-body">
        <form action="datafile.php" method="post">
          <div class="row">

            <div class="col-lg-6">

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fas fa-key"></i></span>
                </div>
                <input type="text" name="username" placeholder="Username" id="" class="form-control">
              </div>

            </div>

            <div class="col-lg-6">

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-lock"></i>
                  </span>
                </div>
                <input type="password" placeholder="Password" name="password" id="" class="form-control">
              </div>

            </div>


          </div>
          <div class="row">
            <div class="col-lg-12">
              <button type="submit" name="login" class=" mt-3 btn btn-outline-info btn-block">LOGIN</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>