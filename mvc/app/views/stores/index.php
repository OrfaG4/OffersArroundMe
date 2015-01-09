<div class="container-fluid">
    <section class="container">
	<div class="container-page">				
            <div class="col-md-6">
            <h3 class="dark-grey">Select Offer to update:</h3>
            <form action="http://localhost/mvc/public/stores/" method="post">
            <select name="offer">
                <option selected="selected">Click to select offer</option>
                <?php foreach($data['userOffers'] as $offers){
                    echo"<option value='$offers->title'>$offers->title</option>";
                }?>
            </select>
            <button type="submit" class="btn btn-primary">Select</button>
            </form >            
            <br /><br />
            <h3 class="dark-grey">Update Offer Details</h3>
            <?php 
            foreach($data['offerDetails'] as $details){ ?>
            
          <form action="http://localhost/mvc/public/stores/details" method="post">
          <div class="form-group">
            <label>ID:</label>
            <input type="text" class="form-control" name="id" readonly="readonly" value="<?php echo $details->id;?>">
          </div>
          <div class="form-group">
            <label>Title:</label>
            <input type="username" class="form-control" name="title" value="<?php echo $details->title;?>">
          </div>
          <div class="form-group">
            <label>Desc:</label>
            <textarea rows="7" class="form-control" name="desc"><?php echo $details->desc;?></textarea>
          </div>

          <div class="form-group">
            <label>Latitude:</label>
            <input type="text" class="form-control" name="lat" value="<?php echo $details->lat;?>">
          </div>

          <div class="form-group">
            <label>Longtitude:</label>
            <input type="text" class="form-control" name="long" value="<?php echo $details->long;?>"> 
          </div>
          <div class="form-group">
            <label>Percent:</label>
            <input type="text" class="form-control" name="percent" value="<?php echo $details->percent;}?>">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
	<div class="col-md-6">
            <h3 class="dark-grey">Create a new Offer</h3>
                <p>
                    Create your new offer simply by giving its name!
                    Then you can edit the information by clicking on the select menu
                </p>
                <p>
                    Do not forget to give the correct Longtitude and Latitude to make
                    have your offers appear on the map!
                </p>
                <form role="form" action="http://localhost/mvc/public/stores/newOffer" method="post">
                    <div class="form-group">
                      <label>New offer name:</label>
                      <input type="text" class="form-control" name="title">
                    </div>
                    <button type="submit" class="btn btn-primary">Create offer!</button>
                </form>

            </div>
            <div class="col-md-6">
            <h3 class="dark-grey">Delete an Offer</h3>
                <p>
                    If your offer is expired please delete it here.
                </p>
                <form role="form" action="http://localhost/mvc/public/stores/removeOffer" method="post">
                    <div class="form-group">
                      <label>Pick an offer to delete:</label>
                        <select name="title">
                            <option selected="selected">Click to select offer</option>
                            <?php foreach($data['userOffers'] as $offers){
                                echo"<option>$offers->title</option>";
                            }?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Delete Offer</button>
                </form>
            </div>
        </div>
    </section>
</div>