<!-- <div class="jumbotron text-center">
    <h2>APOTEK ONLINE</h2>
    <p>Solusi ada disini.....</p>
</div> -->
<div class="banner">

</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Daftar <b>Obat</b></h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                <!-- Carousel indicators -->
                <!-- <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol> -->
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="item carousel-item active">
                        <div class="row">
                            <?php foreach ($obat as $item) : ?>
                            <div class="col-sm-4">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <div class="img-box">
                                        <img src="<?php echo base_url('assets/img/obat.jpg') ?>" class="img-fluid"
                                            alt="GAMBAR" width="300px" height="200px">
                                    </div>
                                    <div class="thumb-content">
                                        <h4><?= $item->nama; ?></h4>
                                        <p><?= $item->bentuk; ?> || <?= $item->konsumen; ?></p>
                                        <!-- <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div> -->
                                        <p class="item-price"><b>Rp.<?= number_format($item->harga, 0, ',', '.'); ?></b>
                                        </p>
                                        <a href="<?= site_url('beli/' . $item->kode_obat); ?>"
                                            class="btn btn-primary">Buy or Add
                                            to Cart</a>
                                        <a href="<?= site_url('obat/' . $item->kode_obat); ?>"
                                            class="btn btn-primary">Detail</a>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- Carousel controls -->
                <!-- <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a> -->
            </div>
        </div>
    </div>
</div>
<Style>
body {
    background: #e2eaef;
    font-family: "Open Sans", sans-serif;
}

.banner {

    background-image: url(<?php echo base_url('assets/img/banner.jpg') ?>);
    height: 400px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

h2 {
    color: #000;
    font-size: 26px;
    font-weight: 300;
    text-align: center;
    text-transform: uppercase;
    position: relative;
    margin: 30px 0 60px;
}

h2::after {
    content: "";
    width: 100px;
    position: absolute;
    margin: 0 auto;
    height: 4px;
    border-radius: 1px;
    background: #7ac400;
    left: 0;
    right: 0;
    bottom: -20px;
}

.carousel {
    margin: 50px auto;
    padding: 0 70px;
}

.carousel .item {
    color: #747d89;
    min-height: 325px;
    text-align: center;
    overflow: hidden;
}

.carousel .thumb-wrapper {
    padding: 25px 15px;
    background: #fff;
    border-radius: 6px;
    text-align: center;
    position: relative;
    box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
}

.carousel .item .img-box {
    height: 120px;
    margin-bottom: 20px;
    width: 100%;
    position: relative;
}

.carousel .item img {
    max-width: 100%;
    max-height: 100%;
    display: inline-block;
    position: absolute;
    bottom: 0;
    margin: 0 auto;
    left: 0;
    right: 0;
}

.carousel .item h4 {
    font-size: 18px;
}

.carousel .item h4,
.carousel .item p,
.carousel .item ul {
    margin-bottom: 5px;
}

.carousel .thumb-content .btn {
    color: #7ac400;
    font-size: 11px;
    text-transform: uppercase;
    font-weight: bold;
    background: none;
    border: 1px solid #7ac400;
    padding: 6px 14px;
    margin-top: 5px;
    line-height: 16px;
    border-radius: 20px;
}

.carousel .thumb-content .btn:hover,
.carousel .thumb-content .btn:focus {
    color: #fff;
    background: #7ac400;
    box-shadow: none;
}

.carousel .thumb-content .btn i {
    font-size: 14px;
    font-weight: bold;
    margin-left: 5px;
}

.carousel .item-price {
    font-size: 13px;
    padding: 2px 0;
}

.carousel .item-price strike {
    opacity: 0.7;
    margin-right: 5px;
}

.carousel-control-prev,
.carousel-control-next {
    height: 44px;
    width: 40px;
    background: #7ac400;
    margin: auto 0;
    border-radius: 4px;
    opacity: 0.8;
}

.carousel-control-prev:hover,
.carousel-control-next:hover {
    background: #78bf00;
    opacity: 1;
}

.carousel-control-prev i,
.carousel-control-next i {
    font-size: 36px;
    position: absolute;
    top: 50%;
    display: inline-block;
    margin: -19px 0 0 0;
    z-index: 5;
    left: 0;
    right: 0;
    color: #fff;
    text-shadow: none;
    font-weight: bold;
}

.carousel-control-prev i {
    margin-left: -2px;
}

.carousel-control-next i {
    margin-right: -4px;
}

.carousel-indicators {
    bottom: -50px;
}

.carousel-indicators li,
.carousel-indicators li.active {
    width: 10px;
    height: 10px;
    margin: 4px;
    border-radius: 50%;
    border: none;
}

.carousel-indicators li {
    background: rgba(0, 0, 0, 0.2);
}

.carousel-indicators li.active {
    background: rgba(0, 0, 0, 0.6);
}

.carousel .wish-icon {
    position: absolute;
    right: 10px;
    top: 10px;
    z-index: 99;
    cursor: pointer;
    font-size: 16px;
    color: #abb0b8;
}

.carousel .wish-icon .fa-heart {
    color: #ff6161;
}

.star-rating li {
    padding: 0;
}

.star-rating i {
    font-size: 14px;
    color: #ffc000;
}
</Style>
<script>
$(document).ready(function() {
    $(".wish-icon i").click(function() {
        $(this).toggleClass("fa-heart fa-heart-o");
    });
});
</script>