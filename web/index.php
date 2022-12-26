<?php

require('../vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 1));
$dotenv->safeLoad();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Test</title>
</head>
<body>
<h1>Hello World!</h1>
<?php echo "<p>" . str_repeat('Hello ', $_ENV['TIMES']) . "</p>\n"; ?>
</body>
</html>
