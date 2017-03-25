<?
//$_SESSION['total_items'] = '0';
if($_SESSION['total_items'] != '0')
{
?>


<form action="index.php?view=update_cart" method="post" id="cart-form">

<table align="center" cellspacing="10" cellpadding="0" border="0" class="table_cart" width="600" style="text-align: center;">
	<tr>
		<td>Товар</td>
		<td>Цена</td>
		<td>Количество</td>
		<td>Всего</td>
        <td>Удалить</td>
	</tr>
	<?php 
		foreach ($_SESSION ['cart'] as $id => $qty):  
        $product = get_product($id); 
		?>
		<tr align="left">
			<td align="center"><?php echo $product['title'];?></td>
			<td align="center"><?php echo $product ['price'];?>₴</td>
            <td align = "center"><input type="text" size="2" name="<?echo $id;?>" value="<?php echo $qty;?>"/></td>
			<td align="center">₴<?php echo $product ['price'] * $qty;?></td>
            <td align="center"><a href="index.php?view=cleanid&id=<?php echo $id?>">X</a></td>
		</tr>
        <?php 
		endforeach;   
        ?>

</table>
	<p align="center" style="font-size: 20; font-weight: bold; color: #51381c">Общая сумма заказа: <span style="color: #9f6a91;"><?php echo $_SESSION['total_price'];?>₴</span></p>
    <p align="center"><input type="submit" name="update" value="Обновить"/></p>
    
    
</form>



<p align="center"><a href="index.php?view=order">Оформить заказ</a></p>

<p align="center"><a href="index.php?view=clean">Очистить</a></p>
       

<?php
}
else {echo "Ваша корзина пуста!";}
?>