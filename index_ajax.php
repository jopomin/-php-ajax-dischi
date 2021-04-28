<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <title>PHP DISCHI - 27 Aprile</title>
</head>
<body>
    <div id="root">
        <header>
            <div id="logo">
                <img src="img/logo-green.svg" alt="Logo Spotify">
            </div>
            <div id="search">
                <input type="text" id="src_box">
                <a id="src_btn">
                    <i class="fas fa-search" @click="getDiscs"></i>
                </a>
            </div>
        </header>
        <main>
            <div class="main_container">
                <div id="collection">
                            <div v-for="(disc,i) in discs" class="disc">
                                <img :src="disc[i].poster">
                                <h2>{{disc[i].title}}</h2>
                                <p class="author">{{disc[i].author}}</p>
                                <p class="year">{{disc[i].year}}</p>
                            </div>
                          </div>
            </div>
        </main>
        <footer></footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script src="js/main.js"></script>    
</body>
</html>