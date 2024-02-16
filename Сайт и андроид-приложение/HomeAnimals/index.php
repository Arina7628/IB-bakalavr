<?php
require "authorization/db.php" ;?>
<!DOSTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>HomeAnimals</title>
<link rel="stylesheet" href="css/main.css">
</head>

<header>
	<div class="container">
	<div class="heading clearfix">
		<img src="img/logo.jpg" alt="HomeAnimals" class="logo">
	<nav>
		<ul class="menu">
			<li>
				<a href="#">Главная</a>
			</li>
			<li>
				<a href="#">Животные</a>
			</li>
			<li>
				<a href="#">Описание</a>
			</li>
			<li>
				<a href="#">Контакты</a>
			</li>
			<li>
				<a href="#">&nbsp &nbsp &nbsp <img src="img/profil.png" alt="Profil"></a><br>
				<?php if(isset($_SESSION['logged_user'])):?>
				<a href="kabinet/kabinet.php">Личный кабинет</a><br>
				<a href="Logout.php">Выйти</a><br>
				<?php else: ?>
				<a href="authorization/login.php">Авторизация</a><br>
				<a href="authorization/signup.php">Регистрация</a><br>
				<?php endif;?>
			</li>
			</ul>
		</nav>
			<div class="titles">
			<div class="titles__first">
			Любимые домашние животные
			</div>
			
	</div>
	<a class="button" href="#">Tell Me More</a>
	</div>
	</header>
	
	
	<section id="ob">
	<div class="container">
		<div class="title">
		<p>
			Приветствую тебя дорогой друг, чтобы узнать информацию о животных,
			нужно всего лишь прокрутить ниже
				<img src="img/strelka.gif" alt="Услуга">
		</p>
		<p>
		</p>
	</div>
	
	
<section id="about">
	<div class="container">
		<div class="title">
		<h2>
			Описание
		</h2>
		<p>
		Еще несколько тысяч лет назад древний человек делал первые шаги по 
		приручению диких животных, чтобы использовать их в своих целях. А с
		егодня уже сложно представить нашу жизнь без домашних питомцев,
		словно они всегда были верными спутниками людей. Изначально человек
		стремился получить что-то ценное от животных, обеспечивая их кровом 
		и пищей. Однако, по данным антропологии, в древности они также 
		служили источником эстетического удовольствия.
		Домашними называются животные, которых приручил человек, 
		ухаживая за ними и предоставляя им пропитание. Все одомашненные
		виды и выведенные на их основе искусственно породы использовались 
		с целью получения материальной выгоды или удовольствия. 
		Они становились хорошими компаньонами для человека, скрашивая его 
		жизнь. Процесс размножения животных легко проходит даже вне природных 
		условий. Контролируя его, люди создают породы с нужными свойствами.
		</p>
	</div>
	
	</div>
</section>

<section>
	<div class="container">
	<div class="title">
		<h2>
			Домашние животные
		</h2>
		<p>
		Чтобы понять, есть ли у животных душа, надо самому иметь душу.<br> © Альберт Швейцер
		</p>
	</div>
		<div class="services clearfix">
			
			<div class="services__item">
				<img src ="img/dog1.jpg" alt="Собака">
				<h3><a href="https://nashzeleniymir.ru/%D1%81%D0%BE%D0%B1%D0%B0%D0%BA%D0%B0/">Собака</a><img src="img/like.png" onclick='this.src="img/like_active.png"' /></h3>
				<p>
				 Собака – самое первое животное, которое смог приручить человек.
				</p>
			</div>
			
			<div class="services__item">
				<img src="img/cat1.jpg" alt="Кошка">
				<h3><a href="https://nashzeleniymir.ru/%D0%BA%D0%BE%D1%88%D0%BA%D0%B0/">Кошка</a><img src="img/like.png" onclick='this.src="img/like_active.png"' /></h3></a></h3>
				<p>
				Кошка — это великий акробат.
				</p>
			</div>
			
			<div class="services__item">
				<img src="img/rabbit1.jpg" alt="Кролик">
				<h3><a href="https://nashzeleniymir.ru/%D0%BA%D1%80%D0%BE%D0%BB%D0%B8%D0%BA/">Кролик</a><img src="img/like.png" onclick='this.src="img/like_active.png"' /></h3></a></h3>
				<p>
				Кролики – несомненно очень милые существа.
				</p>
			</div>
		</div>
		<div class="services clearfix">
				<div class="services__item">
				<img src="img/humster1.jpg" alt="Хомяк">
				<h3><a href="https://nashzeleniymir.ru/%D1%85%D0%BE%D0%BC%D1%8F%D0%BA/">Хомяк</a><img src="img/like.png" onclick='this.src="img/like_active.png"' /></h3></a></h3>
				<p>
				 Хомяк – это млекопитающее животное.
				</p>
			</div>
			<div class="services__item">
				<img src="img/ylitka.jpg" alt="Улитка">
				<h3><a href="https://nashzeleniymir.ru/%D1%83%D0%BB%D0%B8%D1%82%D0%BA%D0%B0/">Улитка</a><img src="img/like.png" onclick='this.src="img/like_active.png"' /></h3></a></h3>
				<p>
				Улитка – это насекомое?
				</p>
			</div>
			
			<div class="services__item">
				<img src="img/lemyr.jpg" alt="Лемур">
				<h3><a href="https://nashzeleniymir.ru/%D0%BB%D0%B5%D0%BC%D1%83%D1%80/">Лемур</a><img src="img/like.png" onclick='this.src="img/like_active.png"' /></h3></a></h3>
				<p>
				Лемур – удивительное существо живой природы.
				</p>
			</div>
		</div>
		<div class="services clearfix">
				<div class="services__item">
				<img src="img/mouse.jpg" alt="Мышь">
				<h3><a href="https://nashzeleniymir.ru/%D0%BC%D1%8B%D1%88%D1%8C/">Мышь</a><img src="img/like.png" onclick='this.src="img/like_active.png"' /></h3></a></h3>
				<p>
				 Мыши – маленькие зверьки.
				</p>
			</div>
			<div class="services__item">
				<img src="img/ovca.jpg" alt="Овца">
				<h3><a href="https://nashzeleniymir.ru/%D0%BE%D0%B2%D1%86%D0%B0/">Овца</a><img src="img/like.png" onclick='this.src="img/like_active.png"' /></h3></a></h3>
				<p>
				Овца - стадное животное.
				</p>
			</div>
			
			<div class="services__item">
				<img src="img/horek.jpg" alt="Хорек">
				<h3><a href="https://nashzeleniymir.ru/%D1%85%D0%BE%D1%80%D0%B5%D0%BA/">Хорек</a><img src="img/like.png" onclick='this.src="img/like_active.png"' /></h3></a></h3>
				<p>
				Хорек – забавный зверек или бесстрашный хищник?
				</p>
			</div>
		</div>
		<div class="services clearfix">
				<div class="services__item">
				<img src="img/cow.jpg" alt="Корова">
				<h3><a href="https://nashzeleniymir.ru/%D0%BA%D0%BE%D1%80%D0%BE%D0%B2%D0%B0/">Корова</a><img src="img/like.png" onclick='this.src="img/like_active.png"' /></h3></a></h3>
				<p>
				Корова - священное животное.
				</p>
			</div>
			<div class="services__item">
				<img src="img/baran.jpg" alt="Баран">
				<h3><a href="https://nashzeleniymir.ru/%D0%B1%D0%B0%D1%80%D0%B0%D0%BD/">Баран</a><img src="img/like.png" onclick='this.src="img/like_active.png"' /></h3></a></h3>
				<p>
				Упрямый как баран.
				</p>
			</div>
			
			<div class="services__item">
				<img src="img/pig.jpg" alt="Свинья">
				<h3><a href="https://nashzeleniymir.ru/%D1%81%D0%B2%D0%B8%D0%BD%D1%8C%D1%8F/">Свинья</a><img src="img/like.png" onclick='this.src="img/like_active.png"' /></h3></a></h3>
				<p>
				Свиньи - нечистоплотные существа.
				</p>
			</div>
		</div>
				<div class="services clearfix">
				<div class="services__item">
				<img src="img/fenek.jpg" alt="Фенек">
				<h3><a href="https://nashzeleniymir.ru/%D0%BB%D0%B8%D1%81%D0%B8%D1%86%D0%B0-%D1%84%D0%B5%D0%BD%D0%B5%D0%BA/">Фенек</a><img src="img/like.png" onclick='this.src="img/like_active.png"' /></h3></a></h3>
				<p>
				 Фенек - самое удивительное животное из рода лисиц.
				</p>
			</div>
			<div class="services__item">
				<img src="img/shinshilla.jpg" alt="Шиншилла">
				<h3><a href="https://nashzeleniymir.ru/%D1%88%D0%B8%D0%BD%D1%88%D0%B8%D0%BB%D0%BB%D0%B0/">Шиншилла</a><img src="img/like.png" onclick='this.src="img/like_active.png"' /></h3></a></h3>
				<p>
				Шиншилла - серый великан.
				</p>
			</div>
			
			<div class="services__item">
				<img src="img/horse.jpg" alt="Лошадь">
				<h3><a href="https://nashzeleniymir.ru/%D0%BB%D0%BE%D1%88%D0%B0%D0%B4%D1%8C/">Лошадь</a><img src="img/like.png" onclick='this.src="img/like_active.png"' /></h3></a></h3>
				<p>
				 Животное из семейства лошадиных.
				</p>
			</div>
		</div>
		
		
</section>
</div>
<section id = "footer">
	<div class="container">
			<a href="#">Вернуться на главную</a>

			<br><a href="#">Персональные данные</a>
			<div>Информация о животных взята с сайта </div>
			<a  href="https://nashzeleniymir.ru/"></a>
			<div><a href="https://nashzeleniymir.ru/">https://nashzeleniymir.ru</a><div>

			<h3>© Все права защищены</h3>
	</div>

</section>
</footer>
</body>
</html>