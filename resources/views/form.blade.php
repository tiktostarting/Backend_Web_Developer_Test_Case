<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">

@if($data_jamaah ?? '')
    <h1 style="text-align:center;">Ubah data jamaah Dengan ID Jamaah = {{ $data_jamaah->idjamaah }}</h1>
@else
    <h1 style="text-align:center;">Tambah Entry Data Jamaah<h1>
@endif

    <form method="post" style="font-size: 20px;position: relative; left:30px;">
        {{ csrf_field() }}

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div>
            <label for="idjamaah">Id Jamaah :</label><br>
            <input type="text" id="idjamaah"  @if($data_jamaah ?? '') value="{{ $data_jamaah->idjamaah }}" @endif name="idjamaah">
        </div>
        <br>
        <div>
            <label for="namajamaah">Nama Jamaah :</label><br>
            <input type="text" id="namajamaah" @if($data_jamaah ?? '') value="{{ $data_jamaah->namajamaah }}" @endif name="namajamaah">
        </div>
        <br>
        <div>
            <label for="gender">Gender :</label><br>
            <input type="radio" id="gender" name="gender" value="L">
            <label for="male">Pria</label>
            <input type="radio" id="gender" name="gender" value="P">
            <label for="female">Wanita</label>
        </div>    
        <br>
        <div>
            <label for="telpjamaah">Telepon Jamaah :</label><br>
            <input type="text" id="telpjamaah" @if($data_jamaah ?? '') value="{{ $data_jamaah->telpjamaah }}" @endif name="telpjamaah">
        </div>
        <br>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
   
    <a style="font-size: 20px;" href="{{ url('/') }}"> Kembali </a> 
