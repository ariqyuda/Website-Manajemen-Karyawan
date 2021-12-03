<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/background-style.css">
        <link rel="stylesheet" href="/css/admin/dashboard-admin.css">
        <title>Home - Penkar</title>
        <script src="/js/menu.js"></script>
        <script src="/js/upload_file.js"></script>
    </head>
    <body>
        
        <!-- Navbar -->
        <nav class="navbar">
            <div class="left" onclick="openNav()">
                <img class="navbar-icon-right" src="/assets/dashboard/menu.png" alt="">
            </div>
            <div class="left-text">PENKAR</div>
            <a class="navbar-a navbar-a-right" href=""><img class="navbar-icon-left" src="/assets/dashboard/back.png" alt=""></a>
            <a class="navbar-a navbar-a-right" href=""><img class="navbar-icon-left" src="/assets/dashboard/check.png" alt=""></a>
            <a class="navbar-a navbar-a-right" href="#cari-box"><img class="navbar-icon-left" src="/assets/dashboard/search.png" alt=""></a>
            <form action="cari" method="get" class="search-box" id="cari-box">
                <a href=# class="batal"> x </a>
                <input class="cari-box" type="" name="cari" placeholder="Cari Data Karyawan" value="{{ old('cari') }}">
                <input class="cari-data" type="submit" value="CARI">
            </form>
        </nav>

        <!-- Side menu -->
        
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div>
                <a class="active" href="home'">Home</a>
                <a href="data-karyawan">Data Karyawan</a>
                <a href="#information-box">About</a>
            </div>
            <div>
                <a class="logout" href="logout">Log out</a>
            </div>
        </div>
        

       
        <!-- Data Karyawan -->
        <div>
            <div class="welcome-message">
                Selamat datang kembali {{ Auth::user()->name }}
            </div>
        </div>

        <div>
            <a class="tambah-icon" href="#form-tambah-data">+</a>
        </div>

        <!-- Tambah Data Box -->
        <div>
            <form id="form-tambah-data" class="" method="post" action="tambah-data">
            {{csrf_field()}}
                <a href=# class="tutup-form"> x </a>
                <div class="container">
                    <div class="judul-form">Isi Data Karyawan</div>
                    <br>

                    <label for="id_karyawan"><b>Id Karyawan</b></label><br>
                    <input type="text" placeholder="Masukkan Id Karyawan" name="id_karyawan" required><br>

                    <label for="nama_karyawan"><b>Nama</b></label><br>
                    <input type="text" placeholder="Masukkan Nama Karyawan" name="nama_karyawan" required><br>
                    
                    <label for="jk_karyawan"><b>Jenis Kelamin</b></label><br>
                        <select id="" name="jk_karyawan">
                            <option selected disabled >Pilih</option>
                            <option> Laki-laki </option>
                            <option> Perempuan </option>
                        </select><br><br>

                    <label for="tgl_lahir_karyawan"><b>Tanggal lahir</b></label><br>
                    <input type="date" placeholder="Masukkan tanggal lahir" name="tgl_lahir_karyawan" required><br><br>

                    <label for="alamat_karyawan"><b>Alamat</b></label><br>
                    <input type="text" placeholder="Masukkan Alamat Karyawan" name="alamat_karyawan" required><br>

                    <label for="no_hp_karyawan"><b>No HP</b></label><br>
                    <input type="text" placeholder="Masukkan No.Hp Karyawan" name="no_hp_karyawan" required><br>

                    <button type="submit" name="insertDataKaryawan">Tambah Data</button>
                   
                </div>
            </form>
        </div>

        <!-- Information box -->
        <div id="information-box">
            <h1 class="judul-information-box">About</h1>
            <div class="isi-information-box">Website penkar adalah website pendataan karyawan yang dibuat 
                untuk mempermudah proses manajemen karyawan cafe. Dengan pembuatan aplikasi penkar, diharapkan 
                akan membantu pihak manajemen cafe dalam proses manajemen karyawannya.
            </div>
            <a href=# class="back">BACK</a>
        </div>
        
    </body>
</html>