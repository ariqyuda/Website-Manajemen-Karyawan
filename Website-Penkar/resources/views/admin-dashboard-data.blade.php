<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/background-style.css">
        <link rel="stylesheet" href="/css/admin/dashboard-admin.css">
        <title>Dashboard - Penkar</title>
        <script src="/js/menu.js"></script>
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
            <form action="/admin/dashboard/data-karyawan/cari" method="get" class="search-box" id="cari-box">
                <a href=# class="batal"> x </a>
                <input class="cari-box" type="" name="cari" placeholder="Cari Data Karyawan" value="{{ old('cari') }}">
                <input class="cari-data" type="submit" value="CARI">
            </form>
        </nav>

        <!-- Side menu -->
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div>
                <a href="/admin/dashboard/home">Home</a>
                <a class="active" href="#">Data Karyawan</a>
                <a href="#information-box">About</a>
            </div>
            <div>
                <a class="logout" href="/login">Log out</a>
            </div>
        </div>
        
        <!-- Tampilkan Data Karyawan -->
        <div>
            <table>
                @foreach($data_karyawan as $karyawan)
                <div class="box-profile">
                    <div><img class="img-profile" src="/assets/dashboard/profile-photo.png" alt=""></div>
                    <div class="nama-profile">{{$karyawan->nama_karyawan}}</div>
                    <div class="id-profile">{{$karyawan->id_karyawan}}</div>
                    <a href="/admin/dashboard/data-karyawan/edit/{{ $karyawan->id_karyawan }}"><img class="edit-button" src="/assets/dashboard/edit.png" alt="edit data"></a>
                    <a href="/hapus/{{ $karyawan->id_karyawan }}"><img class="delete-button" src="/assets/dashboard/delete.png" alt="delete data"></a>
                </div>
                @endforeach
            </table>
            <a class="tambah-icon" href="#form-tambah-data">+</a>
        </div>

        <!-- Tambah Data Box -->
        <div>
            <form id="form-tambah-data" class="" method="post" action="/tambah-data">
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

        <!-- Edit Data Box -->
        <div>
        @foreach($data_karyawan as $karyawan)
            <form id="form-edit-data" class="" method="post" action="/admin/dashboard/data-karyawan/update">
                <a href=# class="tutup-form"> x </a>
                <div class="container">
                    <div class="judul-form">Edit Data Karyawan</div>
                    <br>
                    <label for="id_karyawan"><b>Id Karyawan</b></label><br>
                    <input type="text" name="id_karyawan" value="{{$karyawan->id_karyawan}}"><br>

                    <label for="nama_karyawan"><b>Nama</b></label><br>
                    <input id="nama_siswa" type="text" required="required" name="nama_karyawan" value="{{$karyawan->nama_karyawan}}"><br>
                    
                    <label for="jk_karyawan"><b>Jenis Kelamin</b></label><br>
                        <select id="jk_karyawan" required="required" name="jk_karyawan" value="{{$karyawan->jk_karyawan}}">
                            <option selected disabled >Pilih</option>
                            <option> Laki-laki </option>
                            <option> Perempuan </option>
                        </select><br><br>

                    <label for="tgl_lahir_karyawan"><b>Tanggal lahir</b></label><br>
                    <input type="date" required="required" name="tgl_lahir_karyawan" value="{{$karyawan->tgl_lahir_karyawan}}"><br><br>

                    <label for="alamat_karyawan"><b>Alamat</b></label><br>
                    <input type="text" required="required" name="alamat_karyawan" value="{{$karyawan->alamat_karyawan}}"><br>

                    <label for="no_hp_karyawan"><b>No HP</b></label><br>
                    <input type="text" required="required" name="no_hp_karyawan" value="{{$karyawan->no_hp_karyawan}}"><br>

                    <button type="submit" value="Konfirmasi Pengeditan">Konfirmasi Pengeditan</button>
                   
                </div>
            @endforeach
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