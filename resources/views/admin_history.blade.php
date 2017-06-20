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
                <h2 id="title" class="raleway">History Absensi</h2>
               <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Tanggal</th>
                            <th>Jam Masuk</th>
                            <th>Jam Keluar</th>
                            <th>Jam Istirahat Mulai</th>
                            <th>Jam Istirahat Selesai</th>
                        </tr>
                        @if(count($history))
                            <?php $count=1;?>
                                @foreach($history as $h)
                                    <tr>
                                        <td><?php echo $count++;?></td>
                                        <td>{{ $h->nip }}</td>
                                        <td>{{ $h->tanggal }}</td>
                                        <td>{{ $h->masuk }}</td>
                                        <td>{{ $h->keluar }}</td>
                                        <td>{{ $h->istirahat_masuk }}</td>
                                        <td>{{ $h->istirahat_keluar }}</td>
                                    </tr>
                                @endforeach
                        @endif                    
                    </table>
                    <a href="{{ url('admin') }}"><button class="btn btn-bg btn-danger">Back</button><br><br></a>
                    
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <script>
        function input()
        {
            alert("Berhasil update pegawai.")
        }
    </script>
</body>
</html>