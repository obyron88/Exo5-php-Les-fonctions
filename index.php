<!DOCTYPEhtml>
<html>
<head>
  <meta charset="utf-8"/>
</head>
<body>
<p><?php
function fu1(){
  return True;
}
 ?></p>

 <p><?php
function fu2($var){
  print $var;
}
fu2("oui oui");
  ?></p>

  <p><?php
function fu3($varoum, $taroum){
  echo $varoum. $taroum;
}
fu3("non non ", "peut etre");
   ?></p>

   <p><?php
function fu4($first, $second){
  if ($first > $second){
  echo "Le premier nombre est plus grand";
} elseif ($first < $second){
  echo "Le premier nombre est plus petit";
} elseif ($first = $second){
  echo "Les deux nombres sont identiques";
}
}
fu4(5, 6);
    ?></p>

    <p><?php
function fu5($chiffres, $lettres){
  echo $chiffres. $lettres;
}
fu5(5, " kiwis ziwi");
     ?></p>

     <p><?php
function fu6($nom, $prenom, $age){
  echo "Bonjour ", $nom. " ", $prenom. ", tu as ", $age. " ans";
}
fu6("Cros", "Guillaume", 26);
      ?></p>

      <p><?php
function fu7($ages, $genre){
if ($ages < 18 AND $genre == "Homme"){
  echo "Vous êtes un homme et vous êtes mineur";
} elseif ($ages >= 18 AND $genre == "Homme"){
  echo "Vous êtes un homme et vous êtes majeur";
} elseif($ages < 18 AND $genre == "Femme"){
    echo "Vous êtes une femme et vous êtes mineur";
  }  elseif($ages >= 18 AND $genre == "Femme"){
    echo "Vous êtes une femme et vous êtes majeur";
  }
  }
  fu7(18, "Homme");
       ?></p>

       <p><?php
       $nbr1 = 1;
       $nbr2 = 5;
       $nbr3 = 8;
function fu8($nbr1, $nbr2, $nbr3){
  echo $nbr1 + $nbr2 + $nbr3;
}
fu8($nbr1, $nbr2, $nbr3);
        ?></p>
</body>
</html>
