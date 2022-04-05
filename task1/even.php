<?php
if($_POST){
  $num = $_POST['num'];
  $cal = $num%2;
  if($cal == 0){
    echo ("<h2>Even Number :$num</h2>");
  }else{
    echo ("<h2>Odd Number :$num</h2>");
  }
  

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even||Odd</title>
</head>
<body>
    <!doctype html>
    <html lang="en">
      <head>
        <title>Even||Odd</title>
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
                      <h4>Even || Odd</h4>
                  </div>
                  <div class="col-4 offset-4 mt-5">
                      <form action="" method="post">
                          <div class="form-group">
                            <label for="Number">Enter Number</label>
                            <input type="number" name="num" id="" class="form-control" placeholder="Enter Number" aria-describedby="helpId">
                          </div>
                          <button class="btn btn-outline-dark rounded btn-larg">Cal</button>
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
</body>
</html>