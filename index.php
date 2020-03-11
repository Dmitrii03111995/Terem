<!DOCTYPE html>
<html>
<head>
	<title>Форма</title>
	<meta charset="utf-8">
	<!-- Стили для звёздочек -->
	<style>
		.rating-area {
			width: 250px;
		}
		.rating-area:not(:checked) > input {
			display: none;
		}
		.rating-area:not(:checked) > label {
			float: right;
			width: 30px;
			padding: 0;
			cursor: pointer;
			font-size: 30px;
			line-height: 30px;
		}
		.rating-area:not(:checked) > label:before {
			content: '★';
		}
		.rating-area > input:checked ~ label {
			color: blue;
			text-shadow: 1px 1px #c60;
		}
		.rating-area:not(:checked) > label:hover,
		.rating-area:not(:checked) > label:hover ~ label {
			color: gold;
		}	
	</style>
</head>
<body>
 <h2> Оставьте отзыв</h2>
 <p> * - Поля обязательны для заполнение</p>
	<!-- Форма -->
	<form method="POST" action="coment1.php" class="form">
		<!-- Таблица для расположения полей -->
		<table border="0" CELLSPACING="5">
			<tr>
				<td colspan="2">
			<!-- Звёздочки -->
				<p class="rating-area">
					<input type="radio" id="star-5" name="rating" value="5">
					<label for="star-5"></label>	
					<input type="radio" id="star-4" name="rating" value="4">
					<label for="star-4"></label>    
					<input type="radio" id="star-3" name="rating" value="3">
					<label for="star-3"></label>  
					<input type="radio" id="star-2" name="rating" value="2">
					<label for="star-2"></label>    
					<input type="radio" id="star-1" name="rating" value="1">
					<label for="star-1"></label>
				</p>
				</td>
			</tr>
			<tr>
				<td> * Фамилия: </td>
				<td><input type="text" name="fam" required /></td>
			</tr>
			<tr>
				<td> * Имя: </td>
				<td><input type="text" name="name" required /></td>
			</tr>

			<tr>
				<td> * E-mail: </td>
				<td><input type="email" name="email" required /></td>
			</tr>
			<tr>
				<td> * Наименование товара: </td>
				<td><select name="tovar" required>
					<option value="Тент-шатер Greenell Приват XL ">Тент-шатер Greenell Приват XL </option>
					<option value="Палатка Greenell Клер 3 V2">Палатка Greenell Клер 3 V2</option>
					<option value="Туристический спальник кокон до -10 "Алтай V2"">Туристический спальник кокон до -10 "Алтай V2"</option>
				</select></td>
			</tr>
			<tr>
				<td> * Комментарии: </td>
				<td><textarea rows="3" name="comment" required></textarea></td>
			</tr>
			<tr>
				<td> Достоинства: </td>
				<td><textarea rows="2" name="dostoin"></textarea></td>
			</tr>
			<tr>
				<td> Недостатки: </td>
				<td><textarea rows="2" name="nedostat"></textarea></td>
			</tr>
			<tr>
				
				<td colspan="2"><input type="checkbox" name="confirm" required />
				* Не возражаю против публикации моего отзыва на сайте в рекламных целях.</td>
			</tr>
		</table>
		<br>
		
		<br>
		<input name="enter" type="submit" value="Отправить отзыв" />
	</form>
</body>
</html>