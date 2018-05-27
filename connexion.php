<?php 
/* Nom: config.inc.php
   Auteur: Yami (Yami_ne1(à)hotmail.com)
   Role: Definir les parametre de configuration de l'applucation.
   Creer le: Vendredi-07-Aout-2007 
*/

//-------Information de connexion a mysql-------//
$host='localhost';//Hote de connexion(localhost)        //
$user='root';//Nom d'user de la base de données    //
$pwd='';//Password de la base de données     //
$base='gamemuseum_db';//Nom de la base de données        //
//-----------------------------------------//

$nombre_news='10';

//-----------connexion a mysql------------------------------------------------//
$db=mysql_connect($host,$user,$pwd) or die ("erreur de connexion");          //
//--------------------------------------------------------------------------//

//---selection de la base--------------------------------------------------//
mysql_select_db($base,$db) or die ("Selection ecoue");                    //
//-----------------------------------------------------------------------//

$limit_news=5;//nombre de news par page

?>