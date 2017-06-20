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
                <h2 id="title" class="raleway">List Pegawai</h2>
                <!-- @if(count($t))
                <ul>
                    @foreach ($t as $pg)
                    <li>
                        {{ $pg->nip }} - {{ $pg->name }} - {{ $pg->jabatan }}
                    </li>
                    @endforeach
                </ul>
                @endif  -->
               <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama Pegawai</th>
                            <th>Jabatan</th>
                            <th>Action</th>
                        </tr>
                        @if(count($t))
                            <?php $count=1;?>
                                @foreach($t as $pg)
                                    <tr>
                                        <td><?php echo $count++;?></td>
                                        <td>{{ $pg->nip }}</td>
                                        <td>{{ $pg->name }}</td>
                                        <td>{{ $pg->jabatan }}</td>
                                        <td><a href="{{ route('admin.edit', $pg->nip) }}" class="btn btn-warning btn-xs">EDIT
                                        <a href="{{ route('admin/hapus/', $pg->nip) }}" class="btn btn-danger btn-xs">HAPUS</td>
                                    </tr>
                                @endforeach
                        @endif                    </table>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <script>
        function input()
        {
            alert("Berhasil menambahkan pegawai.")
        }
    </script>
</body>
</html>