<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agus Setiawan</title>
</head>
<body style="">
    <h1>Agus Setiawan</h1>
    <form style="" action="database.php" method="post">
        Nama: 
        <input type="text" name="nama" id="nama">
        <br>
        <br>
        tanggal lahir: 
        <input type="date" name="tgl_lahir" id="tgl_lahir">
        <br>
        <br>
        Pekerjaan: 
        <select name="pekerjaan" id="pekerjaan">
            <option value="satpam">satpam</option>
            <option value="polisi">polisi</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>