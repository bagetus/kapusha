<div class="product_name"><?php echo $product['title']?></div>

<div class="tovar">
<table cellpadding="0" cellspacing="0" border="0" align="center">
<tr height="170px" width="190px">

<td width="350px">



<a href="/userfiles/<?php echo $product['image']?>" data-lightbox="image-<?php echo $product['id']?>"><img src="/userfiles/<?php echo $product['image']?>" width="100%"/></a>

</td>
</tr>

</table>
</div>

<div align="left" class="price"><?php echo $product['price']." ₴"?></div>

<div align="left"><a href="index.php?view=add_to_cart&id=<?php echo $product['id']?>"><img onmouseover="this.src='/images/buy_button_p.png';" onmouseout="this.src='/images/buy_button_np.png';" alt="image001" src="/images/buy_button_np.png"  /></a></div>

<div align="left" class="opisanie">
<h3>Описание товара:</h3>
<?php echo $product['description']?>
</div>