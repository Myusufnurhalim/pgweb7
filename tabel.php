<?php
$Kecamatan = array("Moyudan", "Minggir", "Seyegan", "Godean", "Gamping");
$Luas = array("27.62", "27.27", "26.63", "26.84", "29.25");
$Penduduk = array("31497", "29886", "47129", "72028", "108675");
?>

<table border="2">
    <tr>
        <th>Kecamatan</th>
        <th>Luas</th>
        <th>Penduduk</th>
    </tr>
    <?php for ($i = 0; $i <=4; $i++) : ?>
        <tr>
            <td><?php echo $Kecamatan[$i]; ?></td>
            <td><?php echo $Luas[$i]; ?></td>
            <td><?php echo $Penduduk[$i]; ?></td>
        </tr>
    <?php endfor ?>
</table>