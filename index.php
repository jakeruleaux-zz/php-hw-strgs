<?php
    $upper_text = $_GET["upper_text"];
    $counts = $_GET["counts"];
    $shuffle = $_GET["shuffle"];
    $pop = $_GET["pop"];
    $upper_text = strtoupper($upper_text);
    $counts = str_word_count($counts);
    $shuffle = str_shuffle($shuffle);
    $pop = stripos($pop, "you");

?>
<html>
<head>
    <title>String doing things</title>
</head>
<body>
    <h1>Game on:</h1>
    <p><?php echo $upper_text; ?> </p>
    <p><?php echo $counts; ?> </p>
    <p><?php echo $shuffle; ?> </p>
    <p><?php echo $pop; ?> </p>
</body>
</html>
