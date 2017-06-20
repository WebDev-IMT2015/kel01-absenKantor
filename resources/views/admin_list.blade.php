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
                                        <td>
                                        <a href="{{ route('admin.edit', $pg->nip) }}" class="btn btn-warning btn-xs">EDIT</a>
                                        <a href="{{ route('admin.hapus', $pg->nip) }}" class="btn btn-danger btn-xs">DELETE</a>
                                        </td>
                                    </tr>
                                @endforeach
                        @endif                    
                    </table>
                    <a href="{{ url('admin') }}"><button class="btn btn-bg btn-danger">Back</button><br><br></a>
                    @if(isset($t_edit)) 
                    <form action="{{ route('admin.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="text" class="form-control" placeholder="NIP" name="nip" required="" readonly="" @if(isset($t_edit)) value="{{ $t_edit->nip }}" @endif><br>
                        <input type="text" class="form-control" placeholder="Nama" name="nama" required="" @if(isset($t_edit)) value="{{ $t_edit->name }}" @endif><br>
                        <input type="text" class="form-control" placeholder="Jabatan" name="jabat" required="" @if(isset($t_edit)) value="{{ $t_edit->jabatan }}" @endif><br>
                        <button class="btn btn-bg btn-success" onclick="input()" type="submit">SAVE</button>
                    </form>

                    @endif
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