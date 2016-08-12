


<?php foreach ($portafolio as $key => $value): ?>

        <div class="col-sm-4 portfolio-item">
            <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                <div class="caption">
                    <div class="caption-content">
                        <i class="fa fa-search-plus fa-3x"></i>

                    </div>
                </div>
                <?php echo $value['titulo_portafolio'] ?>

                <a id="single_2" href="http://farm2.staticflickr.com/1514/23919332220_60b7867d60_b.jpg" title="the forest at dawn (Luca-Anconetani)">
	                <img src="http://farm2.staticflickr.com/1514/23919332220_60b7867d60_m.jpg" alt="" />
                </a>
                <!-- <img src="img/portfolio/cabin.png" class="img-responsive" alt=""> -->
            </a>
        </div>

<?php endforeach; ?>
