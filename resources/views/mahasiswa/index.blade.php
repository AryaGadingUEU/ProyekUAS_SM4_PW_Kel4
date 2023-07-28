<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CRUD Mahasiswa</title>
</head>
<body>
    <h1>Mahasiswa</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('mahasiswa.create')}}">Add a Mahasiswa</a>
        </div>
        <table border="1">
            <tr>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Foto</th>
                    <th>Jurusan</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Nama Ibu</th>
                    <th>Email</th>
                    <th>HP</th>
                    <th>Aksi</th>
            </tr>
            @foreach($mahasiswa as $mhs )
                <tr>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama_mahasiswa }}</td>
                    <td>{{ $mhs->jenis_kelamin }}</td>
                    <td>{{ $mhs->foto }}</td>
                    <td>{{ $mhs->jurusan }}</td>
                    <td>{{ $mhs->tmp_lahir }}</td>
                    <td>{{ $mhs->tgl_lahir }}</td>
                    <td>{{ $mhs->alamat }}</td>
                    <td>{{ $mhs->nama_ibu }}</td>
                    <td>{{ $mhs->email }}</td>
                    <td>{{ $mhs->hp }}</td>
                    <td>
                        <a href="{{route('mahasiswa.edit', ['id' => $mhs->nim])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('mahasiswa.destroy', ['mahasiswa' => $mhs])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>