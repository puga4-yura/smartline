<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"></link>
	<link href="slider/flexslider.css" rel="stylesheet"></link>
</head>
<body>
<header class="container-fluid">
	<div class="container">
		<div class="row">
          <button class="cmn-toggle-switch cmn-toggle-switch__htx">
            <span></span>
          </button>
		  <div class="container-resp">
			<div id="logo"></div>
			<div class="lang">
			  <select id="style-lang">
				<option>Укр</option>
			    <option>Рус</option>
				<option>Англ</option>
			 </select>
		   </div>
			<div class="tel">
					(044) 000-00-00
					<br><span>Ліния працює 24/7</span>
			</div>
			<div class="street">
					ул. Нижний вал
					<br><span>Комфорт таун</span>
			</div>
			</div>
		</div>
	</div>
</header>
<section class="container-fluid bl2">
	<div class="flexslider">
		<ul class="slides">
			<li>
				<img src="img/img-background.png" />
			</li>
			<li>
				<img src="img/ex1.jpg" />
			</li>
			<li>
				<img src="img/ex2.jpg" />
			</li>
			<li>
				<img src="img/ex3.jpg" />
			</li>
		</ul>
	</div>
	<div class="container">
		<div class="row">
			<div class="text-slider">
				<div class="title">Loren Ipsun</div>
				<div class="text">Lorem ipsum dolor sit amet,<br> consectetuer adipiscing elit, sed </div>
				<button>Кнопка</button>
			</div>
		</div>
	</div>
</section>
<section class="container-fluid bl3">
	<div class="container">
		<div class="row hidden-xs" id="text-slider" >
			<div class="col-sm-3">
				<div class="item">
					<div class="title">Lorem ipsum</div>
					<div class="line"></div>
					<div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi eni</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="item">
					<div class="title">Lorem ipsum</div>
					<div class="line"></div>
					<div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi eni</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="item">
					<div class="title">Lorem ipsum</div>
					<div class="line"></div>
					<div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi eni</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="item">
					<div class="title">Lorem ipsum</div>
					<div class="line"></div>
					<div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi eni</div>
				</div>
			</div>
	    </div>
	    <div class="row ">
	       <div class="flexslider hidden-md hidden-lg hidden-sm" id="flexSlider-text">
		       <ul class="slides" id="slider-element">

		     </ul>
		   </div>
		</div>
	</div>
</section>
<section class="container-fluid bl4">
 <div id="map"></div>
 <div class="container">
	<div class="row">
		<div class="col-sm-6 col-md-offset-5 item">
			<div class="title">Lorem<br>ipsum dolor</div>
			<div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet</div>
			<form action="" method="">
				<input type="name" placeholder="Имя" >
				<input type="tel" placeholder="Телефон" >
				<button type="submit">Кнопка</button>
			</form>
			<div class="text-link">Або зателефонуйте за номером (000) 000-00-00<br> Ми працюємо цілодобово</div>
		</div>
	</div>
</div>
</section>
<footer>
	<div class="container">
		<div class="row">
			<div class="year">© 2017</div>
			<div class="name-compani">SmartLine</div>
		</div>
	</div>
</footer>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="slider/jquery.flexslider.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJWcyxylwaqs4bzFgwQFV9DKghNYabzFA"></script>
<script src="js/common.js"></script>
<script type="text/javascript">

</script>