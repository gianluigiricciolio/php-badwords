<?php
echo 'bad_word.php';
$bad_word = $_GET['bad_word'];
$text = $_GET['input'];
$text_length = strlen($text);
$new_text = str_ireplace($bad_word, '***', $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Testo</h1>
    <p>di <?php echo $text_length; ?> caratteri </p>
    <p><?php echo $text; ?></p>
    <h1>Testo Censurato</h1>
    <p><?php echo $new_text; ?></p>
</body>
</html>