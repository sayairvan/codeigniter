<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Daftar Penceramah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
     
        <table border = "1px solid black"> 
            <tr>
                <th>Nama Penceramah</th>
                <th>Nomor HP</th>
                <th>Alamat</th>
            </tr>
            <?php foreach ($penceramah as $pcrmh) : ?>

            <tr>
                <td><?php echo $pcrmh['NAMA_PENCERAMAH']; ?></td>
                <td><?php echo $pcrmh['NO_TELP']; ?></td>
                <td><?php echo $pcrmh['ALAMAT_PENCERAMAH']; ?></td>
            </tr>
            <?php endforeach?>
        </table>

</body>
</html>