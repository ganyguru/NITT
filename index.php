<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="script/jquery.js" ></script>
	<script type="text/javascript" src="script/bootstrap.min.js" ></script>
	<link rel="stylesheet" href="css/responsivemobilemenu.css" type="text/css">
	<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="script/responsivemobilemenu.js"></script>
</head>
<body>
	<div class ="wrapper">
		
		
		<img class='img-responsive' src="img/slider1.png" style="background:#2d2d2f;display: block;max-width: 100%;width: 100%;height: auto;" />		<center>
		<div class="rmm minimal" data-menu-style="minimal" style="z-index:999;max-width: 100%;background:2d2d2f;color:#000;">
        <ul class="rmm-main-list" style="display: block;background:2d2d2f;color:#000;">
            <li><a href="http://responsivemobilemenu.com/demo/#home">Home</a></li>
            <li><a href="http://responsivemobilemenu.com/demo/#about-me">About me</a></li>
            <li><a href="http://responsivemobilemenu.com/demo/#gallery">Gallery</a></li>
            <li><a href="http://responsivemobilemenu.com/demo/#blog">Blog</a></li>
            <li><a href="http://responsivemobilemenu.com/demo/#links">Links</a></li>
            <li><a href="http://responsivemobilemenu.com/demo/#sitemap">Sitemap</a></li> 
       </ul>
</div>
			<div class="mcon">
				<div class="bar">
				<div class="vision">
					<center>Vision</center>
					<p>To provide valuable resources for industry and society through excellence in technical education and research.</p>
					
					</div>
					<div class="mission">
					<center>Mission<center>
					<hr>
					<p>
					
					To offer state-of-the-art undergraduate, postgraduate and doctoral programmes.</p><hr><p>
					To generate new knowledge by engaging in cutting-edge research.</p><hr><p>
					To undertake collaborative projects with academia and industries.</p><hr><p>
					To develop human intellectual capability to its fullest potential.</p>
				</div>
				</div>

				<div class="bbar">
				<div class="story">
				<p class="seading ease">Read Top News ></p><hr>
				<div class="bar">
					<div class="news bborder">
					<p class="gbar">Founder's Desk</p>
<p class="ibar">We have extensive experience designing interiors for restaurants and offices. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dolor sit amet.</p>
					</div>
				</div>
				<div class="bar">
					<div class="news bborder">
					<p class="gbar">Founder's Desk</p>
<p class="ibar">We have extensive experience designing interiors for restaurants and offices. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dolor sit amet.</p>
					</div>
				</div><br>
				<div class="bar">
					<div class="news bborder">
					<p class="gbar">Founder's Desk</p>
<p class="ibar">We have extensive experience designing interiors for restaurants and offices. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dolor sit amet.</p>
					</div>
				</div>
				<div class="bar">
					<div class="news bborder">
					<p class="gbar">Founder's Desk</p>
<p class="ibar">We have extensive experience designing interiors for restaurants and offices. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dolor sit amet.</p>
					</div>
				</div>
				</div>
				</div>

			</div>
			<div class="scon">
			<div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                  <nav class="pull dept">
                    Sample content <br>
                    for<br>
                    the Department
                    
                  </nav>

                  <nav class="pull evnt">
                    Sample content <br>
                    for<br>
                    the Events
                    
                  </nav>

                  <nav class="pull notic">
                    Sample content <br>
                    for<br>
                    the Notice
                    
                  </nav>

                  <nav class="pull wel">
                    Sample content <br>
                    for<br>
                    the Welcome
                    
                  </nav>
                </div>
             </div>
			<div class="row">
			<h2>Quicklinks</h2>
			</div>
			<div class="row">

				<div class="col-md-3">
				<div class="icon ico1 ease">
				<i class="fa fa-university ico"></i><br>
				<p>Departments</p>
				</div>	
				</div>

				<div class="col-md-3">
				<div class="icon ease ico2">
				<i class="fa fa-file-text-o ico"></i><br>
				<p>Notices and Downloads</p>
				</div>	

				</div>

				<div class="col-md-3">
				<div class="icon ease ico3">
				
				<i class="fa fa-calendar ico"></i><br>
				<p>Events</p>
				</div>	
				</div>
				
				<div class="col-md-3">
				<div class="icon ease ico4">
				
				<i class="fa fa-user ico"></i><br>
				<p>Welcome</p>
				</div>	
				</div>

				

			
			<div class="col-md-3">
				<div class="icon">
				</div>	

			</div>
			</div>
			
	</div>
	<div class="pfooter">
		

		<div class="fcontent">
		</div>
	</div>
<script type="text/javascript">
	$(window).load(function() {
	var temp=0;
	$('.ico1').click(function() {
		if(temp==0)
		{
		$('.dept').slideToggle();
		temp=1;
		}
		else
		{
			$('.pull').hide();
			$('.dept').slideToggle();
		}
	});

	$('.ico3').click(function() {
		if(temp==0)
		{
		$('.evnt').slideToggle();
		temp=1;
		}
		else
		{
			$('.pull').hide();
			$('.evnt').slideToggle();
		}
	});

	$('.ico2').click(function() {
		if(temp==0)
		{
		$('.notic').slideToggle();
		temp=1;
		}
		else
		{
			$('.pull').hide();
			$('.notic').slideToggle();
		}
	});

	$('.ico4').click(function() {
		if(temp==0)
		{
		$('.wel').slideToggle();
		temp=1;
		}
		else
		{
			$('.pull').hide();
			$('.wel').slideToggle();
		}
	});

	
	$('.clos').click(function() {
		$('.pull').slideToggle();
		temp=0;
	});
});
</script>
</body>
</html>