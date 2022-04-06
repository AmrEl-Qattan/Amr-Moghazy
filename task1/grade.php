<?php
if ($_POST) {
    $physics = $_POST['physics'];
    $chemistry = $_POST['chemistry'];
    $biology = $_POST['biology'];
    $mathematics = $_POST['mathematics'];
    $computer = $_POST['computer'];
    define('max_grade',50);
    define('max_total_grade',250);

    $max_total_grade = 250;
    $physics <= max_grade;
    $chemistry <= max_grade;
    $biology <= max_grade;
    $mathematics <= max_grade;
    $computer <= max_grade;
    $total = ($physics + $chemistry + $biology + $mathematics + $computer);
    $percentage = ($total / max_total_grade);
    $message = ("<h5>Max Total Grade : $max_total_grade</h5>.<h5>Your Total Grade : $total</h5>.<h5>percentage : $percentage %</h5>");
    
}

?>










<!DOCTYPE html>
<html lang="en">

<head>
    <title>Your Grade </title>
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
                <h4>Enter Your Grade</h4>
            </div>
            <div class="col-4 offset-4 mt-5">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="Number">Enter Physics grade</label>
                        <input type="number" name="physics" id="" class="form-control" placeholder=" " aria-describedby="helpId">
                        <label for="Number">Enter Chemistry grade</label>
                        <input type="number" name="chemistry" id="" class="form-control" placeholder=" " aria-describedby="helpId">
                        <label for="Number">Enter Biology grade</label>
                        <input type="number" name="biology" id="" class="form-control" placeholder=" " aria-describedby="helpId">
                        <label for="Number">Enter Mathematics grade</label>
                        <input type="number" name="mathematics" id="" class="form-control" placeholder=" " aria-describedby="helpId">
                        <label for="Number">Enter Computer grade</label>
                        <input type="number" name="computer" id="" class="form-control" placeholder=" " aria-describedby="helpId">
                       
                    </div>
                    <button class="btn btn-outline-dark form-control">Your Result</button>
                </form><br>
                <?php echo $message ?? ""; ?><br>
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