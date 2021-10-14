<!-- 1 -->
<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.

Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<!-- 2 -->
<!-- Creare un array con 15 numeri casuali, 
tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->

<!-- 3 -->
<!-- Utilizzare questo array: https://pastebin.com/CkX3680A
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<!-- 4 -->
<!-- Creare un array contenente qualche alunno di un'ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<!-- 5 -->
<!--  
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
-->

<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];


$numberArray = [];

while(count($numberArray) < 15){
    $randNum = rand(1,100);

    if(!in_array($randNum, $numberArray)){
        $numberArray[] = $randNum;
        // array_push($numberArray, $randNum);
    } 
}

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

$classe41 = [

    [
        "nome" => "David",
        "cognome" => "Piscopo",
        "voti" => [7,8,6,4,2,8,10,7,6]
    ],
    [
        "nome" => "Francescoa",
        "cognome" => "Lipo",
        "voti" => [7,2,6,4,7,8,8,7,6]
    ],
    [
        "nome" => "Ivana",
        "cognome" => "Ferrera",
        "voti" => [9,8,6,4,2,8,9,7,5]
    ],
    [
        "nome" => "Daniel",
        "cognome" => "Dinca",
        "voti" => [7,1,6,4,2,8,5,7,8]
    ],
];


$string = "Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di caratteri e li assemblò per preparare un testo campione. È sopravvissuto non solo a più di cinque secoli, ma anche al passaggio alla videoimpaginazione, pervenendoci sostanzialmente inalterato. Fu reso popolare, negli anni ’60, con la diffusione dei fogli di caratteri trasferibili “Letraset”, che contenevano passaggi del Lorem Ipsum, e più recentemente da software di impaginazione come Aldus PageMaker, che includeva versioni del Lorem Ipsum.";

$containerString = explode(".", $string);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Snack</title>
</head>
<body>

    <h1>Snack 1</h1>
    <section>
        <div>
            <?php foreach($posts as $post => $postValue){; ?>
                <h3>Lista dei post di giorno: <?php echo $post ; ?></h3>

                <?php foreach($postValue as $pubblic){ ?>
                    <h4> <?php echo $pubblic["title"]; ?></h4>
                    <h5> <?php echo $pubblic["author"]; ?></h5>
                    <p> <?php echo $pubblic["text"]; ?></p>
                    <br>
                <?php }; ?>
                <br>
                <hr>
            <?php }; ?>
            
        </div>
    </section>
    <br>

    <h1>Snack 2</h1>
    <section>
        <div>
            <h2>Lunghezza Array: <?php echo count($numberArray); ?></h2>
            <?php foreach($numberArray as $numb){ ?>
                <ul>
                    <li> <?php echo $numb; ?></li>
                </ul>
            <?php }; ?>
        </div>
    </section>
    <br>

    <h1>Snack 3</h1>
    <section>
        <div>
            <?php foreach($db as $dbElement => $dbValue){ ?>
                <?php if($dbElement == "teachers"){ ?>
                <div class="bg-grey">

                    <h3><?php echo $dbElement; ?></h3>

                    <?php foreach($dbValue as $element){ ?>
                        <?php echo $element["name"] . " " . $element["lastname"]; ?>
                        <br>
                    <?php }; ?>

                </div>
                <?php } else{ ?>
                    <div class="bg-green">

                        <h3><?php echo $dbElement; ?></h3>

                        <?php foreach($dbValue as $element){ ?>
                            <?php echo $element["name"] . " " . $element["lastname"]; ?>
                            <br>  
                        <?php }; ?>

                    </div>
                <?php }; ?>
                
            <?php }; ?>
        </div>
    </section>
    <br>

    <h1>Snack 4</h1>
    <section class="snack-4">
        <div>
            <?php foreach($classe41 as $studente){ ?>
            <div>
                <?php echo $studente["nome"] . " " . $studente["cognome"] ?>
                <?php if( (number_format( array_sum($studente["voti"]) / count($studente["voti"]), 1 )) < 6 ){ ?>
                 - media voti:
                <span class="red">
                    <?php
                    echo number_format( array_sum($studente["voti"]) / count($studente["voti"]), 1 ); 
                    ?> 
                </span>   
                <?php } else{ ?>
                 - media voti:
                <span class="green">
                    <?php
                    echo number_format( array_sum($studente["voti"]) / count($studente["voti"]), 1 ); 
                }?> 
                </span>  
                             
            </div>
            <br>
            <?php }; ?>
        </div>
    </section>

    <h1>Snack 5</h1>
    <section class="snack-5">
        <div>
            <ol>
                <?php foreach($containerString as $string){ ?>
                <li>
                    <?php if(!empty($string)){ echo $string; } };?>
                </li>
            </ol>
        </div>
    </section>
</body>
</html>