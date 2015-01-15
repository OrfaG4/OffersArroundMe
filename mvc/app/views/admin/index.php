<div class="container-fluid">
    <section class="container">
	<div class="container-page">
            <h2 class="dark-grey jumbotron b">Admin Area: <small>Opinions View</small></h2>
            <?php foreach($data['opinions'] as $opinion){?>
            <div class="col-md-7 jumbotron">
                <h3 class="dark-grey">Reason: <?php echo $opinion->reason; ?></h3>
                <h3 class="dark-grey">Opinion:</h3>
                <p>
                    <?php echo $opinion->comment; ?>
                </p>
                <hr>
            </div>
            <?php } ?>
        </div>
    </section>
</div>
