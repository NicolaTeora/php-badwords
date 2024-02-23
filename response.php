<?php 
//tramite "get" metto in un variabile il valore mandato tramite input
$text = $_GET['text_element'];
$word = $_GET['one_word'];
$censorship = '***';

$length_p = strlen($text);
$new_text = str_replace($word , $censorship, $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- my css -->
    <link rel="stylesheet" href="./style.css">
    
    <!-- cbn Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>

<body>
    <div class="container">

        <!-- stampo il contenuto ricevuto tramite input e messo nella variabile php -->
        <span class="text-decoration-underline title-span">Testo originale:</span>
        <p><?php  echo $text ?></p>

        <span class="text-decoration-underline title-span">Lunghezza del Testo:</span>
        <!-- stampo la lunghezza dell'array -->
        <p><?php echo $length_p ?></p>

        <!-- stampo il testo formattato -->
        <span class="text-decoration-underline title-span">Testo censurato:</span>
        <p><?php echo $new_text ?></p>
    </div>    
</body>

</html>