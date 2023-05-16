<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP BadWords</title>
</head>

<body>

  <form action="process.php" method="post">
    <label for="paragraph">
      <h1>Paragrafo:</h1>
    </label><br>
    <textarea id="paragraph" name="paragraph" rows="4" cols="50"></textarea><br>
    <label for="censor">
      <h3>Parola da censurare:</h3>
    </label><br>
    <input type="text" id="censor" name="censor"><br>
    <input type="submit" value="Submit">
  </form>


</body>

</html>