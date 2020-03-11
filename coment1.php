<?php 
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn, "olimp");

if(isset($_POST['enter'])){
	$rating = $_POST['rating'];
	$fam = $_POST['fam']; 
	$name = $_POST['name']; 
	$email = $_POST['email']; 
	$tovar = $_POST['tovar']; 
	$comment = $_POST['comment']; 
	$dostoin = $_POST['dostoin']; 
	$nedostat = $_POST['nedostat']; 
	$date = date( "Y.m.d \ H:i:s" );
$query = "INSERT INTO olimp (Date,Reiting,Familiya,Imya, Email, Tovar, Koment, Plys, Minys) VALUES ('$date','$rating','$fam','$name','$email','$tovar','$comment','$dostoin','$nedostat')";
$result = mysqli_query($conn, $query);
if ($result== 'true') 
{echo 'Ваши данные успешно добавлены. <br/>', $date,'<br/>';
echo 'Рейтинг: ', $rating, '<br/>Фамилия: ',$fam,'<br/> Имя: ',$name,'<br/>E-mail: ',$email,'<br/>Товар: ',$tovar,
'<br/>Коментарий: ',$comment,'<br/>Достоинства: ',$dostoin,'<br/>Недостатки: ',$nedostat;
}
else{echo "Ваши данные не добавлены";}
}
?>
