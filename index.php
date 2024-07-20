<?php
$name = "abdullah";

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
    <div class="container">
    <div class="row">
          <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
                <a class="navbar-brand" href="#">User Dadat</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation"></button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="viewdata.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Add Data</a>
                        </li>
                      
                    </ul>
                    <!-- <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form> -->
                </div>
            </nav>
          </div>
        <div class="row">
            <div class="col-8">
               <form action="getdata.php">
               <?php
              if (isset($_GET['mesg'])) {?>
                    <div class="alert alert-success" role="alert">
                      <?php echo $_GET['mesg']; ?>
                    </div>
                                        <?php }
              ?>

               <div class="form-group">
                 <label for="">Name</label>
                 <input type="text" name="myname" id="" class="form-control" placeholder="Enter your name" aria-describedby="helpId">
                 <small id="helpId" class="text-muted">
                    <?php if (isset($_GET['name']) && !empty($_GET['name'])) {?>

                 <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['name']; ?>
                </div>

                <?php }?>
                 </small>
               </div>
               <div class="form-group">
                 <label for="">Email</label>
                 <input type="email" name="myemail" id="" class="form-control" placeholder="Enter your Email" aria-describedby="helpId">
                 <small id="helpId" class="text-muted">
                    <?php if (isset($_GET['email']) && !empty($_GET['email'])) {?>

                 <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['email']; ?>
                </div>

                <?php }?>
                 </small>
               </div>
               <div class="form-group">
                 <label for="">Passowrd</label>
                 <input type="password" name="mypassword" id="" class="form-control" placeholder="Enter your Passowrd" aria-describedby="helpId">
                 <small id="helpId" class="text-muted">
                    <?php if (isset($_GET['password']) && !empty($_GET['password'])) {?>

                 <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['password']; ?>
                </div>

                <?php }?>
                 </small>
               </div>
               <div class="form-group">
                 <label for="">conform password</label>
                 <input type="password" name="mycpassowrd" id="" class="form-control" placeholder="Enter your conform password" aria-describedby="helpId">
                 <small id="helpId" class="text-muted">
                    <?php if (isset($_GET['cpassword']) && !empty($_GET['cpassword'])) {?>

                 <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['cpassword']; ?>
                </div>

                <?php }?>
                 </small>
               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
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
