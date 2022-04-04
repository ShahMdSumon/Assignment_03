<?php


/**
 * Set Alert 
 */
function setAlert($msg, $type = 'danger'){
    return "<p class=\"alert alert-{$type} d-flex justify-content-between\"> {$msg} <button class=\"btn-close\" data-bs-dismiss=\"alert\"></button></p>"; 
}



/**
 * Currency Converter 
 */
function convertCurrency($amount, $type){ 

    $rate = 0;

    switch( $type ){
        case 'USD';
            $rate = 86.54;
            break;

        case 'CAD';
            $rate = 69.04;
            break;

        case 'Pound';
            $rate = 114.15;
            break;

        case 'Euro';
            $rate = 95.06;
            break;

        case 'Won';
            $rate = 0.071;
            break;
    }

    $bdt = $amount * $rate;

    return "{$amount} {$type} = {$bdt} BDT";



}



?>