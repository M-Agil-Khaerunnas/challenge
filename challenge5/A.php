<?php 

$n = 1;

    $siswa = [
        [
            "Nama" => "Joni Susanto",
            "Kelas" => "XII TKR 2",
            "Alamat" => "Pemalang"
        ],

        [
            "Nama" => "Intan Ayu",
            "Kelas" => "XII TB 1",
            "Alamat" => "Brebes"
        ],

        [
            "Nama" => "Salma Karima",
            "Kelas" => "XII RPL 3",
            "Alamat" => "Batang"
        ]
    ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table border="1" cellspacing="0" cellpadding="5">
          <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Kelas</th>
              <th>Alamat</th>
          </tr>
          <?php foreach($siswa as $s) : ?>
          <tr>
              <td><?= $n++ ?></td>
              <td><?= $s["Nama"] ?></td>
              <td><?= $s["Kelas"] ?></td>
              <td><?= $s["Alamat"] ?></td>
          </tr>
          <?php endforeach; ?>
      </table>

</body>
</html>