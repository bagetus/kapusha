<?php
if(!empty($_SESSION[$myusername])){
header("location:main_login.php");
}
?>

<div align="center">

<table border="0" cellpadding="5" class="table_top">
<tr>
<td><a href="http://kapusha.pe.hu/" target="_blank">Перейти на главную страницу сайта в новой вкладке</a></td>

<td style="text-align: right;"><a href="manage.php">Перейти на главную страницу административной панели</a></td>

</tr>
</table>

</div>

<div align="center">

<style>

.table_top
{
    text-align: left;
    font-family: Helvetica;
    border-color: white;
    font-size: 14px;
    width: 1454px;
    border-collapse: collapse;
    margin: 20px 0px 20px 0px;
}

.table_title
{
    border-collapse: collapse;
    text-align:center;
    color: white;
    font-family: Helvetica;
    border-color: black;
    background: #9b9b9b;
}

.table_orders
{
    border-collapse: collapse;
    text-align:center;
    font-family: Helvetica;
    border-color: black;
    border-collapse: collapse;
    text-align: center;
    margin-top: -1px;
    hyphens: auto;
}

td
{
    border-color: black;
}

</style>

<table border="1" cellpadding="5" class="table_title">
<tr>

<td style="width: 30px;">id</td>

<td style="width: 150px;">Название</td>

<td style="width: 80px;">Цена шт.</td>

<td style="width: 80px;">Сумма</td>

<td style="width: 50px;">Кол-во</td>

<td style="width: 200px;">Имя Фамилия</td>

<td style="width: 220px;">Адрес</td>

<td style="width: 170px;">Телефон</td>

<td style="width: 190px;">E-mail</td>

<td style="width: 82px;">Дата</td>

<td style="width: 80px;">Время</td>

</tr>

</table>


<?php

    mysql_connect("localhost", "root", "") or die (mysql_error ());
	// Выбрать БД
	mysql_select_db("kapusha") or die(mysql_error());

	// SQL-запрос
	$strSQL = "SELECT * FROM orders";

	// Выполнить запрос (набор данных $rs содержит результат)
	$rs = mysql_query($strSQL);
	
	// Цикл по recordset $rs
	// Каждый ряд становится массивом ($row) с помощью функции mysql_fetch_array
	while($row = mysql_fetch_array($rs)) {
?>

<table border="1" style="" cellpadding="5" class="table_orders">

<tr style="">

<td style="width: 30px;"><?php echo $row['id'];?></td>

<td style="width: 150px;"><?php echo $row['product'];?></td>

<td style="width: 80px;"><?php echo $row['price']." ₴";?></td>

<?php $sum=$row['price']*$row['qty'];?>

<td style="width: 80px;"><?php echo $sum . " ₴";?></td>

<td style="width: 50px;"><?php echo $row['qty'];?></td>

<td style="width: 200px;"><?php echo $row['name']." ".$row['sname'];?></td>

<td style="width: 220px;"><?php echo $row['address'];?></td>

<td style="width: 170px;"><?php echo $row['phone'];?></td>

<td style="width: 190px;"><?php echo $row['email'];?></td>

<td style="width: 82px;"><?php echo $row['date'];?></td>

<td style="width: 80px;"><?php echo $row['time'];?></td>

</tr>

</table>



<?php

	  }

	// Закрыть соединение с БД
	mysql_close();
?>

</div>