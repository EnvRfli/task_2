<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styletugas2.css">
    <title>Hasil Pemesanan</title>

</head>

<body id="bg_style">
   

<h1>Hasil Pemesanan anda</h1>
<div id="bg_form">
        <table>
        <tr>
            <th>Nama</th>
            <th>Usia</th>
            <th>Jenis Kelamin</th>
            <th>Jumlah Tiket</th>
        </tr>
        <tr>
            <td><?php echo $_GET['nama_orang'] ?></td>
            <td><?php echo $_GET['usia'] ?></td>
            <td><?php echo $_GET['jenis_kelamin'] ?></td>
            <td><?php echo $_GET['jmlh'] ?></td>
        </tr>
        </table>
</div>

</body>