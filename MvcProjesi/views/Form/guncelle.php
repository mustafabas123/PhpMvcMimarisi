<?php require 'views/header.php' ?>
<div class="col-lg-12 text-center">
    <?php
    foreach($data as $value){
        $id=$value["id"];
        $ad=$value["ad"];
        $soyad=$value["soyad"];
        $yas=$value["yas"];
    }
    
    ?>
    <br>
    <form action="<?php echo URL;?>/kayit/guncelle" method="post">
        <div class="row col-lg-4 mx-auto m-2 border bg-light">
                <input type="hidden" name="Id" value="<?php echo $id?>">
                <input type="text" placeholder="Ad" name="ad" value="<?php echo $ad ?>" class="form-control">
                <input type="text" placeholder="Soyad" name="soyad" value="<?php echo $soyad?>" class="form-control">
                <input type="text" placeholder="Yaş" name="yas" value="<?php echo $yas?>" class="form-control">
                <input type="submit" value="Güncelle" class="btn btn-outline-info">
        </div>
    </form>
    <br>
</div>
<?php require 'views/footer.php' ?>