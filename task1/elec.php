<?php
if ($_POST) {
    $units = $_POST['units'];
    define('VAT', 0.20);
    $VAT = 20;

    if ($units <= 50) {
        $unitPrice = 0.50;
    } elseif ($units > 50 && $units <= 150) {
        $unitPrice = 0.75;
    } elseif ($units > 150 && $units <= 250) {
        $unitPrice = 1.2;
    } else {
        $unitPrice = 1.5;
    }
    $invoicePrice = $unitPrice * $units;
    $priceAfterVat = (VAT * $invoicePrice) + $invoicePrice;

    $message = ("
        <h5>Unit Price : $unitPrice</h5>
        .<h5>Price After Unit Price : $invoicePrice</h5>
        .<h5>Vat: 20%</h5>
        .<h5>Total Price After Vat :$priceAfterVat EGP </h5>
        ");
}

?>







<!DOCTYPE html>
<html lang="en">

<head>
    <title>Electricity </title>
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
                <h4>Your Consumption</h4>
            </div>
            <div class="col-4 offset-4 mt-5">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="Number">Enter Your Units </label>
                        <input type="number" name="units" id="" class="form-control" placeholder=" " aria-describedby="helpId">
                    </div>
                    <button class="btn btn-outline-dark form-control">Your Invoice</button>
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