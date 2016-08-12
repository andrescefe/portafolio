

<!-- foreach para mostrar registro por registro en div con efectos boostrap  -->
<?php foreach ($portafolio as $key => $value): ?>

        <div class="col-sm-4 portfolio-item">
            <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                <div class="caption">
                    <div class="caption-content">
                        <i class="fa fa-search-plus fa-3x"></i>

                    </div>
                </div>
                <?php echo $value['titulo_portafolio'] ?>
                <!-- <img src="img/portfolio/cabin.png" class="img-responsive" alt=""> -->
            </a>
        </div>

<?php endforeach; ?>
