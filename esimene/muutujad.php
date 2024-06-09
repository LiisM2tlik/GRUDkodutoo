<?php
$name = 'Liis Matlik';
$age = 25;
$height = 1.7;
$height = rand(60,272) / 100;
/** mitu 
* rida 
*kommentaari */
?>

<p>Nimi: <strong><?php echo $name; ?></strong></p>
<p>Vanus: <?php echo $age; ?></p>
<p>Pikkus: <?php echo $height; ?> m.</p>

<?php
// see pole ilus variant ifi jaoks
if($height >= 2) {
    echo 'Hiiglane';    
}else {
    echo '<p>Tavaline</p>';
}

?>