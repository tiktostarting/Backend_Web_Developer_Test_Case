@if($data_jamaah)
    <h1>Ubah data jamaah Dengan ID Jamaah = {{ $data_jamaah->idjamaah }}</h1>
@else
    <h1>Tambah Artikel<h1>
@endif

<form method="post">
    {{ csrf_field() }}
    <div>
        <label for="idjamaah">Id Jamaah :</label><br>
        <input type="text" id="idjamaah"  @if($data_jamaah) value="{{ $data_jamaah->idjamaah }}" @endif name="idjamaah">
    </div>
    <div>
        <label for="namajamaah">Nama Jamaah :</label><br>
        <input type="text" id="namajamaah" @if($data_jamaah) value="{{ $data_jamaah->namajamaah }}" @endif name="namajamaah">
    </div>
    <div>
        <label for="gender">Gender :</label><br>
        <input type="radio" id="gender" name="gender" value="L">
        <label for="male">Pria</label>
        <input type="radio" id="gender" name="gender" value="P">
        <label for="female">Wanita</label>
    </div>    <div>
        <label for="telpjamaah">Telepon Jamaah :</label><br>
        <input type="text" id="telpjamaah" @if($data_jamaah) value="{{ $data_jamaah->telpjamaah }}" @endif name="telpjamaah">
    </div>
    <button type="submit">Submit</button>
    <button type="reset">Reset</button>
</form>
<a href="{{ url('/') }}"> Kembali </a> 
