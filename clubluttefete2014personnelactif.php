<html>
    <head>
        <title>Fêtes de luttes 2014 - Actifs </title>
        <meta charset="utf-8" />
    </head>
    <body>
<?php
$lutteurs =array(
  array( "Balmat", "Lucien", "actif" ),
  array( "Chatagny" , "Michaël" , "actif+jeune") ,
  array( "Felder" , "Flavian", "actif" ),
  array( "Felder" , "Joris" , "actif" ),
  array( "Glauser" , "Thomas", "actif" ),
  array( "Grandjean", "Xavier" , "actif+jeune" ),
  /*array( "Jacquat" , "Alain", "actif" ),*/
  array( "Pittet" ,  "Guillaume" , "actif" ) ,
  array( "Tenthorey" , "Matthieu", "actif" ) ,
  array( "Tinguely Awais", "Jean" , "actif") ,
  array( "Wenger" , "Killian" , "actif+jeune" ) ,
  
);
$fetes2014 = array(
  /*array( "Dim 16 fev" , "Lausanne" , "régionale" ),*/
  array( "Date", "Lieu", "Manifestation", "Inscription" , "Transport", "Responsable"),
  array( "Sam 26 avril", "Villarlod" , "démonstration<br/><font style=\"color:red;\">obligatoire</font>" , "" , "" , "" ) ,
  array( "Dim 27 avril", "Estavayer-le-Gibloux", "régionale" , "" , "" , ""),
  array( "Dim 11 mai", "Ried" , "régionale" , "" , "" , ""),
  array( "Dim 25 mai", "Le Locle", "cantonale NE" , "" , "" , ""),
  array( "Jeu 29 mai" , "Le Mouret", "régionale (90)" , "" , "" , ""),
  array( "Dim 15 juin" , "Mont-sur-Rolle" , "régionale" , "" , "" , ""),
  array( "Dim 6 juillet" , "St. Martin", "cantonale VS" , "" , "" , "" ),
  array( "Dim 13 juillet", "St.-Germain", "romande" , "" , "" , "") ,
  array( "Sam 19 juillet", "Riaz", "régionale (90)" , "" , "" , "") ,
  array( "Dim 27 juillet", "Lac des joncs", "alpestre" , "" , "" , "" ),
  array( "Dim 10 août" , "Boveresse", "régionale non-cour." , "" , "" , "") ,
  array( "Dim 24 août" , "Estavayer-le-Lac" , "cantonale FR" , "" , "" , "" ) ,
  array( "Dim 31 août" , "Aubonne", "cantonale VD" , "" , "" , "") ,
  
);

?>

<center>
<h1> Fêtes de lutte - Saison 2014 - <i>inscriptions des actifs</i> </h1>
    
<!-- <p style="width:800px; text-align: left">Comment remplir le tableau ci-dessous : dans la case correspondant à votre nom et à la fête faites un "X" pour indiquer votre participation ou bien un "T" pour indiquer que vous viendrez et que en plus vous serez motorisé. </p>
-->
<p style="width:800px; text-align: left">
    Nom : ______________________________________________________________________________ <br/>
    <br/>
    Prénom:______________________________________________________________________________ <br/>
</p>
<table border="1" style="border:1px solid black; border-collapse: collapse; font-size: 14px;">
<!-- <thead  style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color:  black;">
    <tr>
        <td style="border-right-width: 1px; border-right-style: solid; border-right-color:  black;">
            
        </td>
        <?php
         foreach( $lutteurs as $val )
         {
            echo "<td style=\"-webkit-transform: rotate(90deg); -moz-transform: rotate(90deg); height: 80px; width:60px; border-right-width: 1px; border-right-style: solid; border-right-color:  black;\"><strong>" . $val[0] . "</strong><br/>" . $val[1] . "</td>\r\n";
         }
        ?>
    </tr>
</thead>-->
<?php
 foreach($fetes2014 as $val)
 {
    echo "<tr >\r\n";
    echo "<td >\r\n";
    echo $val[0] ;
    echo "</td><td>";
    echo $val[1];
    echo "</td><td>";
    echo "<i>" . $val[2] . "</i>";
    echo "</td><td>";
    echo $val[3];
    echo "</td><td>";
    echo $val[4];
    echo "</td><td>";
    echo $val[5];
    echo "</td>";
    echo "</td>\r\n";
    /*foreach( $lutteurs as $val )
    {
        echo "<td style=\"border-right-width: 1px; border-right-style: solid; border-right-color:  black; text-align: center;\">&nbsp;</td>";
    }
    >*/
    echo "</tr>\r\n";
 }
?>
</table>

<ul style="width: 800px; text-align: left;">
    <li>Lun 9 juin : fête alpestre du Stoss : 10 sélectionnés</li>
    <li>Dim 22 juin : fête alpestre au Lac-Noir : 40 sélectionnés</li>
    <li>Dim 7 sept : fête alpestre au Kilchberg(ZH) : 4 sélectionnés</li>
    <li>Sam 13 sept : fête alpestre St-Nicolas à Gornergrat</li>
</ul>

<p style=" color: red; width: 800px; text-align: left; font-size: 22px; ">
    A retourner jusqu'au mercredi 12 mars au chef technique. 
</p>







</center>

<hr/>

<center>
<h1> Fêtes de lutte - Saison 2014 - <i>inscriptions des actifs</i> </h1>
    
<!-- <p style="width:800px; text-align: left">Comment remplir le tableau ci-dessous : dans la case correspondant à votre nom et à la fête faites un "X" pour indiquer votre participation ou bien un "T" pour indiquer que vous viendrez et que en plus vous serez motorisé. </p>
-->
<p style="width:800px; text-align: left">
    Nom : ______________________________________________________________________________ <br/>
    <br/>
    Prénom:______________________________________________________________________________ <br/>
</p>
<table border="1" style="border:1px solid black; border-collapse: collapse; font-size: 14px;">
<!-- <thead  style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color:  black;">
    <tr>
        <td style="border-right-width: 1px; border-right-style: solid; border-right-color:  black;">
            
        </td>
        <?php
         foreach( $lutteurs as $val )
         {
            echo "<td style=\"-webkit-transform: rotate(90deg); -moz-transform: rotate(90deg); height: 80px; width:60px; border-right-width: 1px; border-right-style: solid; border-right-color:  black;\"><strong>" . $val[0] . "</strong><br/>" . $val[1] . "</td>\r\n";
         }
        ?>
    </tr>
</thead>-->
<?php
 foreach($fetes2014 as $val)
 {
    echo "<tr >\r\n";
    echo "<td >\r\n";
    echo $val[0] ;
    echo "</td><td>";
    echo $val[1];
    echo "</td><td>";
    echo "<i>" . $val[2] . "</i>";
    echo "</td><td>";
    echo $val[3];
    echo "</td><td>";
    echo $val[4];
    echo "</td><td>";
    echo $val[5];
    echo "</td>";
    echo "</td>\r\n";
    /*foreach( $lutteurs as $val )
    {
        echo "<td style=\"border-right-width: 1px; border-right-style: solid; border-right-color:  black; text-align: center;\">&nbsp;</td>";
    }
    >*/
    echo "</tr>\r\n";
 }
?>
</table>


<ul style="width: 800px; text-align: left;">
    <li>Lun 9 juin : fête alpestre du Stoss : 10 sélectionnés</li>
    <li>Dim 22 juin : fête alpestre au Lac-Noir : 40 sélectionnés</li>
    <li>Dim 7 sept : fête alpestre au Kilchberg(ZH) : 4 sélectionnés</li>
    <li>Sam 13 sept : fête alpestre St-Nicolas à Gornergrat</li>
</ul>

<p style=" color: red; width: 800px; text-align: left; font-size: 22px; ">
    A retourner jusqu'au mercredi 12 mars au chef technique. 
</p>




</center>

    </body>
</html>
