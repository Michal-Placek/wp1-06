<?php
$rope = true ;
$woodchunk = true ;
$nails = true ;
$knife = true ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if($rope == true) {
    echo "Máš provaz<br>";
}    

if($nails) {
    echo "Máš hřebíky<br>";
}

if($woodchunk) {
    echo "Máš dřevo<br>";
}

if($knife) {
    echo "Máš nůž<br>";
}

?>

<h1>Můžeš vyrobit</h1>
<?php
/*
bow = rope + knife + woodchunk
nail bat = nails + woodchunk
nunchucks = knife + rope + woodchunk
spear = knife + woodchunk
*/

if($rope && $knife && $woodchunk) {
    echo "Luk";
} elseif($nails && $woodchunk) {
    echo "Pálka s hřebíky";
} elseif($rope && $woodchunk) {
    echo "Nunčaky";
} elseif($knife && $woodchunk) {
    echo "Kopí";
} else {
    echo "Nedostatek materiálu";
}



?>

</body>
</html>