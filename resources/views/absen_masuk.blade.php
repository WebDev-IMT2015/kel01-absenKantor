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
				<h2 id="title" class="raleway">Absensi Masuk Kantor Brazzers</h2>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-6">
						<form method="post" action="absen_masuk">
							<input type="text" class="form-control" placeholder="Masukkan NIP" name="nip"><br>
							<button class="btn btn-info" onclick="berhasil()" type="submit">Absen</button>
						</form>
					</div>
					<div class="col-md-2">
					</div>
				</div>
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