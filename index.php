
<?php
  echo"<h2>Snack 1</h2>";
  echo "<p>Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
  Olimpia Milano - Cantù | 55-60</p>";
  echo"<br>" ;
  $arrayPartite = ["Genova - Chievo", "Roma - Terni", "Verona - Tortona", "Savona - Milano", "Torino - Avellino" ];
  $arrayPunteggi = ["33 - 22", "11 - 55", "53 - 33", "33 - 33", "22 - 66" ];

  for ($i=0; $i < count($arrayPartite); $i++) {
    echo($arrayPartite[$i] ." | " .$arrayPunteggi[$i]);
    echo"<br>"."<br>";
  }

  echo"<br>"."<br>";
  echo"<h2>Snack 2</h2>";
  echo "<p>Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare 'Accesso riuscito', altrimenti 'Accesso negato'</p>";
  echo"<br>" ;
  $name = $_GET["name"];
  $mail = $_GET["mail"];
  $age = $_GET["age"];
  $chiocciola = "@";
  $punto = ".";
  /*echo (strlen($name));
  echo"<br>"."<br>";
  echo (strpos($mail,"."));
  echo"<br>"."<br>";
  if (is_numeric($age)) {
    echo "true";
  }else {
    echo "false";
  }*/
  if (strlen($name) > 3 && strpos($mail,$punto)!==false && strpos($mail,$chiocciola)!==false && is_numeric($age)) {
    echo "Accesso riuscito";
  } else {
    echo "Accesso negato";
  }



  echo"<br>"."<br>";
  echo"<h2>Snack 4</h2>";
  echo "<p>Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta</p>";
  echo"<br>" ;
    $nItems = 15;
    $min=0;
    $max=15;
    $newArray = [];
    while (count($newArray) < $nItems) {
      $number = rand($min, $max);
      if (!in_array($number, $newArray)) {
        $newArray[] = $number;
      }
    }
     var_dump($newArray);
  ?>
