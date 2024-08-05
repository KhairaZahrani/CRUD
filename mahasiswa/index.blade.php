<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<title>Data Mahasiswa</title>
</head>
<body>

	<div class="container mt-3">
		<div class="row">
			<div class="col-12">
				<div class="py-4 d-flex justify-content-between align-items-center">
					<h2>Tabel Mahasiswa</h2>
					<a href="{{ route('mahasiswas.create') }}" class="btn btn-primary">
						Tambah Mahasiswa
					</a>
				</div>

				@if(session()->has('pesan'))
				<div class="alert alert-success">
					{{ session()->get('pesan')}}
				</div>
				@endif

				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Nim</th>
							<th>Nama</th>
							<th>Jenis Kelamin</th>
							<th>Jurusan</th>
							<th>Alamat</th>
						</tr>
					</thead>
					<tbody>
						@forelse($mahasiswas as $mahasiswa)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td><a href="{{ url('/mahasiswas/'.$mahasiswa->id) }}">{{$mahasiswa->nim}}</a></td>
							<td>{{$mahasiswa->nama}}</td>
							<td>{{$mahasiswa->jenis_kelamin == 'P' ?'Perempuan':'Laki-laki'}}</td>
							<td>{{$mahasiswa->jurusan}}</td>
							<td>{{$mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat}}</td>
						</tr>
						@empty
						<td colspan="6" class="text-center">Tidak ada data....</td>
						@endforelse
					</tbody>
				</div>
			</div>
		</div>

	</body>
	</html>