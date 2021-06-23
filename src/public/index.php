<?php
// Composer Autoload
require '../vendor/autoload.php';

// Init App
$app = new Ananke\Components\Core\App('dev');

// Run
$state = json_encode($app->run(), JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP React Framework</title>
    <!-- Assign Application State -->
    <script>window.__STATE__ = <?php echo $state; ?></script>
</head>
<body>
    <div class="flex"></div>
</body>
</html>