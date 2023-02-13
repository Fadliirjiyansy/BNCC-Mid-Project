<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Pacman</title>
    <!-- Google Fonts : Ubuntu -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/index.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div id="bar-button">
                <input type="checkbox" id="bar-checkbox">
            </div>
            <div class="bar-upper">

                <div class="upper-title">
                    <a href="/">
                        <span></span>
                    </a>
                </div>

                <div class="logo">
                    <img src="/images/logo.png" alt="Logo">
                </div>

            </div>

            <div class="bar-lower">
                <div class="nav-list">
                    <a href="/" id="Home">
                        <img src="" alt="">
                        <span>Halaman utama</span>
                    </a>
    
                    <a href="/view" id="View">
                        <img src="" alt="">
                        <span>Lihat Data</span>
                    </a>
    
                    <a href="/add" id="Add">
                        <img src="images/add_icon.png" alt="">
                        <span>Tambah Data</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="part1">
                <img src="images/librarypic1.jpeg" alt="Library Picture">
                <div class="imgtext"><h1>
                    In my whole life, I have known no wise people who didn't read all the time - none, zero.
                    <br><p style="font-style:italic">- Charlie Munger</p></h1></div>
            </div>

            <div class="part3">
                <h1>Denah perpustakaan pacman</h1>
                <p style="font-style:italic">(BINUS Kemanggisan)</p>
                <div class="box">
                    <div class="showimg">
                        <div class="showtxt">
                            <h2>It has 600 seats and occupies an area of 482 square meters</h2>
                        </div>
                        <img src="images/build.jpeg" alt="Image of Ancient Builders">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>©Perpustakaan Pacman</p>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>