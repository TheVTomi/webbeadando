<html>
<head>
</head>
<body>
<?php
$dir="../../galeria";
$images=array();
$i=0;
if (is_dir($dir))
{
  if ($dh = opendir($dir))
  {
    while (($file = readdir($dh)) !== false)
    {
      if($file!="."&&$file!="..")
      {
        //echo "filename:" . $file . "<br>";
        //echo "<img src=$file alt=\"Image\" height=\"100\" width=\"100\">";
        $images[$i]=$file;
        $i++;
      }
    }
    closedir($dh);
  }
}

for($i=0;$i<count($images);$i++)
{
  echo "<img src=$dir/$images[$i] alt=\"Image\" height=\"500\" width=\"500\">";
}
?>
</body>
</html>