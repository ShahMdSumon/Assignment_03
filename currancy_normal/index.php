<?php

include_once "./data.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Structure</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>


    <?php 
        /**
         * Form submit 
         */
        if( isset($_POST['convert']) ){

            // get values 
            $amount = $_POST['amount'];
            $currency = $_POST['currency'];
             


            if( empty($amount) || empty($currency)  ){
                $msg =  setAlert('All fields are required !'); 
            } else {

                $msg =  setAlert( convertCurrency( $amount , $currency) , 'success');

            }
        }
    ?>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <div class="card shadow">
                    <div class="card-body">


                        <h2>Currency Converter</h2>

                        <?php echo $msg ?? ''; ?>


                        <hr>
                        <form action="" method="POST">
                            <div class="my-3">
                                <label for="">Amount</label>
                                <input name="amount" type="text" class="form-control">
                            </div>
                            <div class="my-3">
                                <label for="">Currency</label>
                                <select class="form-control" name="currency" id="">
                                    <option value="">-select-</option>
                                    <option value="USD">USD</option>
                                    <option value="CAD">CAD</option>
                                    <option value="Pound">Pound</option>
                                    <option value="Euro">Euro</option>
                                    <option value="Won">Won</option>
                                </select>
                            </div>
                            
                            <div class="my-3">
                                <input type="submit" name="convert" class="btn btn-primary" value="Convert Now">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>





