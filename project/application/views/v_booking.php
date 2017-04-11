<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>MOKLET CINEMA | Register</title>
<link href="<?php echo base_url();?>css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url();?>js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Eshop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<!-- for bootstrap working -->
    <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- cart -->
    <script src="<?php echo base_url();?>js/simpleCart.min.js"> </script>
<!-- cart -->
<link rel="stylesheet" href="<?php echo base_url();?>css/flexslider.css" type="text/css" media="screen" />
</head>
<body>
    <!-- header-section-starts -->
    <div class="header">
        <div class="header-top-strip">
            <div class="container">
                <div class="header-top-left">
                    <ul>
                                            
                    <?php
                    if(isset($this->session->username)){
                        echo '<li><a href="'.base_url().'profile"><span class="glyphicon glyphicon-lock"> </span>Profile</a></li>
                        <li><a href="'.base_url().'login/logout"><span class="glyphicon glyphicon-user"> </span>Logout</a></li>';
                    }else{
                        echo '<li><a href="'.base_url().'login"><span class="glyphicon glyphicon-lock"> </span>Login</a></li>
                        <li><a href="'.base_url().'register"><span class="glyphicon glyphicon-user"> </span>Register</a></li>';
                    }
                    ?>
                                    
                    </ul>
                    
                </div>
                <div class="header-right">

                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- header-section-ends -->
    <div class="inner-banner">
        <div class="container">
            <div class="banner-top inner-head">
                <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                <div class="logo">
                    <h1><a href="<?php echo base_url();?>"><span>MOKLET CINEMA</span></a></h1>
                </div>
        </div>
        <!--/.navbar-header-->
    
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
<li><a href="<?php echo base_url();?>">Home</a></li>
                    <li><a href="<?php echo base_url('movie');?>">Movie</a></li>
                    <li><a href="#">Categori</a></li>
            </ul>
        </div>
        <!--/.navbar-collapse-->
    </nav>
    <!--/.navbar-->
</div>
    </div>
        </div>
        <!-- registration-form -->
<div class="container">
<form class="form-horizontal" method="POST" action="<?=base_url('booking/booking_show/'.$show_detail->id_post);?>">

    <!--start-carrer-->
    <!----- Comman-js-files ---->
        <script>
            $(document).ready(function() {
                $("#tab2").hide();
                $("#tab3").hide();
                $("#tab4").hide();
                $(".tabs-menu a").click(function(event){
                    event.preventDefault();
                    var tab=$(this).attr("href");
                    $(".tab-grid").not(tab).css("display","none");
                    $(tab).fadeIn("slow");
                });
            });
        </script>

                
            <div class="col-md-7">
            <div class="payment-right">
                <h3>Ticket Summary</h3>

                <p><span>Ticket Info:</span>
                <table class='table table-striped table-bordered table-advance table-hover'>
                    <tr>
                    <th width='30%'>Ticket Detail</th>
                    <th width='15%'>Quantity</th>
                    <th width='27.5%'>Price</th>
                    <th width='27.5%'>Total</th>
                    </tr>
                <?php $subtotal= 0;

                  
                    $id = 'jumlah' ;
                      $qty = $this->input->post($id);
                        $total = $qty * $show_detail->harga;
                        $subtotal += $total;
                        if($qty != 0)
                        {
                            echo  "<tr><td >" . $show_detail->judul . "</td><td >" . $qty . "</td>
                                        <td>IDR. " . $show_detail->harga. "</td>
                                        <td>IDR. " . $total . "</td></tr></table>";}?>
                                      
                                        
                                        <input type="hidden" name="id_movie<?php echo $show_detail->id_post; ?>" value="<?php echo $show_detail->id_post; ?>" >
                                        <input type="hidden" name="qtysubticket<?php echo $show_detail->id_post; ?>" value="<?php echo $qty; ?>" >
                                        <input type="hidden" name="subtotal<?php echo $show_detail->id_post; ?>" value="<?php echo $total; ?>" >
                                        
                        
                <!-- <p>+ (Internet handling fees : Rs. 42.00 (incl. of Service Tax))</p> -->
                <h4>Grand Total : IDR. <?php echo $subtotal;?></h4>
                    <div id="tab1" class="tab-grid">
                                
                        <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
                        <input type="submit" class="go-to-pay" value="Booking">
                        </div>

                        </div>

            </div>
            <!-- <div class="ticket-note">

            </div> -->
            </div>

            <div class="clearfix"></div>
        </div>
        </form>
            <br><br>
            <div class="clearfix"></div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- registration-form -->

        <div class="news-letter">
            <div class="container">
                <div class="join">
                    <h6>JOIN OUR MAILING LIST</h6>
                    <div class="sub-left-right">
                        <form>
                            <input type="text" value="Enter Your Email Here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email Here';}" />
                            <input type="submit" value="SUBSCRIBE" />
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="footer">
        <div class="container">
         <div class="footer_top">
            <div class="span_of_4">
                <div class="col-md-3 span1_of_4">
                    <h4>Shop</h4>
                    <ul class="f_nav">
                        <li><a href="#">new arrivals</a></li>
                        <li><a href="#">men</a></li>
                        <li><a href="#">women</a></li>
                        <li><a href="#">accessories</a></li>
                        <li><a href="#">kids</a></li>
                        <li><a href="#">brands</a></li>
                        <li><a href="#">trends</a></li>
                        <li><a href="#">sale</a></li>
                        <li><a href="#">style videos</a></li>
                    </ul>   
                </div>
                <div class="col-md-3 span1_of_4">
                    <h4>help</h4>
                    <ul class="f_nav">
                        <li><a href="#">frequently asked  questions</a></li>
                        <li><a href="#">men</a></li>
                        <li><a href="#">women</a></li>
                        <li><a href="#">accessories</a></li>
                        <li><a href="#">kids</a></li>
                        <li><a href="#">brands</a></li>
                    </ul>   
                </div>
                <div class="col-md-3 span1_of_4">
                    <h4>account</h4>
                    <ul class="f_nav">
                        <li><a href="account.html">login</a></li>
                        <li><a href="register.html">create an account</a></li>
                        <li><a href="#">create wishlist</a></li>
                        <li><a href="checkout.html">my shopping bag</a></li>
                        <li><a href="#">brands</a></li>
                        <li><a href="#">create wishlist</a></li>
                    </ul>               
                </div>
                <div class="col-md-3 span1_of_4">
                    <h4>popular</h4>
                    <ul class="f_nav">
                        <li><a href="#">new arrivals</a></li>
                        <li><a href="#">men</a></li>
                        <li><a href="#">women</a></li>
                        <li><a href="#">accessories</a></li>
                        <li><a href="#">kids</a></li>
                        <li><a href="#">brands</a></li>
                        <li><a href="#">trends</a></li>
                        <li><a href="#">sale</a></li>
                        <li><a href="#">style videos</a></li>
                        <li><a href="#">login</a></li>
                        <li><a href="#">brands</a></li>
                    </ul>           
                </div>
                <div class="clearfix"></div>
                </div>
          </div>
          <div class="cards text-center">
                <img src="<?php echo base_url();?>images/cards.jpg" alt="" />
          </div>
          <div class="copyright text-center">
                <p>© 2015 Eshop. All Rights Reserved | Design by   <a href="http://w3layouts.com">  W3layouts</a></p>
          </div>
        </div>
        </div>
</body>
</html>