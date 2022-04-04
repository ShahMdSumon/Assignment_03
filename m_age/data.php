<?php



function mcal($name , $birthyear, $gender){

    $age = date('Y')-$birthyear;
    $marriage_age = '';

    switch ($gender) {
        case 'male':
            $marriage_age = 21;
            break;
        case 'female':
            $marriage_age = 18;
            break; 
        default:
            $marriage_age = 21;
            break;
    }

    if ($age >= $marriage_age) {
        return "Hello {$name} You are ready for Marriage!";
    } else{
        $wait = $marriage_age - $age;
        return "<p class=\"alert alert-success d-flex justify-content-between\">Hi {$name} Extermely Sorray! Just wait {$wait} Years...In Bangladesh the legal age for marriage is 21 for boys and 18 for girls.<button class=\"btn-close\" 
        data-bs-dismiss=\"alert\"></button></p>";
    }
};



// echo mcal('Sumon', 2020, 'female');


?>