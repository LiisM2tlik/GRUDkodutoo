<?php
// funktsioon massiivi inimlikumal kujul näitamiseks
// funtsioon näita arrayd(muutuja nimi)
function show_array($array) {
    echo '<pre>';
    print_r($array);
    echo '</pre';
}
// väljasta esimene array nimi
function show_first_person($array) {
    if(is_array($array)) {
        return $array[0]['name'];
    }
    return "massiivi pole";
}
// kutsumiseks on vaja massiivi
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

show_array($persons);
echo '<p></p>';
echo show_first_person($persons);
echo '<p></p>';
$name = 'Liis';
show_array($name);
echo show_first_person($name);
?>