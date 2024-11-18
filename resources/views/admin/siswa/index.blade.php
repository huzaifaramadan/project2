<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Siswa</title>
    <style>
         table{
        border-collapse:  collapse;
        margin: 20px 0px;
        text-align:center;
    }

    table,
    th,
    td{
        border: 1px solid;
        text-align: left;
        padding: 20px;
    }
    </style>
</head>
<body>
    <h1>Data Siswa</h1>
    <a href="{{route('admin/dashboard')}}">Menu Utama</a>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
    <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
        @csrf
    </form>
    <br><br>
    <form action="" method="GET">
        <label>Cari :</label>
        <input type="text" name="cari">
        <input type="submit" value="Cari">
    </form>
    <br><br>
   <button><a href="{{route('siswa.create')}}">Tambah Siswa</a></button> 
   <br><br>
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>
    @endif
    <table class="tabel" border="1px" style="text-align: center" >
        <tr>
            <th style="padding: 10px">Foto</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Kelas</th>
            <th>No Hp</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        @forelse ($siswas as $siswa)
        <tr>
            <td style="padding: 10px">
                <img src="{{asset('storage/public/siswas/'.$siswa->image)}}" width="120px" height="120px" >
            </td>
            <td>{{$siswa->nis}}</td>
            <td>{{$siswa->name}}</td>
            <td>{{$siswa->email}}</td>
            <td>{{$siswa->tingkatan}} {{$siswa->jurusan}} {{$siswa->kelas}}</td>
            <td>{{$siswa->hp}}</td>
            @if ($siswa->status == 1)
            <td>Aktif</td>   
            @else
            <td>Tidak Aktif</td> 
            @endif
            <td>
                <form onsubmit="return confirm ('Apakah anda yakin?');" action="{{route('siswa.destroy', $siswa->id)}}" method="POST">
                    <a href="{{route('siswa.show', $siswa->id)}}" class="btn btn-sm btn-dark">Show</a>
                    <a href="{{route('siswa.edit', $siswa->id)}}" class="btn btn-sm btn-primary">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>   
        @empty
        <tr>
            <td colspan="8">Tidak ada data</td>
        </tr>
        @endforelse
    </table>
    {{$siswas->links()}}
</body>
</html>