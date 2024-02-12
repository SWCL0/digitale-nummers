<?php

function getDigitalNumber($number) {
    // Aanmaak array met de getallen
    $digitalNumbers = array(
        "0" => array(
            "### ",
            "# # ",
            "# # ",
            "# # ",
            "### "
        ),
        "1" => array(
            " #  ",
            "##  ",
            " #  ",
            " #  ",
            "### "
        ),
        "2" => array(
            "### ",
            "  # ",
            "### ",
            "#   ",
            "### "
        ),
        "3" => array(
            "### ",
            "  # ",
            "### ",
            "  # ",
            "### "
        ),
        "4" => array(
            "# # ",
            "# # ",
            "### ",
            "  # ",
            "  # "
        ),
        "5" => array(
            "### ",
            "#   ",
            "### ",
            "  # ",
            "### "
        ),
        "6" => array(
            "### ",
            "#   ",
            "### ",
            "# # ",
            "### "
        ),
        "7" => array(
            "### ",
            "  # ",
            " #  ",
            "#   ",
            "#   "
        ),
        "8" => array(
            "### ",
            "# # ",
            "### ",
            "# # ",
            "### "
        ),
        "9" => array(
            "### ",
            "# # ",
            "### ",
            "  # ",
            "### "
        )
    );

    // Split de invoer in losse getallen
    $digits = str_split((string)$number);

    // aanmaak array for uitvoer getallen
    $digitalRepresentation = array();

    // maak de digitale getallen aan voor elk getal
    for ($i = 0; $i < 5; $i++) {
        foreach ($digits as $digit) {
            // als het getal bestaat, voeg het toe aan de array
            if (isset($digitalNumbers[$digit][$i])) {
                $digitalRepresentation[] = $digitalNumbers[$digit][$i];
            }
        }
        // line break na iedere rij
        $digitalRepresentation[] = "\n";
    }

    // voegt alle digitale getallen samen in een string
    $result = implode("", $digitalRepresentation);

    return $result;
}
// opvraag getal en uitvoer functie
echo "Voer een getal in :) max. 30" . PHP_EOL;
$number = readline();
$digitalNumber = getDigitalNumber($number);
echo "Digital representation of $number:\n";
echo $digitalNumber;

?>