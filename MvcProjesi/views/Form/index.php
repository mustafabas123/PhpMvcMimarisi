<?php require 'views/header.php' ?>
<div class="col-lg-12 text-center">
    <br>
    <form action="<?php echo URL;?>/kayit/kontrol" method="post">
        <div class="row col-lg-4 mx-auto m-2 border bg-light">
                <input type="text" placeholder="Ad" name="ad" class="form-control">
                <input type="text" placeholder="Soyad" name="soyad" class="form-control">
                <input type="text" placeholder="Yaş" name="yas" class="form-control">
                <input type="submit" value="Ekle" class="btn btn-outline-info">
        </div>
    </form>
    <br>
</div>
<?php require 'views//footer.php' ?>