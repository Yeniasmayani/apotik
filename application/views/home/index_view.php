<!DOCTYPE html>
<html>

<head>
    <title>Apotek JR Farma</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/main.css">
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top" style="height: 100px;">
        <div class="container" style="margin-top: 20px;">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigasi">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="color: #093c94;" class="navbar-brand" href="<?= site_url(); ?>"><strong>Apotek JR
                        Farma</strong></a>
            </div>
            <div class="collapse navbar-collapse" id="navigasi">
                <ul class="nav navbar-nav navbar-right">
                    <li><a style="color: #fff; margin-right:10px" class="btn btn-primary btn-sm" href="<?= site_url('Home/konfirmasi'); ?>"><strong>KONFIRMASI
                                PEMBELIAN</strong></a>
                    </li>
                    <li><a style="color: #fff; margin-right:10px" class="btn btn-primary btn-sm" href="<?= site_url('cek'); ?>"><strong>CEK
                                PEMBELIAN</strong></a></li>
                    <li><a style="color: #fff; margin-right:10px" class="btn btn-primary btn-sm" href="<?= site_url('obat'); ?>">
                            <strong>DAFTAR
                                OBAT</strong>
                        </a></li>
                    <li><a style="color: #fff; margin-right:10px" class="btn btn-primary btn-sm" href="<?= site_url('beli'); ?>"><strong>KERANJANG</strong>
                            <span class="glyphicon glyphicon-shopping-cart"></a>
                    </li>
                    <li></li>
                </ul>
            </div>
        </div>
    </nav>
    <?php $this->load->view('home/' . $view_name); ?>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-12">
                    <div class="single_footer">
                        <h4>Services</h4>
                        <p> KANTOR PUSAT</p>
                        <p>
                            Lombok Tengah
                        </p>
                    </div>
                </div>
                <!--- END COL -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single_footer single_footer_address">
                        <h4>Page Link</h4>
                        <!-- <ul>
                            <li><a href="#">Lorem Ipsum</a></li>
                            <li><a href="#">Simply dummy text</a></li>
                            <li><a href="#">The printing and typesetting </a></li>
                            <li><a href="#">Standard dummy text</a></li>
                            <li><a href="#">Type specimen book</a></li>
                        </ul> -->
                    </div>
                </div>
                <!--- END COL -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single_footer single_footer_address">
                        <h4>Subscribe today</h4>
                        <div class="signup_form">
                            <form action="#" class="subscribe">
                                <input type="text" class="subscribe__input" placeholder="Enter Email Address">
                                <button type="button" class="subscribe__btn"><i class="fas fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="social_profile">
                        <ul>
                            <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <p class="copyright">Copyright © 2023 <a href="#">Yeni</a>.</p>
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->
        </div>
        <!--- END CONTAINER -->
    </div>
</body>

</html>

<Style>
    a,
    a:hover,
    a:focus,
    a:active {
        text-decoration: none;
        outline: none;
    }

    a,
    a:active,
    a:focus {
        color: #333;
        text-decoration: none;
        transition-timing-function: ease-in-out;
        -ms-transition-timing-function: ease-in-out;
        -moz-transition-timing-function: ease-in-out;
        -webkit-transition-timing-function: ease-in-out;
        -o-transition-timing-function: ease-in-out;
        transition-duration: .2s;
        -ms-transition-duration: .2s;
        -moz-transition-duration: .2s;
        -webkit-transition-duration: .2s;
        -o-transition-duration: .2s;
    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    section {
        padding: 60px 0;
        /* min-height: 100vh;*/
    }

    .footer {
        background: linear-gradient(105deg, #6e99e6, #093c94);
        padding-top: 80px;
        padding-bottom: 40px;
    }

    /*END FOOTER SOCIAL DESIGN*/
    .single_footer {}

    @media only screen and (max-width:768px) {
        .single_footer {
            margin-bottom: 30px;
        }
    }

    .single_footer h4 {
        color: #fff;
        margin-top: 0;
        margin-bottom: 25px;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 20px;
    }

    .single_footer h4::after {
        content: "";
        display: block;
        height: 2px;
        width: 40px;
        background: #fff;
        margin-top: 20px;
    }

    .single_footer p {
        color: #fff;
    }

    .single_footer ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .single_footer ul li {}

    .single_footer ul li a {
        color: #fff;
        -webkit-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
        line-height: 36px;
        font-size: 15px;
        text-transform: capitalize;
    }

    .single_footer ul li a:hover {
        color: #ff3666;
    }

    .single_footer_address {}

    .single_footer_address ul {}

    .single_footer_address ul li {
        color: #fff;
    }

    .single_footer_address ul li span {
        font-weight: 400;
        color: #fff;
        line-height: 28px;
    }

    .contact_social ul {
        list-style: outside none none;
        margin: 0;
        padding: 0;
    }

    /*START NEWSLETTER CSS*/
    .subscribe {
        display: block;
        position: relative;
        margin-top: 15px;
        width: 100%;
    }

    .subscribe__input {
        background-color: #fff;
        border: medium none;
        border-radius: 5px;
        color: #333;
        display: block;
        font-size: 15px;
        font-weight: 500;
        height: 60px;
        letter-spacing: 0.4px;
        margin: 0;
        padding: 0 150px 0 20px;
        text-align: center;
        text-transform: capitalize;
        width: 100%;
    }

    @media only screen and (max-width:768px) {
        .subscribe__input {
            padding: 0 50px 0 20px;
        }
    }

    .subscribe__btn {
        background-color: transparent;
        border-radius: 0 25px 25px 0;
        color: #01c7e9;
        cursor: pointer;
        display: block;
        font-size: 20px;
        height: 60px;
        position: absolute;
        right: 0;
        top: 0;
        width: 60px;
    }

    .subscribe__btn i {
        transition: all 0.3s ease 0s;
    }

    @media only screen and (max-width:768px) {
        .subscribe__btn {
            right: 0px;
        }
    }

    .subscribe__btn:hover i {
        color: #ff3666;
    }

    button {
        padding: 0;
        border: none;
        background-color: transparent;
        -webkit-border-radius: 0;
        border-radius: 0;
    }

    /*END NEWSLETTER CSS*/

    /*START SOCIAL PROFILE CSS*/
    .social_profile {
        margin-top: 40px;
    }

    .social_profile ul {
        list-style: outside none none;
        margin: 0;
        padding: 0;
    }

    .social_profile ul li {
        float: left;
    }

    .social_profile ul li a {
        text-align: center;
        border: 0px;
        text-transform: uppercase;
        transition: all 0.3s ease 0s;
        margin: 0px 5px;
        font-size: 18px;
        color: #fff;
        border-radius: 30px;
        width: 50px;
        height: 50px;
        line-height: 50px;
        display: block;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    @media only screen and (max-width:768px) {
        .social_profile ul li a {
            margin-right: 10px;
            margin-bottom: 10px;
        }
    }

    @media only screen and (max-width:480px) {
        .social_profile ul li a {
            width: 40px;
            height: 40px;
            line-height: 40px;
        }
    }

    .social_profile ul li a:hover {
        background: #ff3666;
        border: 1px solid #ff3666;
        color: #fff;
        border: 0px;
    }

    /*END SOCIAL PROFILE CSS*/
    .copyright {
        margin-top: 70px;
        padding-top: 40px;
        color: #fff;
        font-size: 15px;
        border-top: 1px solid rgba(255, 255, 255, 0.4);
        text-align: center;
    }

    .copyright a {
        color: #01c7e9;
        transition: all 0.2s ease 0s;
    }

    .copyright a:hover {
        color: #ff3666;
    }
</Style>