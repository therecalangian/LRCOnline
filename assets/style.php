
<?php
    header("Content-type: text/css; charset: UTF-8");
?>
@import url('https://fonts.googelapis.com/css?family=Poppins:400,500,700');


<!-- MAIN SECTION HOMEPAGE -->
/*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/
.text-small {
    font-size: 0.9rem !important;
}

.header {
    background-color: #2d3436;
    background-image: linear-gradient(to right,#f7f1e3 0%, #aaa69d 100%);
}


/* Add Events*/
.form-div{
  margin-top: 50px;
  padding-top: 10px;
}

#displayHolder{
  display: block;
  width: 60%;
  margin: 10px auto;
  border-radius: 10%
}

.section-1 {
    background: #f5f5f5;
    
}

.section-2 {
    background: #F1F1F1;
<<<<<<< HEAD
    height: 700px;
=======
>>>>>>> d8a065149338a0c972412ab198225fa67c49ba63
}

.section-3 {
    background: #EAEAEA;
}

.section-4 {
    background: white;
	height: 700px;
}

.section-5 {
background: #f3aa2c; 
  background: -webkit-linear-gradient(45deg, #de9518, #f2cd8d);
  background: -o-linear-gradient(45deg, #de9518, #f2cd8d);
  background: -moz-linear-gradient(45deg, #de9518, #f2cd8d);
  background: linear-gradient(45deg, #de9518, #f2cd8d);
	height: 700px;
  overflow: hidden;
  padding: 72px 55px 65px 55px;
  position:relative;

	
}


.dropdown-menu{
  min-width: 150px !important;
}



<!-- MAIN SECTION HOMEPAGE END-->

<!-- button --->

<!-- FOOTER START -->
h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: "Roboto", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", 
  sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";  
}

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; 
}
  
a, a:hover {
    text-decoration: none !important; 
}

.footer-16371 {
	padding: 7rem 0;
	font-family: "Poppins", sans-serif; 
}
  
.footer-16371 .footer-site-logo {
    text-align: center;
    font-size: 2rem;
    font-weight: 900; 
}

.footer-16371 .footer-site-logo a {
	color: #7b1113; 
}

.footer-16371 .nav-links {
    padding: 0;
    margin: 0; 
}
    
.footer-16371 .nav-links li {
    display: inline-block; 
}

.footer-16371 .nav-links li a {
    padding: 10px;
    color: #000; 
}

.footer-16371 .nav-links li a:hover {
    color: #7b1113; 
}
  
.footer-16371 .social h3 {
    font-weight: bold;
    font-size: 18px;
    color: #000; 
}

.footer-16371 .social ul li {
    display: inline-block; 
}

.footer-16371 .social ul li a {
    display: inline-block;
    padding: 10px; 
}

.footer-16371 .social ul li.in a {
    color: #df588a; 
}

.footer-16371 .social ul li.tw a {
    color: #15b8ff; 
}

.footer-16371 .social ul li.fb a {
    color: #3742d0; 
}

.footer-16371 .social ul li.dr a {
     color: #fa38c1; 
}
   
.footer-16371 .social ul li.pin a {
    color: #dd4d5a; 
}

.footer-16371 .copyright {
    color: #999999; 
}

<!-- FOOTER END -->



<!-- HOW TO SCHEDULE -->

.main-timeline{
    font-family: 'Montserrat', sans-serif;
    padding: 25px 0 0;
}

.main-timeline:before{
    content: ' ';
    border-left: 7px dotted #474050;
    height: 100%;
    width: 7px;
    transform: translateX(-50%);
    position: absolute;
    left: 50%;
    top: 0;
    z-index: 1;
}
.main-timeline .timeline{ margin: 0 0 30px 0; }
.main-timeline .timeline-content{
    color: #999;
    background: #fff;
    font-size: 0;
    text-align: center;
    padding-left: calc(50% + 50px);
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    border-radius: 5px;
    display: block;
    position: relative;
}
.main-timeline .timeline-content:hover{ text-decoration: none; }
.main-timeline .timeline-year{
    color: black;
    background-color:#f3aa2c;
    font-size: 23px;
    font-weight: 600;
    padding: 10px 20px;
    border-radius: 20px;
    transform: translateY(-50%);
    position: absolute;
    left: 20%;
    top: 50%;
}
.main-timeline .timeline-icon{
    color: #fff;
    background: #014421;
    font-size: 50px;
    line-height: 70px;
    width: 70px;
    height: 70px;
    border-radius: 50%;
    transform: translateX(-50%) translateY(-50%);
    position: absolute;
    left: 50%;
    top: 50%;
    z-index: 1;
}
.main-timeline .inner-content{ padding: 20px; }
.main-timeline .title{
    color: black;
    font-size: 20px;
    font-weight: 700;
    text-transform: uppercase;
    margin: 0 0 5px;
}
.main-timeline .description{
    font-size: 14px;
    font-weight: 500;
    line-height: 22px;
    margin: 0;
}
.main-timeline .timeline:nth-child(even) .timeline-content{
    padding-left: 0;
    padding-right: calc(50% + 50px);
}
.main-timeline .timeline:nth-child(even) .timeline-year{
    left: auto;
    right: 20%;
}
.main-timeline .timeline:nth-child(4n+2) .timeline-icon{ background-color: #800000; }
.main-timeline .timeline:nth-child(4n+3) .timeline-icon{ background-color: #014421; }
.main-timeline .timeline:nth-child(4n+4) .timeline-icon{ background-color: #800000; }
@media screen and (max-width:767px){
    .main-timeline .timeline-content,
    .main-timeline .timeline:nth-child(even) .timeline-content{
        padding: 10px 20px 220px;
    }
    .main-timeline .timeline-year,
    .main-timeline .timeline:nth-child(even) .timeline-year{
        transform: translateX(-50%) translateY(0);
        top: calc(100% - 80px);
        left: 50%;
        right: auto;
        z-index: 1;
    }
    .main-timeline .timeline-icon{
        transform: translateX(-50%) translateY(0);
        top: calc(100% - 200px);
        left: 50%;
    }
    .main-timeline .inner-content{
        background-color: #fff;
        padding: 10px 0;
        border-radius: 20px;
        position: relative;
        z-index: 1;
    }
}


<!-- HOW TO SCHEDULE END -->

.serviceBox{
    background: linear-gradient(to right bottom,#9F459D, #39166A);
    font-family: 'Poppins', sans-serif;
    text-align: center;
    padding: 25px 2px 2px;
    border-radius: 30px;
}
.serviceBox .title{
    color: #fff;
    font-size: 20px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin: 0 10px 20px;
}
.serviceBox .service-content{
    background-color: #fff;
    padding: 35px 20px 20px;
    border-radius: 0 0 28px 28px;
    position: relative;
    z-index: 1;
}
.serviceBox .service-content:before,
.serviceBox .service-content:after{
    content: '';
    background: linear-gradient(to right bottom, #9F459D, #39166A);
    height: 15px;
    width: 30px;
    border-radius: 0 0 200px 200px;
    position: absolute;
    left: 50%;
    top: 0;
    transform: translateX(-50%);
}
.serviceBox .service-content:after{
    background: #fff;
    height: 50px;
    width: auto;
    border-radius: 0;
    transform: translateX(0);
    left: -2px;
    right: -2px;
    z-index: -1;
}
.serviceBox .service-icon{
    color: #39166A;
    font-size: 60px;
    line-height: 50px;
    margin: 0 0 15px;
}
.serviceBox .description{
    color: #777;
    font-size: 14px;
    line-height: 24px;
    margin: 0;
}
.serviceBox.blue,
.serviceBox.blue .service-content:before{
    background: linear-gradient(to right bottom, #60C7CE, #0D8FC3);
}
.serviceBox.blue .service-icon{ color: #0D8FC3; }
.serviceBox.green,
.serviceBox.green .service-content:before{
    background: linear-gradient(to right bottom, #A3CD39, #6DBD42);
}
.serviceBox.green .service-icon{ color: #6DBD42; }
.serviceBox.gray,
.serviceBox.gray .service-content:before{
    background: linear-gradient(to right bottom, #38475C, #354A5F);
}
.serviceBox.gray .service-icon{ color: #354A5F; }
@media only screen and (max-width: 990px){
    .serviceBox{ margin: 0 0 30px; }
}







<!-- MISSION AND GOALS CSS END -->
