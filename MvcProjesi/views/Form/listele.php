<?php require 'views/header.php' ?>

<div class="col-lg-12 text-center">


    <table class="table table-bordered mt-2">
        <thead>
            <tr class="font-weight-bold">
                <td>#Id</td>
                <td>Ad</td>
                <td>Soyad</td>
                <td>Yaş</td>
                <td>Işlem</td>
            </tr>
        </thead>
        <tbody>
            
            
                <?php 
                
                foreach ($data as $value) {
                    echo '<tr> 
                    <td>'.$value["id"].'</td>
                    <td>'.$value["ad"].'</td>
                    <td>'.$value["soyad"].'</td>
                    <td>'.$value["yas"].'</td>
                    <td> <a href="'.URL.'/kayit/kayitguncelle/'.$value["id"].'" class="btn btn-warning">Güncelle</a> | <a href="'.URL.'/kayit/kayitsil/'.$value["id"].'" class="btn btn-danger">Sil</a> </td>
                    </tr>
                    ';
                }
                ?> 
        </tbody>
    </table>

    <?php


    





    ?>
</div>

<?php require 'views/footer.php' ?>