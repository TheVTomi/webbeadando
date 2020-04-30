<?php
define('MB', 1048576);
define ('SITE_ROOT', realpath(dirname(__FILE__)));

if((($_FILES["file"]["type"]=="image/png")||($_FILES["file"]["type"]=="image/jpeg"))&&($_FILES["file"]["size"]<=5*MB))
{
    if($_FILES["file"]["error"]>0)
    {
        echo "Error ".$_FILES["file"]["error"]."br";
    }
    else
    {
        //echo "Upload: ".$_FILES["file"]["name"]."<br>";
        //echo "Type: ".$_FILES["file"]["type"]."<br>";
        //echo "Size: ".($_FILES["file"]["size"]/1024)."KB<br>";
        //echo "Stored in:: ".$_FILES["file"]["tmp_name"];
        if(file_exists("galeria/".$_FILES["file"]["name"]))
        {
            echo $_FILES["file"]["name"]. " nevű fájl már létezik!";
        }
        else
        {
            move_uploaded_file($_FILES["file"]["tmp_name"],"galeria/".$_FILES["file"]["name"]);
            echo "Stored in: "."galeria/".$_FILES["file"]["name"];
            header("Location: index.php?page=galeria");
            exit;
        }
    }
}
else
{
    echo "<html>";
    echo "<head>";
        echo "<title>Sikertelen</title>";
        echo "<meta charset=\"utf-8\">";
        echo "<style> body {background-color: #999999;}</style>";
    echo "</head>";
    echo "<body>";
    echo "<p> Nem sikerült a képfeltöltés!</p>";
    echo "Lehetséges hibaokok:";
    echo "<ul>";
    echo "<li> Nem adott meg semmit</li>";
    echo "<li> Nem képet adott meg</li>";
    echo "<li> Túl nagy a fájlméret</li>";
    echo "</ul>";
    echo "<p>Ha szeretne képet feltölteni, akkor lépjen vissza az előző oldalra!</p>";
    echo "</body>";
}

?>