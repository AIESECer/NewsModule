<HTML>
<head><title>Archives News De Emul-Age</title></head>



<link href="../css.css" rel="stylesheet" type="text/css" />
<body>
<div id="corps">
<h1>Emul-Age - News - Archives </h1>
<p>Vous trouverez sur cette page toutes les news ecrites sur Emul-Age </p>


<?
/* Nom: Archives.php
   Auteur: Yami (Yami_ne1(�)hotmail.com)
   Role: Affichage de toutes les news
  
   Creer le: Vendredi-3-Aout-2007
*/

include('connexion.php');


$sql=mysql_query("SELECT * from news order by date desc ");//requte de selection

//affichage des news








while($news_res=mysql_fetch_array($sql)){


?>

<table width="429" border="0" cellpadding="0" cellspacing="3" bordercolor="#6699CC">
  <!--DWLayoutTable-->
  <tr>
    <td height="22" colspan="3" valign="top"><h2><? print $news_res['title']; ?></h2></td>
  </tr>
  <tr>
    <td width="17" height="143" valign="top"><? if($news_res['align']=='Left'){ 
	print'<img src="news/img/'.$news_res['img'].'" >';
	} ?></td>
    <td width="395" valign="top"><? print $news_res['news']; ?></td>
    <td width="17" valign="top"><? if($news_res['align']=='Right'){ 
	print'<img src="news/img/'.$news_res['img'].'" >';
	} ?> </td>
  </tr>
  <tr>
    <td height="25" colspan="3" valign="top"><b>Par :</b> <? print $news_res['author'];  ?>  <b> Le:</b>  <? print $news_res['date']; ?></td>
  </tr>
  <tr>
    <td height="2"></td>
    <td></td>
    <td></td>
  </tr>
</table>
<hr size="1" color="#0099CC">
<p>
  <?
}

mysql_close();
?>
</p>
<p>&nbsp;</p>
<p align="center"><a href="news/archives.php">[Consulter Les Archives]</a></p>
</div>
</BODY>
</HTML>