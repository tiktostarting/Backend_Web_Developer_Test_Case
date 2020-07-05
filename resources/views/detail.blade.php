<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">


<h1 style="text-align:center;">Data Jamaah</h1>
<br>
<table style="position:relative;" class="table table-bordered table-striped">
    <tr>
        <td style="width:150px">Id Jamaah   </td>
        <td>{{ $data_jamaah->idjamaah }}</td>
    </tr>
    <tr>
        <td>Nama        </td>
        <td>{{ $data_jamaah->namajamaah }}</td>
    </tr>
    <tr>
        <td>Gender      </td>
        <td>{{ $data_jamaah->gender }}</td>
    </tr>
    <tr>
        <td>no. telepon </td>
        <td>{{ $data_jamaah->telpjamaah }}</td>
    </tr>
</table>

<br>
<form action="{{ url('/') }}">
		<button type="submit">Kembali</button>
	</form>
<br>