<?php

 //Variabile Paragraph
    $text = $_GET['paragraph'];

 // Variabile badWord
    $word = $_GET['badWord'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BadWords</title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <h1 class="my-5">RESULTS:</h1>

        <div class="mb-3">   
            <p class="fs-5 fw-bold">
                Original Sentence: <span class="fw-normal"><?php echo $text; ?> </span>
                Length: <span class="fw-normal"><?php echo strlen($text); ?></span>
            </p>
        </div>

        <div class="fs-5 fw-bold">Edited Sentence:</div>
    </main>
</body>