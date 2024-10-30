<?php
    $name = "Rodrigo";
    $isDev = true;
    $age = 28;

    $isOld = $age > 40;

    define('LOGO_URL', 'https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg');

    $output = "Hola, me llamo " . $name ." y tengo " . $age;
    $outputAge = match (true){
        $age <2 => "Eres un bebe, $name ",
        $age <10 => "Eres un nuño, $name",
        $age <18 => "Eres im adolescentes $name",
        $age == 18 => "Eres mayor de edad, $name",
        $age < 40 => "Eres un adulto joven, $name",
        $age < 60 => "Eres un adulto viejo, $name",
        default => "Hueles mas a madera que a fruta, $name",
    };
    // const NOMBRE = 'RODRIGO';

    $bestLanguajes = ["PHP","JavaScript", "Python"];
    $bestLanguajes[] = "Java";
    $bestLanguajes[] = "TypeScript";

    $person =[
        "name" => "Miguel",
        "age" => 78,
        "isDev" => true,
        "languages" => ["PHP", "JavaScript", "Python"],
    ];
?>

<ul>
    <?php foreach ($bestLanguajes as $key => $lenguage) : ?>
        <li><?= $key ." ". $lenguage ?></li>
    <?php endforeach; ?>

</ul>

<h2> <?= $outputAge ?></h2>


<img src="<?= LOGO_URL ?> " alt="PHP" width="200">
<h1>
    <?= $output ?>
</h1>

<style>
    :root{
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>