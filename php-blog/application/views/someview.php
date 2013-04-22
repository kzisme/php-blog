<!DOCTYPE html>
<html>
	<head>
		<title>TinyMVC Default View - Default Controller</title>
		<style>
		
			@font-face {
			    font-family: 'Sansation Light';
			    src: url('system/fonts/sansation/sansation_light-webfont.eot');
			    src: url('system/fonts/sansation/sansation_light-webfont.eot?#iefix') format('embedded-opentype'),
			         url('system/fonts/sansation/sansation_light-webfont.woff') format('woff'),
			         url('system/fonts/sansation/sansation_light-webfont.ttf') format('truetype'),
			         url('system/fonts/sansation/sansation_light-webfont.svg#sansation_lightregular') format('svg');
			    font-weight: normal;
			    font-style: normal;
			}
			
			@font-face {
			    font-family: 'Sansation Bold';
			    src: url('system/fonts/sansation/sansation_bold-webfont.eot');
			    src: url('system/fonts/sansation/sansation_bold-webfont.eot?#iefix') format('embedded-opentype'),
			         url('system/fonts/sansation/sansation_bold-webfont.woff') format('woff'),
			         url('system/fonts/sansation/sansation_bold-webfont.ttf') format('truetype'),
			         url('system/fonts/sansation/sansation_bold-webfont.svg#sansationbold') format('svg');
			    font-weight: normal;
			    font-style: normal;
			}
		
			body{
				margin: 0;
				padding: 0;
				
				background: #191919;
				
				font-family: 'Sansation Light', sans-serif;
			}
			
			.wrapper{
				width: 85%;
				margin: 50px auto;
				border: 1px solid #666;
				
				background: #CCC;
				
				-moz-box-shadow: 0 0 10px #666 inset;
				-webkit-box-shadow: 0 0 10px #666 inset;
				box-shadow: 0 0 10px #666 inset;
				
				text-shadow: 1px 1px white;
			}
			
			h1,h2,h3,h4,h5,h6,
			p,div,blockquote{
				margin: 0;
				padding: 0;
				
				font-weight: normal;
			}
			
			h1,h2,h3,h4,h5,h6{ font-weight: 400; font-family: 'Sansation Bold', sans-serif;}
			
			::-webkit-selection{ color: white; background: #51895b; opacity:.8; text-shadow: 0 0 0;}
			::-moz-selection{ color: white; background: #51895b; opacity:.8; text-shadow: 0 0 0;}
			::selection{ color: white; background: #51895b; opacity:.8; text-shadow: 0 0 0;}
			
			a{
				text-decoration: none;
				position:relative;
			}
			
			a:hover{
				text-decoration: underline;
			}
			
			a:hover::after{
				content: attr(title);
				position:absolute;
				top: -120%;
				left: 15px;
				padding: 3px;
				
				color: #333;
				text-shadow: 0 1px white;
				
				-moz-box-shadow: 1px 1px 8px #666;
				-webkit-box-shadow: 1px 1px 8px #666;
				box-shadow: 1px 1px 8px #666;
				
				background: #EEE;
			}
			
			header{
				padding: 5px;
				padding-bottom: 10px;
				border-bottom: 1px solid #999;
			}
			
			.content{
				padding: 5px;
			}
			
			.content p{
				margin: 6px 0;
			}
			
			footer{
				border-top: 1px solid #999;
				
				padding: 5px;
			}
			
			footer p{
				text-align: right;
			}
			
		</style>
		<script>
			window.onload = function(){
				
			}
		</script>
	</head>
	<body>
		<div class='wrapper'>
			<header>
				<h1>TinyMVC<sup>&reg;</sup></h1>
				<h2>A Lightweight MVC Framework</h2>
			</header>
			<div class='content'>
				<p>This view is being loaded dynamically from the core controller.</p>
				<p>TinyMVC is a Model - View - Controller framework loosely based on the design of CodeIgniter.</p>
				<p>For more information, please look <a href='https://github.com/kzisme/php-blog/' target='_blank' title='TinyMVC'>here</a>.</p>
			</div>
			<footer>
				<p>TinyMVC &copy; 2013 - <a href='https://github.com/kzisme/' target='_blank' title='Github'>kzisme</a></p>
			</footer>
		</div>
	</body>
</html>

