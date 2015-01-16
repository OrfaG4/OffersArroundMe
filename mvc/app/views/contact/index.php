

<div class="container-fluid">
    <section class="container">
        <div class="container-page">				
            <div class="col-md-6">
                <h3 class="dark-grey">Form Your Opinion! <small>Send us your comment here...</small></h3>
                <form action="http://localhost/mvc/public/contact/submit" method="post">
                    <div class="form-group col-lg-12">
                        <input type="hidden" name="uid" class="form-control" id="" value="<?php echo $_SESSION["uid"]?>">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Reason</label>
                        <input type="text" name="reason" class="form-control" id="" value="">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Comment</label>
                        <textarea cols="20" rows="7" name="comment" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Say It !</button>
                </form>
            </div>
        </div>
    </section>
</div>
