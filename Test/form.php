<?php include_once 'db.php'; ?>

<html>
<head>
<title>Отзывы о продукте</title>
<link rel="stylesheet" href="style.css">
<meta content="text/html; charset=utf-8">
</head>
<body>

 <?php $result = mysqli_query($link, "SELECT * FROM `opros`") ?> 
 <?php while($res = mysqli_fetch_assoc($result)) { ?>

<div class="reviews">
  
<div class="review_text">
<b>Имя:</b> <?= $res['name'] ?> | 
<b>Дата:</b> <?= date("d.m.y | <b>Время:</b> H.i", strtotime($res['date'])) ?> | 
<b>Оценка:</b> <?= $res['rating'] ?>/5
<hr>
<br>
<?= $res['message'] ?> <br>
</div>
</div>

<?php } ?>

<div class="content">
<h2>Отзыв о продукте</h2>
<h3>Все поля обязательны для заполнения</h3>
<br>
<div class="send"> 
<form method="post" action="index.php" id="review">   
<h3>Оцените продукт</h3>
<div class="rating">
<input type="radio" class="rating" id="star5" name="rating" value="5" /><label for="star5"></label>
<input type="radio" class="rating" id="star4" name="rating" value="4" /><label for="star4"></label>
<input type="radio" class="rating" id="star3" name="rating" value="3" /><label for="star3"></label>
<input type="radio" class="rating" id="star2" name="rating" value="2" /><label for="star2"></label>
<input type="radio" class="rating" id="star1" name="rating" value="1" /><label for="star1"></label>
</div>
<br>
<br>
<br>
<input type="text" name="name" placeholder="Ваше имя" required>
<input type="email" name="email" placeholder="Ваш E-mail" required>
<input type="date" name="date" hidden="true">
<textarea name="message" placeholder="Сообщение" required></textarea>
<input type="submit" name="add" value="Оставить отзыв">
</form>
</div>
</div>
</body>
</html>