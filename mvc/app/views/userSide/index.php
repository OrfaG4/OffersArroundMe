<div class="container-full">
    <div class="col-md-10">
<?php
foreach ($data['allOffers'] as $offers){
    ?>
        <div class="col-md-9 jumbotron">
            <h3 class="dark-grey"><?php echo $offers->title; ?></h3>
            <hr />
            <p class="text-success"><?php echo $offers->desc; ?></p>
            <p class="text-right alert">
                <form class="text-right alert" action="http://localhost/mvc/public/userSide/seeStoreOwner" method="post">
                    <input type="hidden" name="id" value="<?php echo $offers->user_id;?>" >
                    <input type="submit" value="Go to store..." class="btn btn-primary">
                </form>
            </p>
        </div>

        
        
<?php } ?>
    </div>
</div>