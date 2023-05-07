<?php require 'views/header.php' ?>
<div class="col-lg-12 text-center">
    <br>
    <form action="<?php echo URL;?>/Login/GirisKontrol" method="post">
        <div class="row col-lg-4 mx-auto m-2 border bg-light">
                <input type="text" placeholder="Kullanıcı Adi" name="ad" class="form-control">
                <input type="text" placeholder="Şifre" name="sifre" class="form-control">
                <input type="submit" value="Giriş Yap" class="btn btn-outline-info">
        </div>
    </form>
    <br>
</div>
<?php require 'views/footer.php' ?>