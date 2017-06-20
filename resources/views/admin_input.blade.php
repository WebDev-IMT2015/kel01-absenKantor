<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin_input.css') }}">
    <title>Admin</title>
</head>
<body class="full-height flex-center position-ref">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 mid">
                <h2 id="title" class="raleway">Input Pegawai</h2>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <form action='input' method="POST">
                        {{ csrf_field() }}
                        <input type="text" class="form-control" placeholder="NIP" name="nip" required=""><br>
                        <input type="text" class="form-control" placeholder="Nama" name="nama" required=""><br>
                        <input type="text" class="form-control" placeholder="Jabatan" name="jabat" required=""><br>
                        <button class="btn btn-bg btn-success" onclick="input()" type="submit">Input</button>
                        </form>
                        <br>
                        <a href="{{ url('admin') }}"><button class="btn btn-bg btn-danger">Back</button><br><br></a>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <script>
        function input()
        {
            if(($berhasil)=1){
                alert("Berhasil menambahkan pegawai.")
            }
            else
            {
                alert("Gagal menambahkan, NIP sudah terdaftar.")
            }
        }
    </script>
</body>
</html>