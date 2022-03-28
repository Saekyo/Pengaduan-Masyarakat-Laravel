<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print</title>
</head>
<body>
    <div class="container">
        <h2>Pengaduan Masyarakat</h2>
        <h4>Kota Bogor</h4>
        <hr>
        <div class="m-auto">
            <img src="{{ asset('storage/'.$complaint['photo'])}}" alt="" srcset="" style="width:5rem;height:5rem">
            <p>NIK: {{$complaint['nik']}}</p>
            <p>Nama: {{$complaint['name']}}</p>
            <p>Alamat: {{$complaint['address']}}</p>
            <p>Nomoe Telepon: {{$complaint['phone_number']}}</p>
            <p>Isi Laporan: {{$complaint['report']}}</p>
            <p>Waktu Laporan: {{$complaint['created_at']}}</p>
            <p>Status Laporan: {{$complaint['status']}}</p>
        </div>
    </div>

    <script>
        window.print();
    </script>
</body>
</html>
