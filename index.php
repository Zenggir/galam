<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="png" href="images/icon/logo.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comaptible" content="IE=edge">
	<title>Test-Galam</title>
	<meta name="desciption" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="header.css">
	
	<script type="text/javascript" src="script.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script>
		$(window).on('scroll', function(){
  			if($(window).scrollTop()){
  			  $('nav').addClass('black');
 			 }else {
 		   $('nav').removeClass('black');
 		 }
		})
	</script>
</head>
<body>
<!-- Navigation Bar -->
	
<?php include "header.php"?>

<!-- Some Popular Subjects -->
	<div class="title">
		<span>Сайттағы танымал тақырыптар</span>
	</div>
	<br><br>
	<div class="course">
		<center><div class="cbox">
		<div class="det"><a href="subjects/prezent.php"><img src="images/courses/book.png">Презентациялар</a></div>
		<!-- <div class="det"><a href="subjects/gate.html"><img src="images/courses/d1.png"></a></div> -->
		<div class="det"><a href="ertegiler/ertegiler.php"><img src="images/courses/paper.png">bizdin kitap</a></div>
		<div class="det"><a href="https://quizizz.com/join?gc=21903343"><img src="images/courses/d1.png">Quiz</a></div>
		</div></center>
	</div>

	
<!-- ABOUT -->
	<div class="diffSection" id="about_section">
		<center><p style="font-size: 50px; padding: 100px">Біз туралы</p></center>
		<div class="about-content">
				<div class="side-image">
					<img class="sideImage" src="images/extra/e3.jpg">
				</div>
				<div class="side-text">
					<h2>Сіз біз туралы не ойлайсыз?</h2>
					<p>
						Білім беру – оқуды жеңілдету немесе білім, дағдылар, құндылықтар, сенімдер мен әдеттерді меңгеру процесі. Тәрбие әдістеріне оқыту, оқыту, әңгімелеу, талқылау және бағытталған зерттеу жатады.
						Білім беру веб-сайтында оқуды жақсарту және сыныптағы оқытуды толықтыру құралы ретінде әрекет ететін ойындар, бейнелер немесе тақырыпқа қатысты ресурстар бар веб-сайттар болуы мүмкін. Бұл веб-сайттар, әсіресе қазіргі жаста, оқу процесін студент үшін қызықты және тартымды етуге көмектеседі.
						HTML(HyperText Markup Language), CSS(Cascading Style Sheet), JavaScript қолдану арқылы біз оқуды жеңілірек және қызықты етіп жасай аламыз.</p>
				</div>
		</div>
	</div>

	<marquee style="background: linear-gradient(to right, #bd7aff, #bd7aff); margin-top: 50px;" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="20"><div class="marqu">«Білім – болашақтың төлқұжаты, өйткені ертеңгі күн оған бүгін дайындалғандардың еншісінде». «Биіктігіңізді сіздің бейімділігіңіз емес, көзқарасыңыз анықтайды». «Егер сіз білім қымбат деп ойласаңыз, надандыққа тырысыңыз». «Білім алатын жалғыз адам - ​​үйренуді және өзгеруді үйренген адам».</div></marquee>

<!-- PORTFOLIO -->
	
		<center><p style="font-size: 50px; padding: 100px; padding-bottom: 40px;"></p></center>
	
	
	


<!-- TEAM -->
<div class="diffSection" id="team_section">
	<center><a href="https://www.instagram.com/galam.18k/"><p style="font-size: 50px; padding-top: 100px; padding-bottom: 60px;">GALAM TEAM</p></a></center>
	<div class="totalcard">
		<div class="card">
		<center><img src="images/creator/adikkkkkk.PNG"></center>
		<center><div class="card-title">Абдоллаев Әділет</div>
		<div id="detail">
		<p>« Студентке бір күн сабақ беруге болады, бірақ оның қызығушылығын ояту арқылы үйренуге үйрете алсаңыз, ол өмір бойы оқу процесін жалғастырады» </p>
		<div class="duty"></div>
		<a href="https://www.instagram.com/_kaaev/" target="_blank"><button class="btn-roshan">Жазылу +</button></a>
		</div>
		</center>
		</div>
		<div class="card">
		<center><img src="images/creator/olzhas.PNG"></center>
		<center><div class="card-title">Мырзабек Олжас</div>
		<div id="detail">
			<p>"Оқудың сұлулығы - оны сенен ешкім тартып ала алмайтынында."</p>
		
		<div class="duty"></div>
		<a href="https://www.instagram.com/01zhas__/" target="_blank"><button class="btn-akhil">Жазылу +</button></a>
		</div>
		</center>
		</div>
		<div class="card">
		<center><img src="images/creator/ABOOOO.PNG"></center>
		<center>
		<div class="card-title">Ержігіт Абылай</div>
		<div id="detail">
		<p>"Білім - шелек толтыру емес, от жағу".</p>
		<div class="duty"></div>
		<a href="https://www.instagram.com/abylai.khann_/" target="_blank"><button class="btn-akhil">Жазылу +</button></a>
		</div>
		</center>
		</div>
		<div class="card">
		<center><img src="images/creator/zek.PNG"></center>
		<center>
		<div class="card-title">Серік Зеңгір</div>
		<div id="detail">
			<p>« Нағыз білім өз оқушыларымыздан жақсылық пен жақсылықты алудан тұруы керек. Адамзат кітабынан басқа қандай жақсы кітаптар болуы мүмкін «</p>
		<div class="duty"></div>
		<a href="https://www.instagram.com/zenggir/" target="_blank"><button class="btn-akhil">Жазылу +</button></a>
		</div>
		</center>
		</div>
		<div class="card">
		<center><img src="images/creator/bekk.PNG"></center>
		<center>
		<div class="card-title">Зейлбек Бек</div>
		<div id="detail">
		<p>"Оқу - барлық жерде иесіне еретін қазына."</p>
		<div class="duty"></div>
		<a href="https://www.instagram.com/_bek_zeil/" target="_blank"><button class="btn-karthik">Жазылу +</button></a>
		</div>
		</center>
		</div>
		</div>
	
</div>



<!-- SERVICES -->
	<div class="service-swipe">
		<div class="diffSection" id="services_section">
		<center><p style="font-size: 50px; padding: 100px; padding-bottom: 40px; color: #fff;">Қызыметтер</p></center>
		</div>
		<a href="subjects/courses.php"><div class="s-card"><img src="images/icon/computer-courses.png"><p>Тегін онлайн курстар</p></div></a>
		<a href="https://drive.google.com/drive/folders/1e7syFPi1AzZYgCwpl8U-qkxSAU0R7NBp?usp=share_link"><div class="s-card"><img src="images/icon/brainbooster.png"><p>Конкурстық емтихандарға арналған тұжырымдамаларды құру</p></div></a>
		<a href="https://docs.google.com/presentation/d/1GBbSyjDcsBkzk2zPHn2vDQtgQs7XA_PB/edit?usp=sharing&ouid=117572331890913197652&rtpof=true&sd=true"><div class="s-card"><img src="images/icon/online-tutorials.png"><p>Көп Қолданылатын Инструменттер</p></div></a>
		<a href="subjects/quiz.php"><div class="s-card"><img src="images/icon/papers.jpg"><p>Әртүрлі конкурстық емтихандардың үлгілері</p></div></a>
		<a href="#"><div class="s-card"><img src="images/icon/p3.png"><p>Есеп</p></div></a>
		<a href="https://www.tiktok.com/@kle0_0?_t=8bqousQWrDh&_r=1"><div class="s-card"><img src="images/icon/discussion.png"><p>Лайфхактармен өмір(Tik-Tok)</p></div></a>
		<a href="subjects/quiz.php"><div class="s-card"><img src="images/icon/q1.png"><p>IQ деңгейін арттыруға арналған күнделікті миға арналған сұрақтар</p></div></a>
		<a href="https://anchor.fm/serik-zengir "><div class="s-card"><img src="images/icon/help.png"><p>Подкасттар</p></div></a>
	</div>

<!-- Reviews by Students -->
<div id="makeitfull">
	<a href="#review_section"><img src="images/icon/makeitfull.png"></a>
</div>
<div class="review">
	<div class="diffSection" id="review_section">
		<center><p style="font-size: 40px; padding: 100px; padding-bottom: 40px; color: #2E3D49;">Қолданушылар біз туралы не айтады?</p></center>
	</div>
	<div class="rev-container">
		<div class="rev-card">
			<div class="identity">
				<img src="images/creator/rusik.jpg"><p>Рысдәулет Бақытжанұлы</p>
				<h6>Тестілеу</h6>
				<div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Қарау:</p>
				<p id="content">
				Мен «GALAM» сайтында тестілеуді үйрендім және өте риза болдым. Материал түсінікті және қолжетімді түрде берілді, ал тапсырмалар қызықты болды және тақырыпты жақсы түсінуге көмектесті. Мұғалімдерге кәсіби шеберлігі мен шыдамдылығы үшін мың алғыс!
				</p>
			</div>
		</div>
		<div class="rev-card">
			<div class="identity">
				<img src="images/creator/humanNotExist2.jpg"><p>Clayton Clair</p>
				<h6>C/C++</h6>
				<div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					When I was watching "Dear Zindagi", I could relate Sharukh Khan to Arnav Bhaiya. The way Sharukh Khan was giving life lessons to Alia Bhatt, in the same way Arnav Bhaiya will give coding life lessons which will guide you throughout your code life...
				</p>
			</div>
		</div>
		<div class="rev-card">
			<div class="identity">
				<img src="images/creator/humanNotExist3.jpg"><p>Devyn Sethi</p>
				<h6>JEE</h6>
				<div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					LearnEd was an amazing experience for me. I belong to electronics department and had a little experience in coding but I think it has helped me think things through in a much more analytical manner. Coding is important no matter which branch you are in. It gives you a better understanding about how to approach a problem...
				</p>
			</div>
		</div>
		<div class="rev-card">
			<div class="identity">
				<img src="images/creator/humanNotExist4.jpg"><p>Rylee Phillips</p>
				<h6>Python</h6>
				<div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					This was my first complete course at coding blocks. I attended the Python course in Winter 2020 and loved it which made me join the full course. Shubham bhaiya and Ayush Bhaiya(TA) have good knowledge about the field and were very helpful in making us understand the concepts. I would certainly recommend this to anyone...
				</p>
			</div>
		</div>
	</div>
</div>


<!-- Sliding Information -->

<!-- FOOTER -->
	<footer>
		<div class="footer-container">
			<div class="left-col">
				<img src="images/icon/logo.png" style="width: 100px;">
				<div class="logo" id="logo"></div>
				<div class="social-media">
					<a href="#"><img src="images/icon\fb.png"></a>
					<a href="#"><img src="images/icon\insta.png"></a>
					<a href="#"><img src="images/icon\tt.png"></a>
					<a href="#"><img src="images/icon\ytube.png"></a>
					<a href="#"><img src="images/icon\linkedin.png"></a>
				</div><br><br>
				<p class="rights-text">GALAM.18k © 2022</p>
				<br><p><img src="images/icon/location.png">  L.N.Gumilyov Eurasian National University.<br></p><br>
				<p><img src="images/icon/phone.png"> +7(747)135 89 97<br><img src="images/icon/mail.png">&nbsp; testileu@galam.com</p>
			</div>
			<div class="right-col">
				<h1 style="color: #fff">Біздің ақпараттар</h1>
				<div class="border"></div><br>
				<p>Жаңалықтар мен жаңартуларды алу үшін электрондық поштаңызды енгізіңіз.</p>
				<form class="newsletter-form">
					<input class="txtb" type="email" placeholder="Enter Your Email">
					<input class="btn" type="submit" value="Submit">
				</form>
			</div>
		</div>
	</footer>

</body>
</html>