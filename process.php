<!DOCTYPE html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // recupera i dati inviati tramite POST
  $paragraph = $_POST['paragraph'];
  $censor = $_POST['censor'];

  // stampa il paragrafo e la sua lunghezza
  echo "Paragrafo: " . $paragraph;
  echo "<br>Lunghezza: " . strlen($paragraph);

  // sostituisce tutte le occorrenze della parola da censurare con ***
  $censored_paragraph = str_replace($censor, '***', $paragraph);

  // stampa il paragrafo censurato e la sua lunghezza
  echo "<br>Paragrafo censurato: " . $censored_paragraph;
  echo "<br>Lunghezza: " . strlen($censored_paragraph);
}
?>

</html>