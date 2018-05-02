
<div class="col-md-5" style="padding:20px">
    <h2> Form Add Murid</h2>
    <hr>
    <?php
        if(isset($error_msg))
        {
            echo $error_msg;
        }
    ?>
    <form class="form" action="<?php echo $base_url."process/add_murid_process.php" ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group"> 
            <label> NIK </label>
            <input type="text" name="nik" class="form-control">
        </div>
        <div class="form-group"> 
            <label> Nama </label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="form-group"> 
            <label> Jenis Kelamin </label> <br> 
            <label><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki - Laki </label>
            <span> &nbsp; &nbsp; </span>
            <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan </label>
        </div>
        <div class="form-group">
            <label> Upload Photo </label> <br> 
            <input type="file" name="photo">
        </div>
        <div class="form-group"> 
            <label> Alamat </label>
            <textarea name="alamat" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success"> Submit</button>
    </form>
</div>
       