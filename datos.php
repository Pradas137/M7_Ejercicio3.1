<html>
 <head>
 	<title>Exemple de lectura de dades a MySQL</title>
 </head>
 
 <body>
 	<h1>Exemple de lectura de dades a MySQL</h1>
 	<?php
 
  	$mysqli = new mysqli('localhost', 'ap', 'Hakantor', 'world');
  	?>
  	<div align="left">
  		<p>Paises:
  			<select>
  				<option value="0">Seleccione:</option>
  				<?php
  				$query = $mysqli -> query ("SELECT * FROM country");
  					while ($valores = mysqli_fetch_array($query)) {
  						echo '<option value="'.$valores[Code].'">'.$valores[Name].'</option>';
  					}
  				?>
  			</select>
  		<button>Enviar</button>
  		<?php
  				$query = $mysqli -> query ("SELECT * FROM country");
  					while ($valores = mysqli_fetch_array($query)) {
  						echo '<option value="'.$valores[Code].'">'.$valores[Name].'</option>';
  					}
  		?>
 </body>
</html>
