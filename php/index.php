<?php
    include __DIR__ . '/partials/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <title>PHP DISCHI - 27 Aprile</title>
</head>
<body>
    <header>
        <div id="logo">
            <img src="img/logo.png" alt="Logo Spotify">
            <h1>Spotify</h1>
        </div>
        <div id="search">
            <input type="text" id="src_box">
            <a id="src_btn">
                <i class="fas fa-clock"></i>
            </a>
        </div>
    </header>
    <main>
        <div class="main_container">
        <?php foreach ($database as $data) { ?>
                <div class="disc">
                    <img src="<?php echo $data['poster'];?>">
                    <h2><?php echo $data['title'];?></h2>
                    <p class="author"><?php echo $data['author'];?></p>
                    <p class="year"><?php echo $data['year'];?></p>
                </div>
         <?php }; ?>              
        </div>
    </main>
    <footer></footer>
</body>
</html>