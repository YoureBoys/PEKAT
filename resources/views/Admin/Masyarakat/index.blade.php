@extends('layouts.admin')

@section('title', 'Halaman Masyarakat')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
@endsection

@section('header', 'Data Masyarakat')

@section('content')
    <table id="masyarakatTable" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Telpon</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($masyarakat as $k)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $k->nik }}</td>
                    <td>{{ $k->nama }}</td>
                    <td>{{ $k->username }}</td>
                    <td>{{ $k->telp }}</td>
                    <td><a href="{{ route('masyarakat.show', $k->nik) }}" style="text-decoration: underline">Lihat  </a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


@section('js')
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#masyarakatTable').DataTable();
        })
    </script>
@endsection
