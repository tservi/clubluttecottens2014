<html>
    <head>
        <title>Fêtes de luttes 2014 - Actifs </title>
        <meta charset="utf-8" />
    </head>
    <body>
<?php
$lutteurs =array(
  array( "Responsable", " de la Fête", "jeune" ),
  array( "Responsable", "du Club", "jeune" ),
  array( "Transport", "", "" ),
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
  array( "Sam 26 avril", "Villarlod" , "démonstration<br/><font style=\"color:red;\">obligatoire</font>" ) ,
  array( "Dim 27 avril", "Estavayer-le-Gibloux", "régionale" ),
  array( "Dim 11 mai", "Ried" , "régionale" ),
  array( "Dim 25 mai", "Le Locle", "cantonale NE"),
  array( "Jeu 29 mai" , "Le Mouret", "régionale (90)"),
  array( "Dim 15 juin" , "Mont-sur-Rolle" , "régionale"),
  array( "Dim 6 juillet" , "St. Martin", "cantonale VS" ),
  array( "Dim 13 juillet", "St.-Germain", "romande") ,
  array( "Sam 19 juillet", "Riaz", "régionale (90)") ,
  array( "Dim 27 juillet", "Lac des joncs", "alpestre"),
  array( "Dim 10 août" , "Boveresse", "régionale non-cour.") ,
  array( "Dim 24 août" , "Estavayer-le-Lac" , "cantonale FR" ) ,
  array( "Dim 31 août" , "Aubonne", "cantonale VD") ,
  
);

?>
<center>
<h1> Liste pour les fêtes de lutte - Saison 2014 - <i> actifs</i> </h1>
<!-- <p style="width:800px; text-align: left">Dans le tableau ci-dessous :
<br/>faites un "X" pour indiquer votre participation  à la fêtre
<br/>ou bien un "T" pour indiquer que vous serez motorisé. </p>
-->

<table border="0" style="border:1px solid black; border-collapse: collapse; font-size: 13px;">
<thead  style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color:  black;">
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
</thead>
<?php
 foreach($fetes2014 as $val)
 {
    echo "<tr style=\"border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color:  black;\">\r\n";
    echo "<td style=\"border-right-width: 1px; border-right-style: solid; border-right-color:  black;\">\r\n";
    echo $val[0] ;
    echo "<br/>";
    echo $val[1];
    echo "<br/>";
    echo "<i>" . $val[2] . "</i>";
    echo "</td>\r\n";
    foreach( $lutteurs as $val )
    {
        echo "<td style=\"border-right-width: 1px; border-right-style: solid; border-right-color:  black; text-align: center;\">&nbsp;</td>";
    }
    
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

<p style="color: red; width: 800px; text-align: left; font-size: 22px; ">
    <strong>
    Chaque lutteur est responsable de son inscription.<br/>
    Il a la responsabilité d'appeler la personne responsable de la fête en cas d'empêchement ( au plus tard le vendredi avant la fête ).<br/>
    Toute amende en cas de non présence à la fête lui sera factureé CHF 100.- !!! </br>
    </strong>
</p>

</center>

    </body>
</html>
