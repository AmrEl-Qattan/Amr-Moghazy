<?php
if ($_POST){
    $name = $_POST['username'];
    $loan = $_POST['loan'];
    $years = $_POST['years'];
    $months = $years * 12;

    if ($years <= 3){
        $rate = 0.1;
        
        
    } else {
        $rate = 0.15;
        

    }$Interstrate = ($loan * $rate) * $years;
    $Interstloan = $loan + $Interstrate;
    $monthly = $Interstloan / $months;
    $message =  (" '<table class='table table-striped col-8 offset-2'>
    <thead>
      <tr>
        <th class='text-primary'> User name</th>
        <th class='text-primary'>Interst rate</th>
        <th class='text-primary'>Loan after interest</th>
        <th class='text-primary'>Monthly</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope=>{$name}</td>
        <td>{$Interstrate}</td>
        <td>{$Interstloan}</td>
        <td>{$monthly}</td>
      </tr>
    </tbody>
  </table>';");
}
    
  


?>



<!doctype html>
<html lang="en">
  <head>
    <title>Bank</title>
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
                <h4 class="text-primary">Bank</h4>
            </div>
            <div class="col-4 offset-4 mt-5">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="text" class="text-primary">User Name</label>
                        <input type="text" name="username" id="" class="form-control" placeholder=" " aria-describedby="helpId">
                        <label for="text" class="text-primary">Loan amount</label>
                        <input type="number" name="loan" id="" class="form-control" placeholder=" " aria-describedby="helpId">
                        <label for="Number" class="text-primary">Loan years</label>
                        <input type="number" name="years" id="" class="form-control" placeholder=" " aria-describedby="helpId">
                    </div>
                    <button class="btn btn-primary form-control text-white">Calculate</button>
                </form><br>
                
            </div>
            <?php echo $message ?? ""; ?><br>

        </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

  