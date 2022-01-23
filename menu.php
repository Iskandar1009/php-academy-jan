<?php

function cookRiceballs
(int $rice, 
 int $egg, 
 int $cheese, 
 int $dill, 
 int $salt, 
 int $vegetable_oil, 
 string $feedbacks)
{
echo "Boil $rice grams of rice normally. Cool and add $egg eggs. 
    We rub  $cheese grams of cheese on a fine grater. 
    Adding $salt grams of salt to rice. 
    Adding grated cheese. 
    Chop $dill branches of greens and also add to the rice.
    We form riceballs, bread them in flour.
    Fry them on both sides in $vegetable_oil milliliters of vegetable oil on both sides.
    Riceballs are ready.
    $feedbacks.";
}
cookRiceballs(250, 1, 100, 3, 30, 100, "That's grate");
