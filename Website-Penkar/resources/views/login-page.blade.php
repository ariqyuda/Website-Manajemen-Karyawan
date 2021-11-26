<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/login-page/login-page-style.css">
        <script src="/js/login.js"></script>
        <title>Landing Page - Penkar</title>
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
        <a href="/karyawan/home" class="button button-karyawan">KARYAWAN</a>

        <!-- Login Form -->
        {{csrf_field()}}
        <div id="login-admin" class="modal">
            <form class="modal-content animate" method="GET" action="/admin/dashboard">
            
                <div class="imgcontainer">
                    <span onclick="document.getElementById('login-admin').style.display='none'" class="close" title="Close Button">&times;</span>
                </div>

                <div class="container">
                    <label for="uname_admin"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname_admin" required>

                    <label for="pass_admin"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="pass_admin" required>
                        
                    <button type="submit" name="login">Login</button>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('login-admin').style.display='none'" class="cancelbtn">Cancel</button>
                </div>
            </form>
        </div>
        
        
    </body>
</html>