<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Access to a Better Tomorrow</title>
    <meta name="keywords" content="Access to a Better Tomorrow" />
    <meta name="description" content="a-bt.org - Access to a Better Tomorrow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/font-awesome.min.css">
       <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/icons.css">
    <!-- LayerSlider styles -->
    <link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css">
    <link rel="stylesheet" href="css/main.css">
    
    <link rel="stylesheet" href="css/bule.css" id="coloroption">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/yummi-loader.css">
    
	<?php
	if($_REQUEST['msg']=="success")
	{
		$msg="Thank you for contacting US";
	}
	else
	{
		$msg="Error occurred. Please Try Again";
	}
?>
	
  
    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
  <!-- jQuery with jQuery Easing, and jQuery Transit JS -->
    <script src="layerslider/jQuery/jquery-easing-1.3.js" type="text/javascript"></script>
    <script src="layerslider/jQuery/jquery-transit-modified.js" type="text/javascript"></script>
     
    <!-- LayerSlider from Kreatura Media with Transitions -->
    <script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
    <script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/x.x.x/jquery.min.js"></script>
	
	
<script>
    // Semicolon (;) to ensure closing of earlier scripting
    // Encapsulation
    // $ is assigned to jQuery
    ;(function($) {

         // DOM Ready
        $(function() {

            // Binding a click event
            // From jQuery v.1.7.0 use .on() instead of .bind()
            $('#my-button').bind('click', function(e) {

                // Prevents the default action to be triggered. 
                e.preventDefault();

                // Triggering bPopup when click event is fired
                $('#element_to_pop_up').bPopup();

            });

        });

    })(jQuery);

/*================================================================================
 * @name: bPopup - if you can't get it up, use bPopup
 * @author: (c)Bjoern Klinggaard (twitter@bklinggaard)
 * @demo: http://dinbror.dk/bpopup
 * @version: 0.9.4.min
 ================================================================================*/
 (function(b){b.fn.bPopup=function(z,F){function K(){a.contentContainer=b(a.contentContainer||c);switch(a.content){case "iframe":var h=b('<iframe class="b-iframe" '+a.iframeAttr+"></iframe>");h.appendTo(a.contentContainer);r=c.outerHeight(!0);s=c.outerWidth(!0);A();h.attr("src",a.loadUrl);k(a.loadCallback);break;case "image":A();b("<img />").load(function(){k(a.loadCallback);G(b(this))}).attr("src",a.loadUrl).hide().appendTo(a.contentContainer);break;default:A(),b('<div class="b-ajax-wrapper"></div>').load(a.loadUrl,a.loadData,function(){k(a.loadCallback);G(b(this))}).hide().appendTo(a.contentContainer)}}function A(){a.modal&&b('<div class="b-modal '+e+'"></div>').css({backgroundColor:a.modalColor,position:"fixed",top:0,right:0,bottom:0,left:0,opacity:0,zIndex:a.zIndex+t}).appendTo(a.appendTo).fadeTo(a.speed,a.opacity);D();c.data("bPopup",a).data("id",e).css({left:"slideIn"==a.transition||"slideBack"==a.transition?"slideBack"==a.transition?g.scrollLeft()+u:-1*(v+s):l(!(!a.follow[0]&&m||f)),position:a.positionStyle||"absolute",top:"slideDown"==a.transition||"slideUp"==a.transition?"slideUp"==a.transition?g.scrollTop()+w:x+-1*r:n(!(!a.follow[1]&&p||f)),"z-index":a.zIndex+t+1}).each(function(){a.appending&&b(this).appendTo(a.appendTo)});H(!0)}function q(){a.modal&&b(".b-modal."+c.data("id")).fadeTo(a.speed,0,function(){b(this).remove()});a.scrollBar||b("html").css("overflow","auto");b(".b-modal."+e).unbind("click");g.unbind("keydown."+e);d.unbind("."+e).data("bPopup",0<d.data("bPopup")-1?d.data("bPopup")-1:null);c.undelegate(".bClose, ."+a.closeClass,"click."+e,q).data("bPopup",null);H();return!1}function G(h){var b=h.width(),e=h.height(),d={};a.contentContainer.css({height:e,width:b});e>=c.height()&&(d.height=c.height());b>=c.width()&&(d.width=c.width());r=c.outerHeight(!0);s=c.outerWidth(!0);D();a.contentContainer.css({height:"auto",width:"auto"});d.left=l(!(!a.follow[0]&&m||f));d.top=n(!(!a.follow[1]&&p||f));c.animate(d,250,function(){h.show();B=E()})}function L(){d.data("bPopup",t);c.delegate(".bClose, ."+a.closeClass,"click."+e,q);a.modalClose&&b(".b-modal."+e).css("cursor","pointer").bind("click",q);M||!a.follow[0]&&!a.follow[1]||d.bind("scroll."+e,function(){B&&c.dequeue().animate({left:a.follow[0]?l(!f):"auto",top:a.follow[1]?n(!f):"auto"},a.followSpeed,a.followEasing)}).bind("resize."+e,function(){w=y.innerHeight||d.height();u=y.innerWidth||d.width();if(B=E())clearTimeout(I),I=setTimeout(function(){D();c.dequeue().each(function(){f?b(this).css({left:v,top:x}):b(this).animate({left:a.follow[0]?l(!0):"auto",top:a.follow[1]?n(!0):"auto"},a.followSpeed,a.followEasing)})},50)});a.escClose&&g.bind("keydown."+e,function(a){27==a.which&&q()})}function H(b){function d(e){c.css({display:"block",opacity:1}).animate(e,a.speed,a.easing,function(){J(b)})}switch(b?a.transition:a.transitionClose||a.transition){case "slideIn":d({left:b?l(!(!a.follow[0]&&m||f)):g.scrollLeft()-(s||c.outerWidth(!0))-C});break;case "slideBack":d({left:b?l(!(!a.follow[0]&&m||f)):g.scrollLeft()+u+C});break;case "slideDown":d({top:b?n(!(!a.follow[1]&&p||f)):g.scrollTop()-(r||c.outerHeight(!0))-C});break;case "slideUp":d({top:b?n(!(!a.follow[1]&&p||f)):g.scrollTop()+w+C});break;default:c.stop().fadeTo(a.speed,b?1:0,function(){J(b)})}}function J(b){b?(L(),k(F),a.autoClose&&setTimeout(q,a.autoClose)):(c.hide(),k(a.onClose),a.loadUrl&&(a.contentContainer.empty(),c.css({height:"auto",width:"auto"})))}function l(a){return a?v+g.scrollLeft():v}function n(a){return a?x+g.scrollTop():x}function k(a){b.isFunction(a)&&a.call(c)}function D(){x=p?a.position[1]:Math.max(0,(w-c.outerHeight(!0))/2-a.amsl);v=m?a.position[0]:(u-c.outerWidth(!0))/2;B=E()}function E(){return w>c.outerHeight(!0)&&u>c.outerWidth(!0)}b.isFunction(z)&&(F=z,z=null);var a=b.extend({},b.fn.bPopup.defaults,z);a.scrollBar||b("html").css("overflow","hidden");var c=this,g=b(document),y=window,d=b(y),w=y.innerHeight||d.height(),u=y.innerWidth||d.width(),M=/OS 6(_\d)+/i.test(navigator.userAgent),C=200,t=0,e,B,p,m,f,x,v,r,s,I;c.close=function(){a=this.data("bPopup");e="__b-popup"+d.data("bPopup")+"__";q()};return c.each(function(){b(this).data("bPopup")||(k(a.onOpen),t=(d.data("bPopup")||0)+1,e="__b-popup"+t+"__",p="auto"!==a.position[1],m="auto"!==a.position[0],f="fixed"===a.positionStyle,r=c.outerHeight(!0),s=c.outerWidth(!0),a.loadUrl?K():A())})};b.fn.bPopup.defaults={amsl:50,appending:!0,appendTo:"body",autoClose:!1,closeClass:"b-close",content:"ajax",contentContainer:!1,easing:"swing",escClose:!0,follow:[!0,!0],followEasing:"swing",followSpeed:500,iframeAttr:'scrolling="no" frameborder="0"',loadCallback:!1,loadData:!1,loadUrl:!1,modal:!0,modalClose:!0,modalColor:"#000",onClose:!1,onOpen:!1,opacity:0.7,position:["auto","auto"],positionStyle:"absolute",scrollBar:!0,speed:250,transition:"fadeIn",transitionClose:!1,zIndex:9997}})(jQuery);


</script>
    <!--[if IE 7]>
      <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
    <![endif]-->

  </head>
  <body class="off">
        <div id="mukam-layout">
    <!-- Top Section -->
     
    <!-- Header -->
    <header id="mukam-header" class="mukam-header mukam-header-large header-5 fixbottom fadein scaleInv anim_1">
      <div class="top-section-container">
      <div class="top-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6">
          </div>
          <div class="col-sm-6 col-md-6">
            <div class="social">
             
                <a href="https://www.facebook.com/pages/Access-To-A-Better-Tomorrow/7574851076461966"><div class="social-box"><i class="mukam-face"></i></div></a>  
            </div>
          </div>
        </div>
      </div>
    </div>
         
    </div>    
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <!-- Main Menu -->
          <nav class="navbar navbar-default header-5" role="navigation">
          <div class="navbar-header">
            <a id="my-button" href="#"><img class="logo" src="img/logo.png" alt="mukam"></a><!-- Button that triggers the popup -->

<!-- Element to pop up -->
<div id="element_to_pop_up">
    <a class="b-close">Close<a/>
    <img class="logo" src="img/logo.png" alt="Access to a Better Tomorrow"></br></br></br></br></br></br>
	<p style="font-size:18px; font-weight: bold">Taking it's inspiration from new accessibility symbol designed by Sara Hendren from Accessible Icon Project http://www.accessibleicon.org/</br>
the letter ‘a’ in Access has been rendered to promote the active and in-motion perspective of life, and this aligns with our organizations ideals</br> of self-
empowerment among persons with disability. </br>
The design was provided pro-bono by www.verynice.co and special thanks to Bora Shin and especially Aarti Vashisht for her creativity.</p>
</div>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="shopping">
            
            <ul class="ashu"><a href="resources.html"><li><img src="icon_1.png" ><p>Healthcare</p></li></a><a href="resources.html"><li><img src="icon_2.png" ><p>Housing</p></li> </a><a href="resources.html"><li><img src="icon_3.png" ><p>Education</p></li></a><a href="resources.html"><li><img src="icon_4.png" ><p>Transportation</p></li></a><a href="resources.html"><li><img src="icon_5.png" ><p>Employment</p></li></a><a href="resources.html"><li><img src="icon_6.png" ><p>Recreation/Sport</p></li></a><a href="resources.html"><li><img src="icon_7.png" ><p>Communication</p></li></a></ul></div>
           


          <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
             <ul class="nav navbar-nav">
              <li class="dropdown"><a href="index.html">HOME</a>
              </li>
             
              <li><a href="about.html">ABOUT US</a>
              </li>
              <li><a href="resources.html">RESOURCES</a>
              </li>
              <li><a href="events.html">EVENTS</a>
              </li>
			  <li ><a href="news.html">NEWS</a>
             
              </li>
			  <li><a href="donate.html">DONATE</a>
             
              </li>
             <li><a href="contactus.html" class="active">CONTACT US</a>
             
              </li>
            </ul>
           
          </div><!-- /.navbar-collapse -->
        </nav>
        </div>
      </div>
    </div>
</header>
    <section class="mukam-waypoint" data-animate-down="mukam-header-small header-1" data-animate-up="mukam-header-large header-1">

  <div class="caption-out fadein scaleInv anim_2">
    <div class="container">
      <div class="row">
        <div class="col-md-9 caption">
          <h3 style="padding-bottom:15px;">Contact Us</h3>
        </p>
        </div>
      
      </div>
    </div>
    </div>
		
	  
	  <div class="bg-color grey fadein scaleInv anim_3">
		<div class="container">
			<div class="row">
				<div class="col-md-8 contact">
				<h1>Contact us</h1>
    <h2 class="title"><?php echo $msg;?></h2>
				</div>
				<div class="col-md-4 contact-info">
				<h3>Contact <span>Us</span></h3>
					<div class="contact-widget">
					
					<i class="mukam-telephone pull-left widget-icon"></i>Office :<p>(770) 534-9050</p>

					<i class="mukam-envelope pull-left widget-icon"></i><p><a href="mailto:justinp@a-bt.org">justinp@a-bt.org</a></p>
					</div>
					<div class="social-widget">
					<a href="https://www.facebook.com/pages/Access-To-A-Better-Tomorrow/7574851076461966"><div class="socialbox"><i class="mukam-face"></i></div></a>

					</div>
				</div>
			</div>
		</div>
	  </div>
	<!-- Our Clients -->
    <div class="bg-color grey">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="ourclients">
              <h2>2014 Sponsors of the  <span>13th ADA Memorial 5k</span></h2>
              <div class="ourclients-text">
              
              </div>
          <div class="clientslider">
                                <ul class="slides">
                        <li>
                          <img src="img/s6.png" alt="Sponsors"/>
                        </li>
                        <li>
                          <img src="img/s4.png" alt="Sponsors"/>
                        </li> 
                        <li>
                          <img src="img/s1.png" alt="Sponsors"/>
                        </li>
                        <li>
                          <img src="img/s2.png" alt="Sponsors"/>
                        </li>
                        <li>
                          <img src="img/s3.png" alt="Sponsors"/>
                        </li>
                        <li>
                          <img src="img/s5.png" alt="Sponsors"/>
                        </li>
                        <li>
                          <img src="img/s7.png" alt="Sponsors"/>
                        </li>
                        <li>
                          <img src="img/s8.png" alt="Sponsors"/>
                        </li>
                        <li>
                          <img src="img/s9.png" alt="Sponsors"/>
                        </li>
                        <li>
                          <img src="img/s10.png" alt="Sponsors"/>
                        </li>
                        <li>
                          <img src="img/s11.png" alt="Sponsors"/>
                        </li>
                        <li>
                          <img src="img/s12.png" alt="Sponsors"/>
                        </li>
                        <li>
                          <img src="img/s13.png" alt="Sponsors"/>
                        </li>
                        <li>
                          <img src="img/s14.png" alt="Sponsors"/>
                        </li>
                        <li>
                          <img src="img/s15.png" alt="Sponsors"/>
                        </li>
                        <li>
                          <img src="img/s16.png" alt="Sponsors"/>
                        </li>
                        
                        <!-- items mirrored twice, total of 12 -->
                      </ul>              
              </div>  
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- Bottom Section -->

</section>
   <footer>
      <div class="container">
        <div class="row">
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
 <hr> <p>Contributions made<strong>
				<a href="https://www.gagivesday.org/c/GGD/Search?p=1&amp;keyword=access%20to%20a%20better%20tomorrow">online</a> 
				and through through PayPal are tax-deductible donation.</strong><br>
  <input type="hidden" name="cmd" value="_s-xclick">
  <input type="hidden" name="hosted_button_id" value="D35KFW4PFPL7S">
  <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
  </p>
<hr>
</form>

         


        </div>
      </div>
      <div class="bg-color black fixed-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="copyright-section"><p>Copyright © 2014 Access to a Better Tomorrow. All rights reserved.</p></div>
            </div>
<div class="col-sm-6 col-md-6" style="padding-top:18px;>
            <div class="social">
             
                <a href="https://www.facebook.com/pages/Access-To-A-Better-Tomorrow/7574851076461966"><div class="social-box"><i class="mukam-face"></i></div></a>  
            </div>
          </div>
  
			
			
          </div>
        </div>
      </div>
    </footer>
</div>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="js/jquery.queryloader2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/twitter-bootstrap-hover-dropdown.min.js"></script>
    <script src="js/jquery.carouFredSel-6.2.1.js"></script>
    <script src="js/jquery.touchSwipe.min.js"></script> 
    <script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Masonry -->
    <script src="js/masonry.pkgd.min.js"></script> 
    <script src="js/SmoothScroll.js"></script>   
    <!-- Main.js should be below all javascript --> 
    <script src="js/main.js"></script>
    <script src="js/styleswitcher.js"></script>


  </body>
</html>