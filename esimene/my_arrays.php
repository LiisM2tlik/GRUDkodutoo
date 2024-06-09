<?php
// defineeri nimede massiiv
$names = ['Mari', 'Jüri', 'Juhan', 'Anna'];
// echo $names. '<br>' ; // näita massiivi sisu => Array erroriga, et ei saa massiivist stringi teha
print_r($names) ; // see näitab massiivi
echo '<br>';

array_push($names, 'Oskar'); // lisab massiivi lõppu uue väärtuse
print_r($names);
echo '<br>'; // pehme reavahetus. reaalses elus peaks br'e vältima 

echo $names[3]; // näitab arrays teatud väärtust
echo '<br>';

echo $names[count($names)-3]; // loeb kokku ja -1, väljastab 5-1 nime ehk nr 4 on viimane nimi
echo '<br>';

// näita massiivi sisu rea kaupa
// nimede nummerdamiseks 1. mari lisa valule ka key
foreach($names as $key=>$val){
    echo ($key +1). '. '. $val. '<br>';
}
echo '<br>';

// teine variant nimede nummerdamiseks
for($x = 0; $x < count($names); $x++){
    echo $x+1, '. ', $names[$x]. '<br>';
}
echo '<br>';

// too arrais nimed välja tagurpidises järjekorras
for($x = count($names)-1; $x >= 0; $x--) {
    echo (count($names) - $x), '. ', $names[$x]. '<br>';
}

echo '<br>';

// mitmemõõtmeline massiiv

$persons = [
    0 => [
        "name" => "Pille",
        "age" => 25,
        "aadress" => "Pärnu"
    ],
    1 => [
        "name" => "Palle",
        "age" => 45,
        "aadress" => "Tartu"
    ],
    2 => [
        "name" => "Sille",
        "age" => 20,
        "aadress" => "Vinni"
    ]
];

print_r($persons);
echo '<br>';

// näita massiivi sisu foreach() ja for()
foreach($persons as $key=>$val){
    echo $val['name'].' '.$val['age'].' '.$val['aadress'].'<br>';
}
 echo '<br>';
for($x = 0; $x < count($persons); $x++) {
    echo $persons[$x]['name'].' '.$persons[$x]['age'].' '.$persons[$x]['aadress'].'<br>';
}

?>