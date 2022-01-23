<?php

function cook_riceballs(float $rice, int $egg, float $cheese, int $dill, float $salt, float $vegetable_oil, string $feedbacks){
    echo "Boil ", $rice, " grams of rice normally. Cool and add ", $egg ," eggs. ";
    echo "We rub ", $cheese ," grams of cheese on a fine grater. ";
    echo "Adding ", $salt, " grams of salt to rice. ";
    echo "Adding grated cheese. ";
    echo "Chop ", $dill ," branches of greens and also add to the rice. ";
    echo "We form riceballs, bread them in flour. ";
    echo "Fry them on both sides in ", $vegetable_oil ," milliliters of vegetable oil on both sides. ";
    echo "Riceballs are ready. ";
    echo $feedbacks, ".";
}
cook_riceballs(250.0, 1, 100.0, 3, 30.0, 100.0, "That's grate");
