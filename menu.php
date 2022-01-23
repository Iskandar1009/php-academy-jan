<?php

function cookRiceballs(float $riceInGrams, int $eggInPieces, float $cheeseInGrams, int $dillInBranches, float $saltInGrams, float $vegetableOilInMilliliters, string $feedbacks){
    echo "Boil ", $riceInGrams, " grams of rice normally. Cool and add ", $eggInPieces ," eggs. ";
    echo "We rub ", $cheeseInGrams ," grams of cheese on a fine grater. ";
    echo "Adding ", $saltInGrams, " grams of salt to rice. ";
    echo "Adding grated cheese. ";
    echo "Chop ", $dillInBranches ," branches of greens and also add to the rice. ";
    echo "We form riceballs, bread them in flour. ";
    echo "Fry them on both sides in ", $vegetableOilInMilliliters ," milliliters of vegetable oil on both sides. ";
    echo "Riceballs are ready. ";
    echo $feedbacks, ".";
}
cookRiceballs(250.0, 1, 100.0, 3, 30.0, 100.0, "That's grate");
