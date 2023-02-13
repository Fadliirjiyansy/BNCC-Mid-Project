<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Pacman</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/add.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div id="bar-button">
            </div>
            <div class="bar-upper">

                <div class="logo">
                    <img src="/images/logo.png" alt="Logo">
                </div>

            </div>

            <div class="bar-lower">
                <div class="nav-list">
                    <a href="/" id="Home">
                        <img src="images/home_icon.png" alt="">
                        <span>Halaman Utama</span>
                    </a>
    
                    <a href="/view" id="View">
                        <img src="images/view_icon.png" alt="">
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
            <div class="form">
                <h1>Daftar Karyawan Baru</h1>
                <form action="/create-karyawan" method="POST" enctype="multipart/form-data">@csrf
                    <div class="mb-3">
                        <label for="Nama">Nama Lengkap</label>
                        <input name="Nama" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Lengkap Anda">
                            @error('Nama')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Umur">Umur</label>
                        <input name="Umur" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="Umur anda">
                        @error('Umur')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Alamat">Alamat</label>
                        <input name="Alamat" type="text" class="form-control" id="formGroupExampleInput" placeholder="Alamat lengkap">
                        @error('Alamat')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="NomorTelp">Nomor Telepon</label>
                        <input name="NomorTelp" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nomor telepon (+62)">
                        @error('NomorTelp')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="insertBttn">Input</button>
                    <button type="reset" class="resetBttn">Reset Data</button>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <p>©Perpustakaan Pacman</p>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>