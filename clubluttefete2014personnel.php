<html>
    <head>
        <title>Fêtes de luttes 2014 - Jeunes </title>
        <meta charset="utf-8" />
    </head>
    <body>
<?php
$lutteurs =array(
  array( "Bel", "Yannick", "jeune" ),
  array( "Bigler", "Samuel", "jeune" ),
  array( "Brodard", "Ewan", "jeune" ),
  array( "Chatagny" , "Michaël" , "actif+jeune") ,
  array( "Crottaz" , "Yves" , "jeune") ,
  array( "Felder" , "Lucien", "jeune" ),
  array( "Gachet", "Romain" , "jeune" ),
  array( "Grandjean", "Xavier" , "actif+jeune" ),
  array( "Jaquier", "Pierre" , "jeune" ),
  array( "Jaquier", "Simon" , "jeune" ),
  array( "Nicolet", "Bastien" , "jeune" ),
  array( "Python", "Benjamin" , "jeune" ),
  array( "Vaucher", "Rémy" , "jeune") ,
  array( "Wenger" , "Killian" , "actif+jeune" ) ,
  array( "Zanardi" , "Alex" , "jeune" ) ,
  
);
$fetes2014 = array(
  array( "Date", "Lieu", "Manifestation", "Inscription" , "Transport", "Responsable"),
  array( "Sam 26 avril", "Villarlod" , "démonstration<br/><font style=\"color:red;\">obligatoire</font>" , "" , "" , "") ,
  array( "Dim 27 avril", "Estavayer-le-Gibloux", "régionale" , "" , "" , "" ),
  array( "Dim 11 mai", "Ried" , "régionale" , "" , "" , "" ),
  array( "Dim 18 mai", "Vessy" , "cantonale GE" , "" , "" , "" ),
  array( "Dim 24 mai", "Le Locle" , "cantonale NE" , "" , "" , "" ),
  array( "Jeu 29 mai" , "Le Mouret", "régionale (90)" , "" , "" , ""),
  array( "Dim 1 juin" , "Oron" , "cantonale VD" , "" , "" , ""),
  array( "Dim 15 juin" , "Mont-sur-Rolle" , "régionale" , "" , "" , ""),
  array( "Dim 29 juin" , "Collombey" , "cantonale VS" , "" , "" , ""),
  array( "Dim 20 juillet" , "Riaz" , "cantonale FR" , "" , "" , ""),
  array( "Dim 27 juillet", "Lac des joncs", "alpestre" , "" , "" , ""),
  array( "Dim 10 août" , "Boveresse", "régionale" , "" , "" , "") ,
  array( "Dim 17 août" , "Heitenried", "romande" , "" , "" , "") ,
  array( "Dim 7 décembre" , "Plaffeien", "en salle" , "" , "" , "") ,
  
);

?>
<center>
<h1> Fêtes de lutte - Saison 2014 - <i>inscriptions des jeunes</i> </h1>
    
<!-- <p style="width:800px; text-align: left">Comment remplir le tableau ci-dessous : dans la case correspondant à votre nom et à la fête faites un "X" pour indiquer votre participation ou bien un "T" pour indiquer que vous viendrez et que en plus vous serez motorisé. </p>
-->
<p style="width:800px; text-align: left">
    Nom : ______________________________________________________________________________ <br/>
    <br/>
    Prénom:______________________________________________________________________________ <br/>
</p>
<table border="1" style="border:1px solid black; border-collapse: collapse; /*font-size: 13px;*/">
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
<p style=" color: red; width: 800px; text-align: left; font-size: 22px; ">
    A retourner jusqu'au jeudi 13 mars au chef technique. 
</p>
<!--
<p style="color: red; width: 800px; text-align: left; font-size: 22px; ">
    <strong>
    Chaque lutteur est responsable de son inscription.<br/>
    Il a la responsabilité d'appeler la personne responsable de la fêtre en cas d'empêchement ( au plus tard le vendredi avant la fête ).<br/>
    Toute amende en cas de non présence à la fête lui sera factureé CHF 100.- !!! </br>
    </strong>
</p>
-->
</center>

<hr/>

<center>
<h1> Fêtes de lutte - Saison 2014 - <i>inscriptions des jeunes</i> </h1>
    
<!-- <p style="width:800px; text-align: left">Comment remplir le tableau ci-dessous : dans la case correspondant à votre nom et à la fête faites un "X" pour indiquer votre participation ou bien un "T" pour indiquer que vous viendrez et que en plus vous serez motorisé. </p>
-->
<p style="width:800px; text-align: left">
    Nom : ______________________________________________________________________________ <br/>
    <br/>
    Prénom:______________________________________________________________________________ <br/>
</p>
<table border="1" style="border:1px solid black; border-collapse: collapse; /*font-size: 13px;*/">
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
<p style=" color: red; width: 800px; text-align: left; font-size: 22px; ">
    A retourner jusqu'au jeudi 13 mars au chef technique. 
</p>
<!--
<p style="color: red; width: 800px; text-align: left; font-size: 22px; ">
    <strong>
    Chaque lutteur est responsable de son inscription.<br/>
    Il a la responsabilité d'appeler la personne responsable de la fêtre en cas d'empêchement ( au plus tard le vendredi avant la fête ).<br/>
    Toute amende en cas de non présence à la fête lui sera factureé CHF 100.- !!! </br>
    </strong>
</p>
-->
</center>


    </body>
</html>
