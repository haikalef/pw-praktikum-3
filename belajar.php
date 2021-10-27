<?php
$nama_barang = array("Bawang", "Wortel", "Cabai", "Bayam", "Kangkung", "Tomat", "Timun", "Terong");
$nomor = array(1, 2, 3, 4, 5, 6, 7, 8);
$berat = array(3, 5, 4, 0.5, 0.7, 0.8, 1, 6);
?>

<!DOCTYPE html>
<html style="background-color:#222222;">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    
    <style>
        *{
            font-family: 'Playfair Display', serif;
            color: white;
        }
    </style>
    
</head>
<body>

<h2 style="Color:MediumSeaGreen">Mr. Joy Greengrocery</h2>


    <table class="father" border='2px solid white' style="border-radius:10px;" width= 70%;>
        <tr>
            <td>No</td>
            <td>Nama Barang</td>
            <td>Berat (kg)</td>
            <td>Berat (g)</td>
            <td>Berat (mg)</td>
        </tr>

        <?php for ($i=0; $i < 8; $i++) { ?>
        
        <tr>
            <td> <?php echo $nomor[$i]; ?> </td>
            <td> <?php echo $nama_barang[$i]; ?> </td>
            <td> <?php echo $berat[$i]; ?> </td>
            <td> <?php echo $berat[$i] * 1000; ?> </td>
            <td> <?php echo $berat[$i] * 1000000; ?> </td>
        </tr>

        <?php } ?>   


    </table>
</body>
</html> 
