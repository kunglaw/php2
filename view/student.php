<div style="padding:20px;">

    <h2>Student List </h2>
    <br>
    <?php
        $keyword = "";
        if(!empty($_POST["keyword"]))
        {
            $keyword = $_POST["keyword"];
        }
    ?>
    <form class="form float-left" action="<?php echo $base_url."index.php?p=student" ?>" method="post"> 
    <div class="form-group">
        <input type="text" value="<?php echo $keyword ?>" name="keyword" class="form-control" placeholder="Search ... ">
        <button class="btn btn-primary" type="submit" style="display: inline-block"> Search</button>
    </div>
    </form> 

    <a href="<?php echo $base_url."index.php?p=student_add" ?>" 
    class="btn btn-primary float-right" type="submit"> Add Student </a>
    
    <span class="clearfix"></span><br>

    <div class="responsive-table col-md-9 float-left">
        <table class="table table-bordered">
        <thead>
            <th> NIK</th>
            <td> Photo </td> 
            <th> Name </th>
            <th> Kelas </th>
            <th> Gender </th>
            <th> Address </th>
            <th> Action </th>
        </thead>
        <tbody>   
            <?php
            $str = "SELECT * FROM murid_tbl a LEFT JOIN kelas_tbl b ON a.kelas = b.kelas_id";
            if(!empty($_POST['keyword']))
            {
                $str = "SELECT * FROM murid_tbl a LEFT JOIN kelas_tbl b ON a.kelas = b.kelas_id WHERE nama LIKE '%$_POST[keyword]%'";
            }else if(!empty($_GET["f"]))
            {
                $str = "SELECT * FROM murid_tbl a LEFT JOIN kelas_tbl b ON a.kelas = b.kelas_id WHERE b.kelas = '$_GET[f]'";
            }
            /* if(!empty($_GET['s']))
            {
                echo $str = "SELECT * FROM murid_tbl a LEFT JOIN kelas_tbl b ON a.kelas = b.kelas_id WHERE nama LIKE '%$_GET[s]%'";
            }*/
            
            $q = mysqli_query($connect,$str);
            while($row = mysqli_fetch_array($q,MYSQLI_ASSOC)){
                
                $photo = $base_url."upload/img/default.jpg";
                if(!empty($row["photo"]))
                {
                    $photo = $base_url."upload/img/".$row["photo"];
                }

            ?>
            <tr>
                <td><?php echo $row["NIK"]?></td>
                <td><img src="<?php echo $photo ?>" height="50" weight="50"> </td>
                <td><?php echo $row["nama"]?></td>
                <td> <?php echo $row["kelas"] ?> </td>
                <td><?php echo $row["jenis_kelamin"]?></td>
                <td><?php echo $row["alamat"]?></td>
                <td>
                    <a class="btn btn-primary float-left" href="<?php echo $base_url."index.php?p=student_update&nik=$row[NIK]" ?>" title="update"> U </a>
                    <form class="" method="POST" 
                    action="<?php echo $base_url."process/delete_murid_process.php" ?>" 
                    onSubmit="return confirm('Are you sure you want to delete <?php echo $row["nama"] ?> ? ')" >
                        <input type="hidden" name="nik" value="<?php echo $row["NIK"]?>" >
                        <button type="submit" class="btn btn-danger"> D </button>
                    </form>
                    <span class="clearfix"></span>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
        </table>
    </div>

    <ul class="list-group col-md-3 float-right">
        <li class="list-group-item bg-primary text-white"> Kelas </li>
        <?php
            $str1 = "SELECT * FROM kelas_tbl";
            $q1 = mysqli_query($connect,$str1);
            while($row1 = mysqli_fetch_array($q1,MYSQLI_ASSOC)){ // 
        ?>
                 <li class="list-group-item"><a href="<?php echo $base_url."index.php?p=student&f=$row1[kelas]" ?>"><?php echo $row1["kelas"] ?></li>
        <?php
            }
        ?>
    </ul>

    <div class="clearfix"></div>
</div>