<?
if($_SESSION['cart'] && !isset($_POST['order']))
{
?>


<form action="index.php?view=order" method="post" id="cart-form">

<table align="center" cellspacing="10" cellpadding="0" border="0" class="table_cart" width="600" style="text-align: center;">
	<tr>
		<td>Товар</td>
		<td>Цена</td>
		<td>Количество</td>
		<td>Всего</td>
	</tr>
	<?php 
		foreach ($_SESSION ['cart'] as $id => $qty):  
        $product = get_product($id); 
		?>
		<tr align="left">
			<td align="center"><?php echo $product['title'];?></td>
			<td align="center">₴<?php echo $product ['price'];?></td>
            <td align = "center"><?php echo $qty;?></td>
			<td align="center">₴<?php echo $product ['price'] * $qty;?></td>
		</tr>
        <?php 
		endforeach;   
        ?>

</table>
	<p align="center" style="font-size: 20; font-weight: bold; color: #51381c">Общая сумма заказа: <span style="color: #9f6a91;">₴<?php echo $_SESSION['total_price'];?></span></p>
    
    <table align="center" border="0" cellspacing="10" cellpadding="0" width="400px">
    <tr>
    
    <td>
    Ваше имя: <br /><br />
    Ваше фамилия: <br /><br />
    Ваше адрес: <br /><br />
    Ваш телефон: <br /><br />
    Ваше e-mail: <br /><br />
    </td>
    
    <td style="text-align: right;">
    <input required="true" type="text" name="name" size="30" maxlength="20"/><br /><br />
    <input required="true" type="text" name="sname" size="30" maxlength="20"/><br /><br />
    <input required="true" type="text" name="address" size="30" maxlength="20"/><br /><br />
    <input required="true" type="text" name="phone" size="30" maxlength="20"/><br /><br />
    <input type="text" name="email" size="30" maxlength="30"/><br /><br />
    </td>  
    </tr>
    </table>
    
    <p align="center"><input type="submit" name="order" value="Заказать"/></p>
    
</form>

<form action="index.php?view=clean_cart" method="post" id="cart-form">
    
    <?php
    $id='0';
    foreach ($_SESSION ['cart'] as $id => $qty)
    {$product = get_product($id);}
    ?>
    
<?php
}
if($_SESSION['cart'] && isset($_POST['order']))
{

    $date = date('Y-m-d');
    $time = date('H:i:s');

        $name = $_REQUEST['name'];
        $sname = $_REQUEST['sname'];
        $address = $_REQUEST['address'];
        $phone = $_REQUEST['phone'];
        $email = $_REQUEST['email'];
        $query = mysql_query("INSERT INTO orders (name,sname,address,phone,email,date,time,product,prod_id,price,qty) VALUES ('$name','$sname','$address','$phone','$email','$date','$time','{$product['title']}','{$product['id']}','{$product['price']}','$qty')");
        echo "Ваш заказ принят!";
        unset($_SESSION['cart']);
}
?>
</form>