<?php
$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab provident distinctio minus voluptatibus at. Esse neque nihil, fuga qui culpa ullam pariatur id numquam aut blanditiis dolore aliquid iste mollitia.";
$censuredWord = $_GET['name'] ;
$textCensured = str_replace($censuredWord, "***", $text);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <pre>
      <?php
        echo $text."\n";
        echo(strlen($text)."\n");
        echo $censuredWord;
      ?>
    </pre>
    <h1>Censured Phrase</h1>
    <h2>
      <?php
        echo $textCensured
      ?>
    </h2>
  </body>
</html>
