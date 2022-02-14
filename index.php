<?php

$paragraph="Don't try this at home";
$badWord=$_GET["word"];;
$length_1 = strlen($paragraph);
$newParagraph = str_replace($badWord, "***", $paragraph);
$length_2 = strlen($newParagraph);
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
    <p><?php echo $paragraph?></p>
    <p><b>Lunghezza del paragrafo:</b> <?php echo $length_1?></p>
    <p><b>Bad word:</b> <?php echo $badWord?></p>
    <p><?php echo $newParagraph?></p>
    <p><b>Lunghezza del paragrafo:</b> <?php echo $length_2?></p>
</body>
</html>