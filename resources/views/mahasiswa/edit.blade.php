<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Mahasiswa</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{route('mahasiswa.update', ['mahasiswa' => $mahasiswa->nim])}}">
        @csrf 
        @method('put')
        <div>
            <label>Nama Mahasiswa</label>
            <input type="text" name="nama_mahasiswa" placeholder="Nama Mahasiswa" value="{{$mahasiswa->nama_mahasiswa}}" />
        </div>
        <div>
            <label>NIM</label>
            <input type="text" name="nim" placeholder="NIM" value="{{$mahasiswa->nim}}" />
        </div>
        <div>
            <label>Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" placeholder="Jenis Kelamin" value="{{$mahasiswa->jenis_kelamin}}" />
        </div>
        <div>
            <label>Foto</label>
            <input type="text" name="foto" placeholder="Foto" value="{{$mahasiswa->foto}}" />
        </div>
        <div>
            <label>jurusan</label>
            <input type="text" name="jurusan" placeholder="jurusan" value="{{$mahasiswa->jurusan}}" />
        </div>
        <div>
            <label>tempat lahir</label>
            <input type="text" name="tmp_lahir" placeholder="Tempat Lahir" value="{{$mahasiswa->tmp_lahir}}" />
        </div>
        <div>
            <label>Tanggal lahir</label>
            <input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" value="{{$mahasiswa->tgl_lahir}}" />
        </div>
        <div>
            <label>alamat</label>
            <input type="text" name="alamat" placeholder="alamat" value="{{$mahasiswa->alamat}}" />
        </div>
        <div>
            <label>nama ibu</label>
            <input type="text" name="nama_ibu" placeholder="Nama Ibu" value="{{$mahasiswa->nama_ibu}}" />
        </div>
        <div>
            <label>email</label>
            <input type="text" name="email" placeholder="email" value="{{$mahasiswa->email}}" />
        </div>
        <div>
            <label>Hp</label>
            <input type="text" name="hp" placeholder="Hp" value="{{$mahasiswa->hp}}" />
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html>