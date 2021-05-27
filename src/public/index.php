<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ananke</title>
    
</head>
<body>

    <main>
        <div class="welcome">Welcome to Ananke</div>
        <div class="database">
            <?php 
                $pdo = new PDO('mysql:dbname=tutorial;host=mysql', 'ananke', 'ananke', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

                $query = $pdo->query('SHOW VARIABLES like "version"');
                
                $row = $query->fetch();
                
                echo 'MySQL version:' . $row['Value'];
            ?>
        </div>
    </main>

    <script type="module" src="/public/js/app.js"></script>
</body>
</html>