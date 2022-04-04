
<?php
require_once "./data.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marriage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
/* form submit */
if(isset($_POST ['check'])){
    /* get value */
    $name = $_POST['name'];
    $birthyear = $_POST['birthyear'];
    $gender = $_POST['gender'] ?? '';

    if(empty($name)||empty($birthyear)||empty($gender)){
        $msg = "<p class=\"alert alert-danger d-flex justify-content-between\"> Please all fields are required ! <button class=\"btn-close\" data-bs-dismiss=\"alert\"></button></p>";
        
    } else if($birthyear <=1900 || $birthyear >= 5000){
        $msg =  $msg =  "<p class=\"alert alert-warning d-flex justify-content-between\"> Invalid Birth Year ! <button class=\"btn-close\" data-bs-dismiss=\"alert\"></button></p>"; 
    }else{
        $msg = mcal($name, $birthyear,$gender);
    }
}
?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 my-5">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="text-center text-primary">Marriage Age Cheker!</h4>
                        <?php echo $msg ?? '';                                     ?>
                        <hr>
                        <form action="" method="POST">
                            <div class="my-3">
                                <label for="">*Name</label>
                                <input name="name" type="text" class="form-control">
                            </div>
                            <div class="my-3">
                                <label for="">*Birth Year</label>
                                <input name="birthyear" type="text" class="form-control">
                            </div>
                            <div class="my-3">
                                <label for="">*Gender</label>
                                <input name="gender" type="radio" value="Male" id="male"><label for="Male">Male</label>
                                <input name="gender" type="radio" value="Female" id="Female"><label for="Female">Female</label>
                            </div>
                            <div class="my-3">
                                <input name="check" type="submit" value="Check Now" class="btn btn-primary">
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