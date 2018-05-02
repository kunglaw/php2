
<div class="col-md-5" style="padding:20px">
    <h2> Form Update Student</h2>
    <hr>
    <?php
        $nik = $_GET["nik"];
        $str = "SELECT * FROM murid_tbl WHERE NIK = '$nik' ";
        $q = mysqli_query($connect,$str);
        $row = mysqli_fetch_array($q);
    ?>
    <form class="form" action="<?php echo $base_url."process/update_murid_process.php" ?>" method="POST">
        <div class="form-group"> 
            <label> NIK </label>
            <input readonly value="<?php echo $row["NIK"] ?>" type="text" name="nik" class="form-control">
        </div>
        <div class="form-group"> 
            <label> Name </label>
            <input type="text" value="<?php echo $row["nama"] ?>" name="nama" class="form-control">
        </div>
        <?php
        
        $selected_male = "";
        $selected_female = "";

        if($row["jenis_kelamin"] == "laki-laki")
        {
            $selected_male = "checked='checked'";
        }
        else if($row["jenis_kelamin"] == "perempuan")
        {
            $selected_female = "checked='checked'";
        }
        
        ?>
        <div class="form-group"> 
            <label> Gender </label> <br> 
            <label><input <?php echo $selected_male ?> type="radio" name="jenis_kelamin" value="Laki-laki"> Male </label>
            <span> &nbsp; &nbsp; </span>
            <label><input <?php echo $selected_female ?> type="radio" name="jenis_kelamin" value="Perempuan"> Female </label>
        </div>
        <div class="form-group"> 
            <label> Address </label>
            <textarea name="alamat" class="form-control"><?php echo $row["alamat"] ?></textarea>
        </div>
        <button type="submit" class="btn btn-success"> Submit</button>
    </form>
</div>
       