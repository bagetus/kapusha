<div align="center" style="margin-top: -20px;">
<?
include 'views/slider.php';
?>
</div>

<?php
if (is_array($products))
foreach ($products as $item):
?>

<div style=" display: inline-block;">
<table class="product_in_list" cellspacing="0" border="0" align="center" width="250">
<tr height="320">

<td align="middle" colspan="2" style="padding: 10;" class="shadow_image">
<a href="index.php?view=product&id=<?php echo $item['id']?>"><img width="100%" src="/userfiles/<?php echo $item['image']?>"/></a>
</td>

</tr>
<tr height="25px"></tr>
<tr height="20px">

<td valign="top" colspan="2">

<div align="left" style="color: #916a8e; font-family: Buxton Sketch; font-size: 22px; a:link ">

<a class="product_title_link" href="index.php?view=product&id=<?php echo $item['id']?>"><?php echo $item['title']?></a>

</div>
</td>

</tr>
<tr>
<td><div align="left" style="color: #ff9758; font-family: Helvetica; font-weight: bold; font-size: 28px;"><?php echo $item['price']?> ₴</div></td>

<td class="buy_button"><div align="center"><a style="color: white; text-decoration: none; text-size: 20;" href="index.php?view=add_to_cart_list&id=<?php echo $item['id']?>">Купить</a></div></td>
</tr>

</table>
</div>
<?php
endforeach;
?>
