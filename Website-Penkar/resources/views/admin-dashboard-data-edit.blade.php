<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>DB Universitas Jaya</title>

        <link rel="stylesheet" href="/css/admin/admin-edit-data.css">
        <link rel="stylesheet" href="/css/background-style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	</head>
	<body>

		<div class="container align-items-center justify-content-center">
			<br>
			<h1 class="mb-5">Penkar</h1>

			<button class="back-button"><a class="text-back" href="/admin/dashboard/data-karyawan">Kembali</a></button>
			
			<br/>
			<br/>

			<div class="row">
				<div class="col-sm">
					<h3>Edit Data Karyawan</h3>
					@foreach($data_karyawan as $karyawan)
					<form action="/admin/dashboard/data-karyawan/update" method="post">
						{{ csrf_field() }}
						<input type="hidden" name="id_karyawan" value="{{$karyawan->id_karyawan}}"> <br/>
						<label>Nama</label>
						<input class="form-control" id="nama_karyawan" type="text" required="required" name="nama_karyawan" value="{{$karyawan->nama_karyawan}}" >
						<br> 
						<label>Tanggal Lahir</label>
						<input class="form-control" id="tgl_lahir_karyawan" type="date" required="required" name="tgl_lahir_karyawan" value="{{$karyawan->tgl_lahir_karyawan}}" >
						<br>
						<label>Alamat Karyawan</label>
						<textarea class="form-control" id="alamat_karyawan" type="text" required="required" name="alamat_karyawan">{{$karyawan->alamat_karyawan}}</textarea>
						<br> 
						<label>No. HP Karyawan</label>
						<input class="form-control" id="no_hp_karyawan" type="text" required="required" name="no_hp_karyawan" value="{{$karyawan->no_hp_karyawan}}">
						<br> 
								
						<div class=" d-grid gap-2 col-6 mx-auto ">
						<button class="btn btn-primary" type="submit" value="Simpan Data">Simpan</button>
						</div>
					</form>
				</div>
				@endforeach
			</div>		
    	</div>
	</body>
</html>