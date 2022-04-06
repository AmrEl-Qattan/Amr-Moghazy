<?php
if ($_POST) {
    $units = $_POST['units'];
    define('VAT',0.20);
    $VAT = 20 ;
    
    $firstunits = 0.50;
    $secoundunits = 0.75;
    $thirdunits = 1.20;
    $aboveunits = 1.50;

    $firstprice = $firstunits * $units;
    $secoundprice = $secoundunits * $units;
    $thirdprice = $thirdunits * $units;
    $aboveprice = $aboveunits * $units;
    

    
    $firstvat = $firstprice  * VAT;
    $secondvat = $secoundprice  * VAT;
    $thirdvat = $thirdprice  * VAT;
    $abovevat = $aboveprice  * VAT;

    $firstaftervat = $firstprice + $firstvat;
    $secondtaftervat = $secoundprice + $secondvat;
    $thirdaftervat = $thirdprice + $thirdvat;
    $aboveaftervat = $aboveprice + $abovevat;

    if($units <=50){
        $message = ("<h5>Unit Price : $firstunits</h5>.<h5>Price After Unit Price : $firstprice</h5>.<h5>Vat: 20%</h5>.<h5>Total Price After Vat :$firstaftervat EGP </h5>");

    }elseif($units >50 && $units <=150){
        $message = ("<h5>Unit Price : $secoundunits</h5>.<h5>Price After Unit Price : $secoundprice</h5>.<h5>Vat: 20%</h5>.<h5>Total Price After Vat :$secondtaftervat EGP </h5>");
    }elseif($units >150 && $units <=250){
        $message = ("<h5>Unit Price : $thirdunits</h5>.<h5>Price After Unit Price : $thirdprice</h5>.<h5>Vat: 20%</h5>.<h5>Total Price After Vat :$thirdaftervat EGP </h5>");
    }elseif($units > 250){
        $message = ("<h5>Unit Price : $aboveunits</h5>.<h5>Price After Unit Price : $aboveprice</h5>.<h5>Vat: 20%</h5>.<h5>Total Price After Vat :$aboveaftervat EGP </h5>");
    }
    
}

?>







<!DOCTYPE html>
<html lang="en">

<head>
    <title>Electricity  </title>
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