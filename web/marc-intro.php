<?php
require('../vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 1));
$dotenv->safeLoad();
use Cowsayphp\Farm;
$cow = Farm::create(\Cowsayphp\Farm\Cow::class);
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
<h1>Hello World</h1>
<?php echo '<pre>'.$cow->say("Ohmg I'm a cow!").'</pre>'; ?>
</body>
</html>
