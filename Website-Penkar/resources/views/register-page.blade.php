<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Register Akun - Penkar</title>

        <link rel="stylesheet" href="/css/admin/admin-edit-data.css">
        <link rel="stylesheet" href="/css/background-style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	</head>
	<body>

		<div class="container align-items-center justify-content-center">
			<br>
			<h1 class="mb-5">Penkar</h1>

			<button class="back-button"><a class="text-back" href="/login">Kembali</a></button>
			
			<br/>
			<br/>

			<div class="row">
				<div class="col-sm">
					<h3>Register Akun Admin</h3>
					<form action="register" method="post">
						{{ csrf_field() }}
						<label>Nama</label>
						<input class="form-control"  input type="text" placeholder="Masukkan Nama" name="name" required>
						<br> 
						<label>Username</label>
						<input class="form-control"  input type="text" placeholder="Masukkan Username" name="username" required>
						<br>
						<label>Email</label>
						<input class="form-control"  input type="text" placeholder="Masukkan Email" name="email" required>
						<br> 
						<label>Password</label>
						<input class="form-control"  input type="password" placeholder="Masukkan Password" name="password" required>
						<br>
                        <label>Konfirmasi Password</label>
						<input class="form-control" input type="password" placeholder="Konfirmasi password" name="password_confirmation" required>
						<br> 
								
						<div class=" d-grid gap-2 col-6 mx-auto ">
                        	<button class="btn btn-primary" type="submit">Daftar</button>
                        </div>
					</form>
				</div>
			</div>	

    	</div>

	</body>

</html>