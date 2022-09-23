<?php

require_once('Movie.php');
require_once('Rental.php');
require_once('Customer.php');

$rental1 = new Rental(
    new Movie(
        'Back to the Future',
        'CHILDRENS'
    ), 4
);

$rental2 = new Rental(
    new Movie(
        'Office Space',
        'REGULAR'
    ), 3
);

$rental3 = new Rental(
    new Movie(
        'The Big Lebowski',
        'NEW_RELEASE'
    ), 5
);

$customer = new Customer('Joe Schmoe');

$customer->addRental($rental1);
$customer->addRental($rental2);
$customer->addRental($rental3);

echo $customer->htmlStatement();

