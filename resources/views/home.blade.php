<head>
    <h1 style="text-align:center;">Kumpulan Data Member Jamaah</h1>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
</head>
<body>
    <br>
    <h3><a href="{{ url('tambah')}}">+ Tambah Data</a></h3>
    <br>
    <table class="table table-bordered table-striped">
        <tr>
            <th>nama jamaah</th>
            <th>gender</th>
            <th>no. telepon</th>
            <th>Aksi</th>
        </tr>
        @foreach($data_jamaah as $row)
            <tr>
                <td width="30%">{{ $row->namajamaah }}</td>
                <td width="10%">{{ $row->gender }}</td>
                <td width="20%">{{ $row->telpjamaah}}</td>
                <td width="40%">
                <form action=" {{ url( "detail/" . $row->idjamaah) }} "> 
                    <button type="submit">Detail</button>
                </form>
                <form action=" {{ url( "ubah/" . $row->idjamaah) }} "> 
                    <button type="submit">Ubah</button>
                </form>
                <form action=" {{ url( "hapus/" . $row->idjamaah) }} "> 
                    <button type="submit">Hapus</button>
                </form>                                
                </td>
            </tr>
        @endforeach
    </table>
</body>