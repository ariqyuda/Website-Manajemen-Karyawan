<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/login-page/login-page-style.css">
        <script src="/js/login.js"></script>
        <title>Login Page - Penkar</title>
    </head>

    <body>
        
        <!-- Logo -->
        <img class="profile-logo" src="/assets/landing-page/profile-logo.png" alt="profile logo">
        <p class="profile-text">@PANGMOEDROOFTOP.BNA</p>
        
        <div>
            <img class="p-word-image" src="/assets/landing-page/p-word.png" alt=" ">
            <div class="penkar-text">enkar</div>
        </div>

        <div onclick="document.getElementById('login-admin').style.display='block'" href="" class="button button-admin">ADMIN</div>
        <a href="karyawan" class="button button-karyawan">KARYAWAN</a>

        <!-- Login Form -->
        
        <div id="login-admin" class="modal">
            <form class="modal-content animate" method="post" action="login">
            {{csrf_field()}}
                <div class="imgcontainer">
                    <span onclick="document.getElementById('login-admin').style.display='none'" class="close" title="Close Button">&times;</span>
                </div>

                <div class="container">
                    <label for="username_admin"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" required>

                    <label for="password_admin"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>
                        
                    <button type="submit" name="login">Login</button>
                </div>

                <div class="container">
                    <button type="button" onclick="document.getElementById('login-admin').style.display='none'" class="cancelbtn">Cancel</button>
                </div>
                <div class="daftar-akun">
                    <a href="register">Belum punya akun? Daftar disini</a>
                </div>
            </form>
        </div>
        
        
    </body>
</html>