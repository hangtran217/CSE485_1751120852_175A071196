<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title>Trường Đại Học Nguyễn Tất Thành </title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<!-- Add the new slick-theme.css if you want the default styling -->
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<script type="text/javascript" src="bootstrap/js/script.js"></script>
</head>
<body>
	<div class="home">
		<?php include('header.php') ?>
			
		<?php include('slideshow.php') ?>
			
		<?php include('news.php') ?>

		<?php include('footer.php') ?>		
				
		<?php include('chatbox.php') ?>		
			

</body>
<script type="text/javascript" src="jquery/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script type="text/javascript">

	$( document ).ready(function() {
    	$('#showCollapse').click(function(){
    		// $(".collapse-handmade").css("display",'block');
    		$(".collapse-handmade").slideToggle("fast");
    	});
    	$('#showCollapse2').click(function(){
    		// $(".collapse-handmade").css("display",'block');
    		$(".collapse-handmade").slideToggle("fast");
    	});
    	 

    	 $('.content_chatbox').hide();
    	 $('.chatbox').click(function(){
    	 	$('.content_chatbox').show();
    	 	$(this).hide();
    	 });
    	 $('#close').click(function(){
    	 	$('.content_chatbox').hide();
    	 	$('.chatbox').show();
    	 });

    	count = 0;
  		wordsArray = ["0902.298.300 - 0906.298.300","0912.298.300  - 0914.298.300"];
    	 setInterval(function () {
		    count++;
		    $("#hotline-1").slideUp(600, function () {
		    	// odd % 2 == 1
		      $(this).text(wordsArray[count % wordsArray.length]).slideDown(200);
		      console.log('wordsArray '+count % wordsArray.length+' count '+count+' length '+wordsArray.length);
		    });
		  }, 3000);

    	 setInterval(function () {
		    count++;
		    $("#hotline-2").slideUp(600, function () {
		    	// odd % 2 == 1
		      $(this).text(wordsArray[count % wordsArray.length]).slideDown(200);
		      console.log('wordsArray '+count % wordsArray.length+' count '+count+' length '+wordsArray.length);
		    });
		  }, 3000);

    	 	$('.content-responsive').hide();
	    	$('#showMenuRes').click(function(){
	    		$('.content-responsive').slideToggle();
    		});
	    	$(".center").slick({
				        dots: true,
				        infinite: true,
				        centerMode: true,
				        slidesToShow: 3,
				        slidesToScroll: 3,
				        dots:false,

				 responsive: [
			        {
			            breakpoint: 900,
			            settings: {
			                slidesToShow: 1,
			                slidesToScroll: 1,
			            }
			        }]

		      });
	    	// responsive slide 2

			
    		
	});
</script>
</html>