<?php
if (isset($_POST['enter'])) {
    $table = "<table class='table'>
                <thead>
                    <tr>
                        <th class=text-primary>Name</th>
                        <th class=text-primary>Price</th>
                        <th class=text-primary>Quantity</th>
                    </tr>
                </thead>
                <tbody>";
                for ($count = 0; $count < $_POST['productsnumber']; $count++) {
                    $table .= "
                        <tr>
                            <td><input type='text' class='form-control' name='products[$count][name]' ></td>
                            <td><input type='number' class='form-control' name='products[$count][price]' ></td>
                            <td><input type='number' class='form-control' name='products[$count][quantity]' ></td>
                        </tr>";
                }
                $table .= "</tbody>
            </table>
    <div class='form-group'>
        <button class='btn btn-primary col-12' name='reciept'> Reciept </button>
    </div>";
    if (isset($_POST['reciept'])){
        $table .= "<table class='table'>
        <thead>
                    <tr>
                        <th class=text-primary>Clint name</th>
                        <th class=text-primary>City</th>
                        <th class=text-primary>Total</th>
                        <th class=text-primary>Discount</th>
                        <th class=text-primary>Total after discount</th>
                        <th class=text-primary>Delivery</th>
                        <th class=text-primary>Net Total</th>
                    </tr>
                </thead>
        
        
        
        </table>";
        
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <title>SuperMarket</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-primary">
                    SuperMarket
                </h1>
            </div>
            <div class="col-6 offset-3">
                <form action="" method="post">
                <div class="form-group">
                        <label for="name" class="text-primary ">User Name</label>
                        <input type="text" name="username" id="number" class="form-control" value=<?= isset($_POST['username']) ? $_POST['username'] : '' ?>>
                    </div>
                    <div class="form-group">
                        <label for="number" class="text-primary ">Number Of varieties</label>
                        <input type="number" name="productsnumber" id="number" class="form-control" value=<?= isset($_POST['productsnumber']) ? $_POST['productsnumber'] : '' ?>>
                    </div>
                    <div class="form-group">
                        <label for="City" class="text-primary">City</label>
                        <select name="City" id="City" class="form-control">
                            <option value="Cairo">Cairo</option>
                            <option value="Giza">Giza</option>
                            <option value="Alex">Alex</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary col-12" name='enter'> Enter productes</button>
                    </div>

                    <?= isset($table) ? $table : '' ?>
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