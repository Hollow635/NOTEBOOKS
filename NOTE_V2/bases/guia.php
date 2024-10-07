<!DOCTYPE html>    
<html lang="en">
<head>
	<!-- Define el conjunto de caracteres para el documento -->
	<meta charset="UTF-8">
	<!-- Configura la vista para dispositivos móviles -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Preconectar a la fuente de Google Fonts para optimizar la carga -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<!-- Enlace a la hoja de estilos CSS para el diseño de la página -->
	<link rel="stylesheet" href="../estilos/guia_styles.css">
	<!-- Enlace al ícono que aparecerá en la pestaña del navegador -->
	<link rel="icon" href="../imagenes/logo.ico">
	<!-- Título de la página que aparecerá en la pestaña del navegador -->
	<title>Preguntas Frecuentes</title>
</head>
<body>
	<header>
        <!-- Contenedor principal del encabezado -->
        <div class="header-content">
            <div class="logo">
                <!-- Logo de la institución -->
                <img src="../imagenes/OK.png" alt="Logo Otto Krause">
                <div class="header-text">
                </div>
            </div>
            <div class="auth-buttons">
				<!-- Botón para registrarse que redirige a la página de registro de alumnos -->
				<button onclick="window.location.href='../bases/register_alumno.php'">Registrarse</button>
				<!-- Botón para iniciar sesión que redirige a la página de login -->
				<button onclick="window.location.href='../bases/login.php'">Iniciar Sesion</button>
                <!-- Botón para volver al inicio que redirige a la página principal -->
                <button onclick="window.location.href='../bases/index.php'">Volver al inicio</button>
            </div>
        </div>
    </header>
	<main>
		<!-- Título principal de la sección de preguntas frecuentes -->
		<h1 class="titulo">Preguntas Frecuentes</h1>
		<!-- Contenedor para las categorías de preguntas -->
		<div class="categorias" id="categorias">
			<!-- Categoría de Recursos -->
			<div class="categoria" data-categoria="recursos">
				<svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
					<!-- SVG para el icono de recursos -->
					<path d="M7 24h-5v-9h5v1.735c.638-.198 1.322-.495 1.765-.689.642-.28 1.259-.417 1.887-.417 1.214 0 2.205.499 4.303 1.205.64.214 1.076.716 1.175 1.306 1.124-.863 2.92-2.257 2.937-2.27.357-.284.773-.434 1.2-.434.952 0 1.751.763 1.751 1.708 0 .49-.219.977-.627 1.356-1.378 1.28-2.445 2.233-3.387 3.074-.56.501-1.066.952-1.548 1.393-.749.687-1.518 1.006-2.421 1.006-.405 0-.832-.065-1.308-.2-2.773-.783-4.484-1.036-5.727-1.105v1.332zm-1-8h-3v7h3v-7zm1 5.664c2.092.118 4.405.696 5.999 1.147.817.231 1.761.354 2.782-.581 1.279-1.172 2.722-2.413 4.929-4.463.824-.765-.178-1.783-1.022-1.113 0 0-2.961 2.299-3.689 2.843-.379.285-.695.519-1.148.519-.107 0-.223-.013-.349-.042-.655-.151-1.883-.425-2.755-.701-.575-.183-.371-.993.268-.858.447.093 1.594.35 2.201.52 1.017.281 1.276-.867.422-1.152-.562-.19-.537-.198-1.889-.665-1.301-.451-2.214-.753-3.585-.156-.639.278-1.432.616-2.164.814v3.888zm3.79-19.913l3.21-1.751 7 3.86v7.677l-7 3.735-7-3.735v-7.719l3.784-2.064.002-.005.004.002zm2.71 6.015l-5.5-2.864v6.035l5.5 2.935v-6.106zm1 .001v6.105l5.5-2.935v-6l-5.5 2.83zm1.77-2.035l-5.47-2.848-2.202 1.202 5.404 2.813 2.268-1.167zm-4.412-3.425l5.501 2.864 2.042-1.051-5.404-2.979-2.139 1.166z"/>
				</svg>
				<p>Recursos</p>
			</div>
			<!-- Categoría de Seguridad -->
			<div class="categoria" data-categoria="seguridad">
				<svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
					<!-- SVG para el icono de seguridad -->
					<path d="M12 0c-3.371 2.866-5.484 3-9 3v11.535c0 4.603 3.203 5.804 9 9.465 5.797-3.661 9-4.862 9-9.465v-11.535c-3.516 0-5.629-.134-9-3zm0 1.292c2.942 2.31 5.12 2.655 8 2.701v10.542c0 3.891-2.638 4.943-8 8.284-5.375-3.35-8-4.414-8-8.284v-10.542c2.88-.046 5.058-.391 8-2.701zm5 7.739l-5.992 6.623-3.672-3.931.701-.683 3.008 3.184 5.227-5.878.728.685z"/>
				</svg>
				<p>Seguridad</p>
			</div>
			<!-- Categoría de Cuenta -->
			<div class="categoria" data-categoria="cuenta">
				<svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
					<!-- SVG para el icono de cuenta -->
					<path d="M9.484 15.696l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm0-5l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm0-5l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm10.516 11.304h-8v1h8v-1zm0-5h-8v1h8v-1zm0-5h-8v1h8v-1zm4-5h-24v20h24v-20zm-1 19h-22v-18h22v18z"/>
				</svg>
				<p>Cuenta</p>
			</div>
		</div>

		<!-- Contenedor de preguntas frecuentes -->
		<div class="preguntas">
			<!-- Preguntas de la categoría Recursos -->
			<div class="contenedor-preguntas" data-categoria="recursos">
				<div class="contenedor-pregunta">
					<!-- Pregunta con ícono para expandir respuesta -->
					<p class="pregunta">¿Quienes pueden usar su servicio de prestamo? <img src="../imagenes/suma.svg" alt="Abrir Respuesta" /></p>
					<!-- Respuesta correspondiente a la pregunta -->
					<p class="respuesta">Nuestro servicio pueden usarlo tanto los alumnos como los profesores, siempre y cuando este disponible</p>
				</div>
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Cuantas computadoras puedo pedir prestadas? <img src="../imagenes/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">Un usuario puede pedir como maximo 12 notebooks por clase </p>
				</div>
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Como se validan el prestamo al buscar las notebooks? <img src="../imagenes/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">Estamos trabajando en como se realizara eso </p>
				</div>
			</div>

			<!-- Preguntas de la categoría Seguridad -->
			<div class="contenedor-preguntas" data-categoria="seguridad">
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Que pasa con mis datos personales? <img src="../imagenes/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">No se preocupe, sus datos estan bien almacenados y protegidos en nuestra base de datos donde estamos mejorandola constatemente para evitar perdida de informacion personal.</p>
				</div>
				<div class="contenedor-pregunta">
					<p class="pregunta">¿El sistema es confiable? <img src="../imagenes/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">Por suspuesto, este sistema esta en constante actualizaciones y es un proyecto realizado por alumnos del grupo Compilando Compus de 6°2° COM.</p>
				</div>
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Cómo puedo proteger mi cuenta contra accesos no autorizados? <img src="../imagenes/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">Usa contraseñas fuertes y únicas, activa la autenticación de dos factores y no compartas tu información de inicio de sesión.</p>
				</div>
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Qué debo hacer si sospecho que mi cuenta esta en riesgo? <img src="../imagenes/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">Cambia tu contraseña inmediatamente, revisa la actividad reciente de la cuenta y contacta al soporte técnico.</p>
				</div>
			</div>

			<!-- Preguntas de la categoría Cuenta -->
			<div class="contenedor-preguntas" data-categoria="cuenta">
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Que necesito para crear una cuenta? <img src="../imagenes/suma.svg" alt="Abrir Respuesta" /></p>
					<li class="respuesta">
						<!-- Lista de requisitos para crear una cuenta -->
						<ul>
							<li>informacion valida para realizar la inscripcion, esto evitara fallas en el registro. </li>
							<li>Usar un email valido o proporcionado por el Krause, (si usa datos falsos el sistema se ocupara de negarles el acceso).</li>
							<li>Acceso a una computadora o celular y que esten conectados a la red wifi "BA Escuela".</li>
						</ul>
				</div>
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Como puedo cambiar mi contraseña? <img src="../imagenes/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">Si usted quiere cambiar su contraseña, tendra que hacerlo por medio de un formulario que podra ver en la siguiente pagina. <a href="new_password.php" class="create-account">Ingrese Aqui</a> </p>
				</div>
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Que debo hacer si decido borrar mi cuenta del sistema? <img src="../imagenes/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">Si quiere borrarse del sistema debe comunicarse con uno de los desarrolladores para obtener ayuda </p>
				</div>      
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Qué hago si mi cuenta está bloqueada? <img src="../imagenes/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta"> Si su cuenta está bloqueada, debe contactarse con el soporte para obtener ayuda. </p>
				</div>   
			</div>
		</div>
	</main>

	<!-- Enlace a los scripts JavaScript para manejar interacciones -->
	<script src="../js/categorias.js"></script>
	<script src="../js/preguntasFrecuentes.js"></script>
</body>
</html>
