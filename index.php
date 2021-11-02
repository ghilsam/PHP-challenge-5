<?php

$weapons = ['fists', 'whip', 'gun'];

$opponentWeapon = $weapons[rand(0,2)];

if ($opponentWeapon == 'fists'){
    $stevensonWeapon = 'gun';
}
else if($opponentWeapon == 'whip'){
    $stevensonWeapon = 'fists';
}    
else
    $stevensonWeapon = 'whip';
?>