 <?php   
 if(isset($_POST["email"])==false&&isset($_POST["country"])==false&&isset($_POST["subject"])==false&&isset($_POST["message"])==false)
 {
    echo "<h1 id=\"cim\">Kapcsolat</h1>";
echo "<p>";
    echo "Ha bármilyen kérdése merülne fel szolgáltatásainkal kapcsolatban akár itt is érdeklődhet.";
echo "</p>";
echo "<form method=\"post\" action=\"index.php?page=kapcsolat\">";
    echo "<label for=\"country\">Ország:</label>";
    echo "<br>";
    echo "<input name=\"country\" type=\"text\" size=\"50\" pattern =\"^[A-za-záéőóüűöőíÁÉŐÓÜŰÖŐÍ]*$\" required>";
    echo "<br>";
    echo "<label for=\"email\">E-mail:</label>";
    echo "<br>";
    echo "<input name=\"email\" type=\"text\" size=\"50\" pattern =\"[A-za-z0-9]+[@][A-za-z0-9]+[.][a-z]{2,3}\" required>";
    echo "<br>";
    echo "<label for=\"subject\">Tárgy:</label>";
    echo "<br>";
    echo "<input name=\"subject\" type=\"text\" size=\"50\" required>";
    echo "<br>";
    echo "<label for=\"message\">Üzenet (maximum 800 karakter):</label>";
    echo "<br>";
    echo "<textarea name=\"message\" id=\"message\" cols=\"100\" rows=\"15\" maxlength=\"800\" required></textarea>";
    echo "<br>";
    echo "<input type=\"submit\">";
echo "</form>";
 }
 else
 {
    if((preg_match("/^[A-za-záéőóüűöőíÁÉŐÓÜŰÖŐÍ]*$/",$_POST["country"]))&&(preg_match("/[A-za-z0-9]+[@][A-za-z0-9]+[.][a-z]{2,3}/", $_POST["email"])))
    {
        $email=$_POST["email"];
     $country=$_POST["country"];
     $subject=$_POST["subject"];
     $message=$_POST["message"];
   

    echo "<h1 id=\"cim\">Az ön által küldött üzenet adatai</h1>";
     echo "<p>";
        echo "Ország: ".$_POST["country"];
        echo "<br>";
        echo "<br>";
        echo "E-mail cím: ".$_POST["email"];
        echo "<br>";
        echo "<br>";
        echo "Tárgy: ".$_POST["subject"];
        echo "<br>";
        echo "<br>";
        echo "Az üzenet tartalma:";
        echo "<br>";
        echo $_POST["message"];
     echo "</p>";
  
    try
    {
    $db = new PDO(
        'mysql:host=localhost;dbname=uzenet;charset=utf8',
        'root',
        '',
        array(PDO::ATTR_EMULATE_PREPARES=>false,
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION)
    );
    $sql="INSERT INTO uzenetek (Orszag,Email,Targy,Tartalom)
    VALUES (:country,:email,:subject,:message)";
    $stmt=$db->prepare($sql);
    $stmt->execute(['country' => $country, 'email' => $email, 'subject' => $subject, 'message' => $message]);
    echo "<p>";
    echo "Üzenet elküldve! Köszönjük üzenetét!";
    echo "</p>";
   }
   catch (PDOException $e)
   {
       echo "Nem sikerült elküldeni az üzenetet!";
       echo "<br>";
       echo "A hiba oka: ".$e->getMessage();
   }
    }
    else
    {
        echo "Rossz formában adta meg az e-mail címet vagy az országot!";
    }
 }
?>