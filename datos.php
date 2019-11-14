<html>
 <head>
 	<title>Exemple de lectura de dades a MySQL</title>
 	<style>
 		.paises{

 			border: 1px solid black;
 		}
 	</style>
 </head>
 
 <body>
 	<?php
  		$mysqli = new mysqli('localhost', 'ap', 'Hakantor', 'world');
	?>
 	<div align="left">                        
 	<form>
      	<select name="ccode">
        	<option value="0">Paises:</option>
        	<?php
          		$query = $mysqli -> query ("SELECT * FROM country");
          		while ($valores = mysqli_fetch_array($query)) {
            	echo '<option value="'.$valores[Code].'">'.$valores[Name].'</option>';}
        	?>
      	</select>
      	<button>Enviar</button>
    </form>
        	<?php
          		$city = $mysqli -> query ("SELECT Name, CountryCode FROM City");
          		while ($valores = mysqli_fetch_array($city)) {
            	echo '<option value="'.$valores[Code].'">'.$valores[Name].'</option>';}
        	?>
  </div>
</body>
</html>