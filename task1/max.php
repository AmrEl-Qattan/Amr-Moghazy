<?php
if ($_POST) {
    $first = $_POST['first'];
    $second = $_POST['second'];
    $third = $_POST['third'];

    if ($first > $second && $first > $third && $second > $third) {
        $message = ("<h5>Max Number Is Frist Number : $first</h5>.<h5>Min Number Is Third Number : $third</h5>");
    } elseif ($first > $second && $first > $third && $second < $third) {
        $message = ("<h5>Max Number Is First Number : $first</h5>.<h5>Min Number Is Second Number : $second</h5>");
    } elseif ($second > $first && $second > $third && $third > $first) {
        $message = ("<h5>Max Number Is Second Number : $second</h5>.<h5>Min Number Is First Number : $first</h5>");
    } elseif ($second > $first && $second > $third && $third < $first) {
        $message = ("<h5>Max Number Is Second Number : $second</h5>.<h5>Min Number Is Third Number : $third</h5>");
    } elseif ($third > $first && $third > $second && $first > $second) {
        $message = ("<h5>Max Number Is Third Number : $third</h5>.<h5>Min Number Is Second Number : $second</h5>");
    } else {
        $message = ("<h5>Max Number Is Third Number : $third</h5>.<h5>Min Number Is First Number : $first</h5>");
    }
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <title>Max and Mini </title>
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
                <h4>Max & Mini Numbers</h4>
            </div>
            <div class="col-4 offset-4 mt-5">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="Number">Enter Number</label>
                        <input type="number" name="first" id="" class="form-control" placeholder="First Number" aria-describedby="helpId">
                        <input type="number" name="second" id="" class="form-control" placeholder="Second Number" aria-describedby="helpId">
                        <input type="number" name="third" id="" class="form-control" placeholder="Third Number" aria-describedby="helpId">
                    </div>
                    <button class="btn btn-outline-dark rounded btn-larg">Cal</button>
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