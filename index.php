<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio,
 ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium
 che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a stampare in pagina come visto questa mattina i prodotti scelti dall'utente. -->

<?php 
require_once __DIR__ . '/Creatine.php';
require_once __DIR__ . '/Flexotor.php';
require_once __DIR__ . '/Glycobol.php';
require_once __DIR__ . '/SmileCrunch.php';
require_once __DIR__ . '/User.php';

 
$CreatineProduct = new Creatine ('Creatine - Yamamoto Nutrition', '500gr', 'Grey', 25);

$FlexProduct = new Flexotor ('Flexotor - Yamamoto Nutrition', '255gr', 'Red', 31.43);

$GlycoProduct = new Glycobol ('Glicobol - Yamamoto Nutrition', '500gr', 'Black', 20.69);

$ProteinBarProduct = new SmileCrunch ('Protein bar - Smile Crunch', '30gr', 'Yellow', 0.72);

// USER
$eddieHall = new User('Eddie', 'Hall','eddie.hall@animals.en');
$eddieHall->addProducts($CreatineProduct);
$eddieHall->addProducts($FlexProduct);
$eddieHall->addProducts($GlycoProduct);
$eddieHall->addProducts($ProteinBarProduct);
$eddieHall_basket = $eddieHall->getBasket();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YamamotoNutriotionSite</title>
</head>
<body>
    <h1>Welcome <?php echo $eddieHall->getFullName(); ?> this is a your basket </h1>

    <?php foreach($eddieHall_basket as $product) { ?>
        <div>
            <h2><?php echo $product->brand; ?> - <?php echo $product->weight; ?></h2>
            <h3> <?php echo $product->color; ?></h3>
             <h3> <?php echo $product->price; ?> £</h3>
        </div>
    <?php } ?>
</body>
</html>