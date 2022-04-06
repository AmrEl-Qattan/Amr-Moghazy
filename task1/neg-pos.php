<?php
if($_POST){
  $num = $_POST['num'];
  $cal = $num>=0;
  if($cal == 0){
    $message =("<h5>This Number Is a Neg Number : $num</h5>");
  }else{
    $message = ("<h5>This Number Is a Pos Number  : $num</h5>");
  }
  

}


?>





<!DOCTYPE html>
<html lang="en">
      <head>
        <title>Neg || Pos</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      </head>
      <body>
          <div class="container">
              <div class="row">
                  <div class="col-12 text-center mt-5">
                      <h4>Neg || Pos Number</h4>
                  </div>
                  <div class="col-4 offset-4 mt-5">
                      <form action="" method="post">
                          <div class="form-group">
                            <label for="Number">Enter Number</label>
                            <input type="number" name="num" id="" class="form-control" placeholder="Enter Number" aria-describedby="helpId">
                          </div>
                          <button class="btn btn-outline-dark form-control">Calc</button>
                      </form><br>
                      <?php echo $message ?? ""; ?>
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