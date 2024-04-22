<!DOCTYPE html>
<html>

<head>
    <title>Laporan List Tamu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }

        table tr th {
            font-weight: bold;
            text-align: center;
            background: #f4f4f4;
        }
    </style>
    <center>
        <h4>LIST TAMU</h4>
        <p>Waktu Export : {{ date('d-m-Y H:i') }}</p> <!-- SET KAPAN USER EXPORT -->
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th width="20px">No</th>
                <th style="text-align:center">Nama</th>
                <th style="text-align:center">Jenis Kelamin</th>
                <th style="text-align:center">Tempat, Tanggal lahir</th>
                <th style="text-align:center">Jabatan</th>
                <th style="text-align:center">CGP Angkatan</th>
                <th style="text-align:center">Alamat</th>
                <th style="text-align:center">No Telepon</th>
            </tr>
        </thead>
        <tbody>
            @php $no=1; @endphp <!-- MEMBUAT VAR $NO DENGAN NILAI 1 -->
            @if (count($data))
                @foreach ($data as $dt)
                    <!-- MEMBUAT PERULANGAN UNTUK MENAMPILKAN HASIL DARI DB -->
                    <tr>
                        <td width="20px">{{ $loop->iteration }}</td>
                        <td style="text-align:center">{{ $dt->nama??'' }}</td>
                        <td style="text-align:center">{{ $dt->jk??'' }}</td>
                        <td style="text-align:center">{{ $dt->ttl??'' }}</td>
                        <td style="text-align:center">{{ $dt->jabatan??'' }}</td>
                        <td style="text-align:center">{{ $dt->angkatan??'' }}</td>
                        <td style="text-align:center">{{ $dt->alamat??'' }}</td>
                        <td style="text-align:center">{{ $dt->no_tlp??'' }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

</body>

</html>