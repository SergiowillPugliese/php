<?php

require('User.php');
require('TaxiDriver.php');
require('TaxiDriverSuper.php');

$user = new User('Antonio');
echo $user -> getName();

$user2 = new TaxiDriver('Antonio');
$user2 -> setLicense('AF-25');
echo $user2 -> getLicense();
echo '<br>';
$user3 = new TaxiDriverSuper('Franca ', 'AF-33');
echo $user3->getName();
echo $user3->getLicense();
