<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Processo</title>
</head>

<body>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // recupera i dati inviati tramite POST
    $paragraph = $_POST['paragraph'];
    $censor = $_POST['censor'];

    // stampa il paragrafo e la sua lunghezza
    echo "Paragrafo: " . $paragraph;
    echo "<br>Lunghezza: " . strlen($paragraph);

    // sostituisce tutte le occorrenze della parola da censurare con *
    $censored_paragraph = str_replace($censor, '*', $paragraph);

    // stampa il paragrafo censurato e la sua lunghezza
    echo "<br>Paragrafo censurato: " . $censored_paragraph;
    echo "<br>Lunghezza: " . strlen($censored_paragraph);
  }
  ?>


</body>

</html>