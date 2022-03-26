<?php
?>

<html>
<head>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #fff;
  color: black;
  text-decoration: none;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

#top-link-block.affix-top {
    position: absolute; /* allows it to "slide" up into view */
    bottom: -82px;
    left: 10px;
}
#top-link-block.affix {
    position: fixed; /* keeps it on the bottom once in view */
    bottom: 18px;
    left: 10px;
}
</style>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<link href="bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/png" href="images/clg.png"/>
<title>हमारे बारे में - नेशनल होम्योपैथिक मेडिकल कॉलेज में आपका स्वागत है</title>
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script>
if ( ($(window).height() + 100) < $(document).height() ) {
    $('#top-link-block').removeClass('hidden').affix({
        // how far to scroll down before link "slides" into view
        offset: {top:100}
    });
}
</script>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</head>
<body>
<div data-aos="fade" data-aos-delay="200">
<div class="container-fluid" style="border:3px solid Dodgerblue;">
<div class="row"></div></div>
<div class="container-fluid">
<div class="row">
<div class="col-sm-2">
	<div data-aos="zoom-in-up" data-aos-delay="200">
	<a href="index.php"><img class="img-responsive" src="images/clg.png"/></a></div></div>
	<div class="col-sm-10">
	<p align="center" style="font-size:60px;font-family:Impact, Charcoal, sans-serif;">नेशनल होम्योपैथिक मेडिकल कॉलेज</p> 
	<p align="center" style="font-size:40px;font-family:Arial Black,Gadget, sans-serif;">लखनऊ, उत्तर प्रदेश, भारत-226001</p>
	<p class="nav navbar-nav navbar-right" style="margin-right:5px;"><a href="abouthi.php">Hindi |</a><a href="about.php"> English</p></a>
	</div>
	</div>
	</div>
			
	<!-- Nav start -->		  
	<div class="topnav" id="myTopnav">
	<div class="container-fluid" style="background-color:Dodgerblue;font-family:verdana">
    <a href="index.php"><span class="glyphicon glyphicon-glyphicon glyphicon-home"></span> मुख्य पृष्ठ</a>
    <a href="about.php">हमारे बारे में</a>
	<a href="doctor.php">चिकित्सक</a>
	<a href="patient.php">मरीज</a>
	<a href="login.php">लॉग इन करें</a>
	<a href="contact.php">हमसे संपर्क करें</a>
	<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
	</a>
	</div>
	</div>
	</div>
	<!-- Nav end -->
	
	<!-- About start -->
	<div class="container-fluid" style="margin-top:10px;">
	<div class="row">
	<div data-aos="fade-up" data-aos-delay="200">
	<div class="col-sm-12">
	<h1 align="center" style="color:DodgerBlue;font-size:40px;font-family:Arial cooper;"><b><u>About Us</u></b></h1>
	<p style="margin:10px;font-size:35px"><b style="font-family:Arial cooper;">National Homeopathic Medical College - AN INTRODUCTION</b></p>
	</div>
		
	<div class="col-sm-12" style="border:3px solid DodgerBlue;font-size:16px;">
	<p align="justify" style="margin-left:15px;margin-right:15px;margin-top:15px;font-family:tahoma;">लखनऊ के पहले होम्योपैथिक मेडिकल कॉलेज के बीज 1912 में डॉ। जी.एन. ओहेडदार जो 1920 तक अस्तित्व में थे जब डॉ। बी.एस. लखनऊ के टंडन ने 1921 में राष्ट्रीय होम्योपैथिक मेडिकल कॉलेज और अस्पताल की स्थापना कर एक महत्वपूर्ण कार्य किया।
	बाद में इसे सोसायटी पंजीकरण अधिनियम 21 1860 के तहत पंजीकृत किया गया। इस कॉलेज के पहले प्राचार्य डॉ। जे.सी. दास थे, जो डॉ। जे.टी. के प्रत्यक्ष शिष्य थे। शिकागो, अमेरिका का कैंट। पहला कोर्स एन.एच.एम.सी. दो साल H.M.B था जिसे बाद में 1940 से 1949 तक तीन साल के लिए अपग्रेड किया गया था। वर्ष 1950 में,
	चार साल का डिप्लोमा कोर्स B.M.S. को शुरू किया गया था जो बाद में 1954 में होम्योपैथिक मेडिसिन बोर्ड से संबद्ध कर दिया गया था। यह 1968 में उत्तर प्रदेश सरकार द्वारा प्रांतीय जेड था। पहले पांच साल का डिग्री कोर्स जिसे जी.एच.एम.एस. 1958 में शुरू किया गया था और कॉलेज आगरा विश्वविद्यालय आगरा से संबद्ध था।
	N.H.M.C. 1961 में होम्योपैथी का एशिया का पहला डिग्री कॉलेज बना।
		
	<p align="justify" style="margin-left:15px;margin-right:15px;font-family:tahoma;">1966 में आगरा विश्वविद्यालय आगरा द्वारा न्यूनतम मानकों की गैर-अनुरूपता के कारण कॉलेज को फिर से अस्वीकृत कर दिया गया और फिर से बी.एम.एस. डिप्लोमा कोर्स लागू किया गया था। 
	यह वर्ष 1971 में था जब कॉलेज कानपुर विश्वविद्यालय कानपुर से संबद्ध था और जी.एच.एम.एस.
	डिग्री कोर्स फिर से शुरू किया गया जो 1980 तक जारी रहा। एकरूपता देने के लिए, पहले B.H.M.S. 1981 में पांच और साढ़े पांच साल का डिग्री कोर्स शुरू किया गया था, जिसके लिए C.P.M.T. उस समय कॉलेज फिर से आगरा विश्वविद्यालय आगरा से संबद्ध था जिसे बाद में भीम राव अंबेडकर विश्वविद्यालय आगरा नाम दिया गया।
	इस कॉलेज में प्रवेश की क्षमता 50 है। कॉलेज कैंट रोड कैसरबाग, लखनऊ में स्थित उसी पुराने किराए के भवन में चलता रहा।</p>
	
	<p align="justify" style="margin-left:15px;margin-right:15px;font-family:tahoma;">यह ऐतिहासिक घटना थी जब सरकार उत्तर प्रदेश में रु। गोमती नगर में पाँच एकड़ जमीन खरीदने के लिए 1611.31 लाख और नए भवन निर्माण के लिए एन.एच.एम.सी.
	नए परिसर का उद्घाटन 27 फरवरी 2000 को भारत के तत्कालीन प्रधान मंत्री श्री अटल बिहारी बाजपेयी द्वारा किया गया था। वर्तमान परिसर में पाँच मंजिला शैक्षणिक सह प्रशासनिक ब्लॉक, दो मंजिला ओपीडी ब्लॉक, चार मंजिला गर्ल्स हॉस्टल और लड़कों का हॉस्टल है। शिक्षण और गैर-शिक्षण कर्मचारियों के लिए तिमाही।
	एक अन्य मील का पत्थर उपलब्धि है हमारे मास्टर डॉ। हैनिमैन की 12 फीट की कांस्य प्रतिमा, जिसमें 10 फीट की उंचाई कुल 22 फीट है, जो मुख्य राष्ट्रीय राजकीय होम्योपैथिक मेडिकल कॉलेज के पास हैनिमैन चौराहा के नाम से है।</p>
		
	<p align="justify" style="margin-left:15px;margin-right:15px;font-family:tahoma;">इस संस्था के बीज 18 अगस्त, 1961 को अपने समय के प्रसिद्ध होम्योपैथिक चिकित्सक डॉ। बी.एस. टंडन द्वारा हैनिमैनियन होम्योपैथिक मेडिकल कॉलेज एंड हॉस्पिटल नाम से बोए गए थे।
	पहले बैच में केवल आठ छात्र थे और कक्षाएं ली जा रही थीं
	लालबाग में उनके निवास पर आयोजित किया गया क्योंकि कॉलेज का अपना भवन नहीं था।
	धीरे-धीरे छात्रों की सूजन संख्या के साथ कॉलेज को लखनऊ के नादान महल रोड स्थित एम। डी। शुक्ला इंटर कॉलेज में स्थानांतरित कर दिया गया।</p>
			
	<p align="justify" style="margin-left:15px;margin-right:15px;font-family:tahoma;">वर्तमान में होम्योपैथिक मेडिसिन बोर्ड, यू.पी. और स्टेट ड्रग लेबोरेटरी के कार्यालय को राज्य एमएचएमसी के पुराने परिसर में 2,
	नबी उल्लाह रोड, लखनऊ।</p>
	</p>
	</div>
	</div>
	</div>
	</div>
	<!-- About end -->
		
	<!-- Footer start -->
	<div class="container-fluid">
	<div class="row">
	<div data-aos="zoom-in-up" data-aos-delay="200">
	<div class="col-sm-12" style="margin-top:10px;background-color:Dodgerblue;">
	<div class="col-sm-6" style="margin-top:10px;height:210px;background-color:Dodgerblue;">
	<p class="lead" style="margin-top:10px;color:white;"><b style="font-family:Arial cooper;">Copyright © 2019 NHMC | All Rights Reserved</b></p>      
	<b style="color:white;">Terms &amp; Conditions:-</b> <i style="color:white;font-family:verdana;">इस वेबसाइट तक पहुँचने से, आप इसके लिए बाध्य होने के लिए सहमत हैं
	उपयोग की शर्तें और नियम, सभी लागू कानून और नियम। यदि आप इनमें से किसी भी नियम से सहमत नहीं हैं, तो आपको इस साइट का उपयोग करने या उस तक पहुंचने से प्रतिबंधित कर दिया जाता है।</i>
	</div>
	
	<div class="col-sm-6" style="margin-top:10px;height:210px;background-color:Dodgerblue;">
	<p class="lead" style="color:white;margin-top:10px;"><b style="margin-left:24px;font-family:Arial cooper;">Connect With Us:</b>&nbsp;&nbsp;
	&nbsp; &nbsp;<a href="https://www.facebook.com" title="Facebook" target="_blank" style="color:white;"><i class="fa fa-facebook fa-2f"></i></a>
	&nbsp; &nbsp;<a href="https://www.twitter.com" title="Twitter" target="_blank" style="color:white;"><i class="fa fa-twitter fa-2f"></i></a>
	&nbsp; &nbsp;<a href="https://www.instagram.com" title="Instagram" target="_blank" style="color:white;"><i class="fa fa-instagram fa-2f"></i></a>
	&nbsp; &nbsp;<a href="https://www.youtube.com" title="Youtube" target="_blank" style="color:white;"><i class="fa fa-youtube fa-2f"></i></a>
	&nbsp; &nbsp;<a href="https://www.linkedin.com" title="Linkedin" target="_blank" style="color:white;"><i class="fa fa-linkedin fa-2f"></i></a></p>				
	<ul style="list-style-type:none;">
	<li style="color:white;"><span class="glyphicon glyphicon-map-marker"></span> National Homeopathic Medical College & Hospital 
	1-Viraj Khand, Gomti Nagar, Lucknow.</li></br>
	<li style="color:white;"><span class="glyphicon glyphicon-phone-alt"></span> 09450208571</li></br>
	<li style="color:white;"><span class="glyphicon glyphicon-envelope"></span> www.edufever.com/nhmc-lucknow</li>
	</ul>	
	<span id="top-link-block">
    <a href="#top" style="margin-left:280px;" class="well well-sm" onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
    <i class="glyphicon glyphicon-chevron-up"></i></a>
	</span>
	</div>		
	</div>
	</div>
	</div>
	</div>
<!-- Footer end -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>