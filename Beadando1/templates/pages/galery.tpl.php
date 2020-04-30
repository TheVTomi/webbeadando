<h1 id="cim">Képek</h1>
<p>
Ide bármely ügyfelünk feltölthet a szolgáltatásaink igénybevétele után, egy képet gépjárművéről.
Honlapunk 500x500 pixelesre vágja a képeket és csak 5MB vagy annál kisebb méretű képek feltöltését engedélyezi.
<br>
A megengedett képkiterjesztés: jpeg/png.
</p> 

<form action="upload_image.php" method="post" enctype="multipart/form-data">
<label for="file">Fájlnév</label>
<input type="file" name="file" id="file">
<br>
<input type="submit" name="submit" value="Küldés">
</form>
<iframe width="1200" height="700"src="templates/pages/grid.tpl.php" frameborder="0" allowfullscreen></iframe>