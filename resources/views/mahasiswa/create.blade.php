<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
</head>
<body>
    <h1>Create a Mahasiswa</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{route('mahasiswa.store')}}">
        @csrf 
        @method('post')
        <div>
            <label>Nama Mahasiswa</label>
            <input type="text" name="nama_mahasiswa" placeholder="Nama Mahasiswa" />
        </div>
        <div>
            <label>NIM</label>
            <input type="text" name="nim" placeholder="NIM" />
        </div>
        <div>
            <label>Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" placeholder="Jenis Kelamin" />
        </div>
        <div>
            <label>Foto</label>
            <input type="text" name="foto" placeholder="Foto"  />
        </div>
        <div>
            <label>Jurusan</label>
            <input type="text" name="jurusan" placeholder="Jurusan"  />
        </div>
        <div>
            <label>Tempat Lahir</label>
            <input type="text" name="tmp_lahir" placeholder="Tempat Lahir"  />
        </div>
        <div>
            <label>Tanggal lahir</label>
            <input type="date" name="tgl_lahir" placeholder="Tanggal Lahir"  />
        </div>
        <div>
            <label>Alamat</label>
            <input type="text" name="alamat" placeholder="Alamat"  />
        </div>
        <div>
            <label>nama ibu</label>
            <input type="text" name="nama_ibu" placeholder="Nama Ibu" />
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" placeholder="Email"  />
        </div>
        <div>
            <label>Hp</label>
            <input type="text" name="hp" placeholder="Hp"  />
        </div>
        <div>
            <input type="submit" value="Simpan">
        </div>
    </form>
</body>
</html>