<?php 

    include "../config/koneksi.php";

?>

    <table style="" border="1" >
        <thead>
            <th>NIK</th>
            <th> Nama </th>
            <th> Jenis Kelamin </th>
            <th> Alamat </th>
        </thead>
        <tbody>
            <?php 
                $str = "SELECT * FROM murid_tbl";
                $q = mysqli_query($connect,$str);
                while($f = mysqli_fetch_array($q,MYSQLI_ASSOC) )
                {
            ?>
            <tr>
                <td> <?php echo $f["NIK"]?> </td>
                <td> <?php echo $f["nama"]?> </td>
                <td> <?php echo $f["jenis_kelamin"]?> </td>
                <td> <?php echo $f["alamat"]?> </td>
            <tr>
            <?php 
                }
            ?>
        </tbody>
    </table>