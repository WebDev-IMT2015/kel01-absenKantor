<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
	<title>Absensi Kantor</title>
</head>
<body class="full-height flex-center position-ref">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8 mid">
				<h2 id="title" class="raleway">Absensi Kantor</h2>
				<a href="{{ url('absen_masuk') }}"><button class="btn btn-md btn-info">Absen Masuk</button></a>&nbsp
				<a href="{{ url('absen_keluar') }}"><button class="btn btn-md btn-success">Absen keluar</button></a>&nbsp
				<a href="{{ url('absen_mulai') }}"><button class="btn btn-md btn-info">Absen Istirahat Mulai</button></a>&nbsp
				<a href="{{ url('absen_selesai') }}"><button class="btn btn-md btn-success">Absen Istirahat Selesai</button></a>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>

	<script>
		function berhasil()
		{
			if () //jika di database NIP tidak ada 
			{
				alert("NIP tidak ditemukan.")
			}
			else
			{
				alert("Absen masuk berhasil.")
			}
		}
	</script>
</body>
</html>