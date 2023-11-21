# Lab7Web

## Cetak hello world
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
        echo "Hello World". "<br>";
    ?>
</body>
</html>
```
### Output

<img width="475" alt="image" src="https://github.com/Agussetiaa/Lab7_web/assets/115542822/10467067-deed-4fd9-ac4d-ba19d3f3da60">

## VAR PHP
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
        echo "Hello World". "<br>";
    ?>
    <?php
        $nim = "312210193";
        $nama = 'Agus Setiawan';
        echo "NIM : " .$nim ."<br>";
        echo "Nama : $nama";
    ?>
</body>
</html>
```
### Output

<img width="480" alt="image" src="https://github.com/Agussetiaa/Lab7_web/assets/115542822/74edf892-30cc-4d39-8fe4-b85e9379acc2">

# Predefine Variable $_GET
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nama = $_GET['nama'];
        echo "Selamat Datang, $nama!";
    ?>
</body>
</html>
```
### Output

<img width="476" alt="image" src="https://github.com/Agussetiaa/Lab7_web/assets/115542822/a5cf7c20-d225-4d67-bdd5-bf25b43b4f39">

# FORM
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Form Input</h2>
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>
    <?php
        echo 'Selamat Datang ' . $_POST['nama'];
    ?>
</body>
</html>
```
### Output

<img width="475" alt="image" src="https://github.com/Agussetiaa/Lab7_web/assets/115542822/d7d9dd8b-38fd-419a-8b54-719d8c1d9679">

# operator 
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $gaji = 3000000;
        $pajak = 0.1;
        $thp = $gaji - ($gaji*$pajak);
        echo "Gaji sebelum pajak = Rp. $gaji <br>";
        echo "Gaji yang dibawa pulang = Rp. $thp";
    ?>
</body>
</html>
```
### Output


# if else
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nama_hari = date("l");
        if ($nama_hari == "Sunday") {
            echo "Minggu";
        } elseif ($nama_hari == "Monday") {
            echo "Senin";
        } else {
            echo "Selasa";
        }
    ?>
</body>
</html>
```
### Output


# Switch
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $nama_hari = date("l");
    switch ($nama_hari) {
    case "Sunday":
        echo "Minggu";
        break;
    case "Monday":
        echo "Senin";
        break;
    case "Tuesday":
        echo "Selasa";
        break;
    default:
        echo "Sabtu";
    }
?>
</body>
</html>
```
### Output

# Looping FOR
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "Perulangan 1 sampai 10 <br />";
    for ($i=1; $i<=10; $i++) {
        echo "Perulangan ke: " . $i . '<br />';
    }
    echo "Perulangan Menurun dari 10 ke 1 <br />";
    for ($i=10; $i>=1; $i--) {
        echo "Perulangan ke: " . $i . '<br />';
    }
?>
</body>
</html>
```
### Output


# Looping while
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    while ($i<=10) {
        echo "Perulangan ke: " . $i . '<br />';
        $i++;
    }
?>
</body>
</html>
```
### Output


# Looping dowhile
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    do {
        echo "Perulangan ke: " . $i . '<br />';
        $i++;
    } while ($i<=10);
?>
</body>
</html>
```
### Output



# Tugas Membuat form sederhana

- Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang berbeda-beda sesuai pilihan pekerjaan.

### FORM INPUT

<img width="960" alt="Screenshot 2023-11-15 101144" src="https://github.com/Agussetiaa/Lab7_web/assets/115542822/aae61744-5f83-413c-ac34-b36f9f6ff183">

<img width="960" alt="image" src="https://github.com/Agussetiaa/Lab7_web/assets/115542822/3a29deab-d330-4850-8f6c-ffade669639e">


### HASIL OUTPUT

<img width="960" alt="image" src="https://github.com/Agussetiaa/Lab7_web/assets/115542822/ef5f33c2-9f92-4834-a793-125925db6aa4">

<img width="960" alt="image" src="https://github.com/Agussetiaa/Lab7_web/assets/115542822/5a486091-94c3-4872-a96b-320633e59704">
