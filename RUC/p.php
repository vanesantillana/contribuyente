<!DOCTYPE html>

<html lang="es">

<head>

	<meta charset="utf-8">

 

	<style>

	iframe {position:absolute;width:1020px;height:500px;}

	</style>

 

	<script>

		// Funcion que se ejecuta cada vez que se selecciona un radio button

		function abrirPagina()

		{

			var porNombre=document.getElementsByName("pagina");

			var url="";

 

			// Recorremos todos los valores del radio button para encontrar el

			// seleccionado

			for(var i=0;i<porNombre.length;i++)

			{

				if(porNombre[i].checked)

					url=porNombre[i].value;

			}

 

			// Cambiarmos la url al iframe

			document.getElementById("miIframe").src=url

		}

 

		window.onload=function()

		{

			var elemento=document.getElementsByName("pagina");

 

			// Creamos el evento click para cada clic en todos los radio button

			if (elemento[0].addEventListener)

			{

				// Para todos los navegadores que siguen los estándares

				for(var i=0;i<elemento.length;i++)

					elemento[i].addEventListener("click", abrirPagina, false);

			}else{

				// Como no, para nuestro amigo Microsoft...

				// Ellos siempre ayudando a los desarrolladores...

				for(var i=0;i<elemento.length;i++)

					elemento[0].attachEvent("onclick", abrirPagina);

			}

		}

	</script>

</head>

 

<body>

 

Selecciona la pagina a mostrar en el iframe

<br><input type="radio" name="pagina" value="http://www.lawebdelprogramador.com/">Inicial

<br><input type="radio" name="pagina" value="http://www.lawebdelprogramador.com/foros/">Foros

<br><input type="radio" name="pagina" value="http://www.lawebdelprogramador.com/codigo/">Codigos

 

<p>

	<iframe id="miIframe"></iframe>

</p>

 

</body>

</html>