<?php

$database =
[
    [
        'title' => 'One more car, one more rider',
        'author' => 'Eric Clapton',
        'year' => 2002,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
        'genre' => 'Rock'
    ],
    [
        'title' => 'New Jersey',
        'author' => 'Bon Jovi',
        'year' => 1988,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
        'genre' => 'Rock'
    ],
    [
        'title' => 'One more car, one more rider',
        'author' => 'Eric Clapton',
        'year' => 2002,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
        'genre' => 'Rock'
    ],
    [
        'title' => 'Live at Wembley 86',
        'author' => 'Queen',
        'year' => 1992,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
        'genre' => 'Pop'
    ],
    [
        'title' => 'One more car, one more rider',
        'author' => 'Eric Clapton',
        'year' => 2002,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
        'genre' => 'Rock'
    ],
    [
        'title' => 'Ten\'s Summoner\'s Tales',
        'author' => 'Sting',
        'year' => 1993,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
        'genre' => 'Pop'
    ],
    [
        'title' => 'One more car, one more rider',
        'author' => 'Eric Clapton',
        'year' => 2002,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
        'genre' => 'Rock'
    ],
    [
        'title' => 'Steve Gadd band',
        'author' => 'Steve Gadd Band',
        'year' => 2018,
        'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
        'genre' => 'Jazz'
    ],
    [
        'title' => 'Brave new World',
        'author' => 'Iron Maiden',
        'year' => 2000,
        'poster' => 'https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg',
        'genre' => 'Metal'
    ],
    [
        'title' => 'One more car, one more rider',
        'author' => 'Eric Clapton',
        'year' => 2002,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
        'genre' => 'Rock'
    ]
];

?>

<!-- ////////// HTML ///////////////////////////////////////////////////////////////////////////// -->

<!DOCTYPE html>
<html lang='en' dir='ltr'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>YDD - ajax dischi</title>
    <!-- [______Collegamento Bootstrap__________________________________________] -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <!-- [______Collegamento Font__________________________________________] -->
    <script src='https://kit.fontawesome.com/f4affba74f.js' crossorigin='anonymous'></script>
    <!-- [______Collegamento CSS_____________________________________________] -->
    <link rel='stylesheet' href='./assets/style.css'>
    <!-- [______Favicon______________________________________________________] -->
    <link rel='icon' type='image/x-icon' href='./assets/img/favYconStatic.ico'>
</head>
<body>
<div id='app'>

    <div class="container d-flex flex-wrap">
        <?php
            
            foreach($database as $album)
            {
                echo '<div class="carta d-flex flex-wrap justify-content-center">';
                    echo '<img src="' . $album['poster'] . '">';
                    echo '<h4>' . $album["title"] . '</h4>';
                    echo '<p class="w-100">' . $album["author"] . '</p>';
                    echo '<p>' . $album["year"] . '</p>';
                echo '</div>';
            }
        
        ?>
    </div>
    

</div>
    <!-- Axios 1.1.3 -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js' integrity='sha512-0qU9M9jfqPw6FKkPafM3gy2CBAvUWnYVOfNPDYKVuRTel1PrciTj+a9P3loJB+j0QmN2Y0JYQmkBBS8W+mbezg==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
    <!-- Vue.js 2.0 -->
    <script src='https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js'></script>
    <!-- Personal Javascript -->
    <script src='./assets/javascript/main.js'></script>
    <!-- Bootstrap -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3' crossorigin='anonymous'></script>
</body>
</html>