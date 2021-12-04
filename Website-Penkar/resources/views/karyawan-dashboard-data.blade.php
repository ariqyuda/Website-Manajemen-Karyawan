<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/background-style.css">
        <link rel="stylesheet" href="/css/karyawan/dashboard-karyawan.css">
        <title>Karyawan Dashboard - Penkar</title>
        <script src="/js/menu.js"></script>
    </head>
    <body>
        
        <!-- Navbar -->
        <nav class="navbar">
            <div class="left" onclick="openNav()">
                <img class="navbar-icon-right" src="/assets/dashboard/menu.png" alt="">
            </div>
            <div class="left-text">PENKAR</div>
            <a class="navbar-a navbar-a-right" href="#cari-box"><img class="navbar-icon-left" src="/assets/dashboard/search.png" alt=""></a>
            <form action="/karyawan/cari" class="search-box" id="cari-box">
                <a href=# class="batal"> x </a>
                <input class="cari-box" type="" name="cari" placeholder="Cari Data Karyawan" value="{{ old('cari') }}">
                <input class="cari-data" type="submit" value="CARI">
            </form>
        </nav>

        <!-- Side menu -->
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div>
                <a class="active" href="">Data Karyawan</a>
                <a href="#information-box">About</a>
            </div>
            <div>
                <a class="logout" href="/login">Back</a>
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
                    <div class="hari-kerja">{{$karyawan->hari_kerja}}</div>
                    <div class="strip-simbol">/</div>
                    <div class="jam-kerja">{{$karyawan->jam_kerja}}</div>
                </div>
                @endforeach
            </table>
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