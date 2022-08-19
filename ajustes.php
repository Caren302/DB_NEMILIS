<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ajustes inventario</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/sweetalert2.css">
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/material.min.js" ></script>
	<script src="js/sweetalert2.min.js" ></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="js/main.js" ></script>
</head>
<body>
	
	<section class="full-width container-notifications">
		<div class="full-width container-notifications-bg btn-Notification"></div>
	    <section class="NotificationArea">
	        <div class="full-width text-center NotificationArea-title tittles">Advertencias<i class="zmdi zmdi-close btn-Notification"></i></div>
	        <a href="advertencias.html" class="Notification" id="notifation-unread-1">
	            <div class="Notification-icon"><i class="zmdi zmdi-accounts-alt bg-info"></i></div>
	            <div class="Notification-text">
	                <p>
	                    <i class="zmdi zmdi-circle"></i>
	                    <strong>Secretaria General... REVISANDO ESTADISTICAS</strong> 
	                    <br>
	                    <small>Justo Ahora</small>
	                </p>
	            </div>
	        	<div class="mdl-tooltip mdl-tooltip--left" for="notifation-unread-1">Notification as UnRead</div> 
	        </a>
	        <a href="#" class="Notification" id="notifation-read-1">
	            <div class="Notification-icon"><i class="zmdi zmdi-upload bg-success"></i></div>
	            <div class="Notification-text">
	                <p>
	                    <i class="zmdi zmdi-circle-o"></i>
	                    <strong>Nuevos Medicamentos</strong> 
	                    <br>
	                    <small>Justo Ahora</small>
	                </p>
	            </div>
	            <div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-1">Advertencia Leida</div>
	        </a>
	        <a href="#" class="Notification" id="notifation-unread-2">
	            <div class="Notification-icon"><i class="zmdi zmdi-mail-send bg-danger
"></i></div>
	            <div class="Notification-text">
	                <p>
	                    <i class="zmdi zmdi-circle"></i>
	                    <strong>Fluconazol ¡CADUCADO!</strong> 
	                    <br>
	                    <small>Hace 3 Minutos</small>
	                </p>
	            </div>
	            <div class="mdl-tooltip mdl-tooltip--left" for="notifation-unread-2">Advertencia no leida</div>
	        </a> 
	        <a href="#" class="Notification" id="notifation-read-2">
	            <div class="Notification-icon"><i class="zmdi zmdi-mail-send bg-danger"></i></div>
	            <div class="Notification-text">
	                <p>
	                    <i class="zmdi zmdi-circle-o"></i>
	                    <strong>Calcitrion ¡AGOTADO!</strong> 
	                    <br>
	                    <small>Hace 1 Minuto</small>
	                </p>
	            </div>
	            <div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-2">Advertencia Leida</div>
	        </a>
	        <a href="#" class="Notification" id="notifation-read-3">
	            <div class="Notification-icon"><i class="zmdi zmdi-folder bg-primary"></i></div>
	            <div class="Notification-text">
	                <p>
	                    <i class="zmdi zmdi-circle-o"></i>
	                    <strong>Bezafibrato ¡PRONTO A CADUCAR!</strong> 
	                    <br>
	                    <small>Hace 10 Minutos</small>
	                </p>
	            </div>
	            <div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-3">Advertencia Leida</div>
	        </a>  
	    </section>
	</section>

	<div class="full-width navBar">
		<div class="full-width navBar-options">
			<i class="zmdi zmdi-more-vert btn-menu" id="btn-menu"></i>	
			<div class="mdl-tooltip" for="btn-menu">Menu</div>
			<nav class="navBar-options-list">
				<ul class="list-unstyle">
					<li class="btn-Notification" id="notifications">
						<i class="zmdi zmdi-notifications"></i>
						
						<div class="mdl-tooltip" for="notifications">Notificationes</div>
					</li>
					<li class="btn-exit" id="btn-exit">
						<i class="zmdi zmdi-power"></i>
						<div class="mdl-tooltip" for="btn-exit">Cerrar Sesion</div>
					</li>
					<li class="text-condensedLight noLink" ><small>Administrador</small></li>
					<li class="noLink">
						<figure>
							<img src="assets/img/avatar-female.png" alt="Avatar" class="img-responsive">
						</figure>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<section class="full-width navLateral">
		<div class="full-width navLateral-bg btn-menu"></div>
		<div class="full-width navLateral-body">
			<div class="full-width navLateral-body-logo text-center tittles">
				<i class="zmdi zmdi-close btn-menu"></i> Ajustes de inventario
			</div>
			<figure class="full-width" style="height: 77px;">
				<div class="navLateral-body-cl">

					<img src="assets/img/avatar-female.png" alt="Avatar" class="img-responsive">
				</div>
				<figcaption class="navLateral-body-cr hide-on-tablet">
					<span>
						Ruth<br>
						<small>Administrador</small>
					</span>
				</figcaption>
			</figure>
			<div class="full-width tittles navLateral-body-tittle-menu">
				<i class="zmdi zmdi-lamp"></i><span class="hide-on-tablet">&nbsp; Nemilis</span>
			</div>
			<nav class="full-width">
				<ul class="full-width list-unstyle menu-principal">
					<li class="full-width">
						<a href="estadisticas.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-sort-amount-asc"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								Estadisticas
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a  class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-accounts-list"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								Administracion
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="administrador.php" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-account-add"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										Registrar
									</div>
								</a>
							</li>
						</ul>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-account-circle"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								Médicos
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="medicos.html" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-accounts-add"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										Registrar
									</div>
									<a href="perlme.html" class="full-width">
										<div class="navLateral-body-cl">
											<i class="zmdi zmdi-face"></i>
										</div>
										<div class="navLateral-body-cr hide-on-tablet">
											Perfil Médico
										</div>
										<a href="nueRece.html" class="full-width">
											<div class="navLateral-body-cl">
												<i class="zmdi zmdi-view-web"></i>
											</div>
											<div class="navLateral-body-cr hide-on-tablet">
												Nueva Receta
											</div>
									</a>
									</a>
									</ul>
								</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a  class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-accounts"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								Usuarios
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="usuarios.html" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-accounts-add"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										Registrar pacientes
									</div>
									<a href="perlpacientes.html" class="full-width">
										<div class="navLateral-body-cl">
											<i class="zmdi zmdi-mood"></i>
										</div>
										<div class="navLateral-body-cr hide-on-tablet">
											Perfil pacientes
										</div>
									</a>
						<a href="Verrece.html" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-view-web"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								Receta
							</div>
						</a>
						</a>
						</ul>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a  class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-library"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								Inventario
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="inventario.php" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-washing-machine"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										Consultar inventario
									</div>
									<a href="entradas.html" class="full-width">
										<div class="navLateral-body-cl">
											<i class="zmdi zmdi-square-right"></i>
										</div>
										<div class="navLateral-body-cr hide-on-tablet">
											Entradas inventario
										</div>
									</a>
						<a href="salidas.html" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-long-arrow-left"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								Salidas inventario
							</div>
						</a>
						</ul>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a  class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-wrench"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								Ajustes
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="actualinventario.php" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-wrench"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										Ajustes de inventario
									</div>
									<a href="ajustesUsus.html" class="full-width">
										<div class="navLateral-body-cl">
											<i class="zmdi zmdi-wrench"></i>
										</div>
										<div class="navLateral-body-cr hide-on-tablet">
											Ajustes de pacientes
										</div>
									</a>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</section>
	<section class="full-width pageContent">
		<section class="full-width header-well">
			<br/>
			<pre> 
				&nbsp; <h4 class="text-center tittles">El sistema permite eliminar registros de Inventario de la institución. <br/>Funcion solo para administradores.</h4>	
			</pre>
		</section>
			<div class="mdl-tabs__panel is-active" id="tabNewClient">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Eliminar producto
							</div>
							<div class="full-width panel-content">
								<form action="admin.php" method="post">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text"  id="nombre" name="nombre">
										<label class="mdl-textfield__label" for="nombre">Nombre medicamento</label>
										<span class="mdl-textfield__error">Nombre Invalido</span>
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" id="presentacion" name="presentacion">
										<label class="mdl-textfield__label" for="presentacion">Presentación</label>
										<span class="mdl-textfield__error">Presentación Invalida</span>
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text"  id="categoria" name="categoria">
										<label class="mdl-textfield__label" for="categoria">Categoria</label>
										<span class="mdl-textfield__error"> Categoria Invalido</span> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" id="lote" name="lote">
										<label class="mdl-textfield__label" for="lote">Lote</label>
										<span class="mdl-textfield__error">Lote Invalido</span>
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" id="sector" name="sector">
										<label class="mdl-textfield__label" for="sector">Sector</label>
										<span class="mdl-textfield__error">Sector Invalido</span>
									</div>
									<h5 class="text-condensedLight">Fecha</h5>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input type="date" class="mdl-textfield__input" name="date">
                                </div>
								<div class="mdl-textfield mdl-js-textfield">
                                    <select class="mdl-textfield__input" name="estado">
                                        <option value="" disabled="" selected="">Selecciona estado</option>
                                        <option value="Activo">Activo</option>
                                        <option value="Inactivo">Inactivo</option>
                                    </select>
                                </div>
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text"  id="cantidad" name="cantidad">
                                    <label class="mdl-textfield__label" for="txtlote">Cantidad</label>
                                    <span class="mdl-textfield__error">Cantidad no valido</span>
                                </div>
									<p class="text-center">
										<button href="historialSalidas.html" class="mdl-button mdl-button--raised mdl-button--colored" id="btn-addClient">Eliminar
									</button>
									</p>
									</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			</div>
			<div id="tabListClient">
				<div class="mdl-grid">
		                <div>
						<div class="panel mdl-shadow--2dp">
							<div class="panel-tittle bg-success text-center tittles">
							Consultar
							</div>
							<div class="ful panel-content">
							<form action="historialSalidas.php" method = "post">
							<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
									<table class='mdl-data-table mdl-js-data-table mdl-shadow--2dp  table-responsive'">
											<thead><tr><th class='mdl-data-table__cell--non-numeric'>ID</th>
												<th>Nombre</th>
												<th>Direccion</th>
												<th>Telefono</th>
												<th>Correo</th>
												<th>Usuario</th>
												<th>Password</th>
												<th>Seleccionar</th>
											</tr></thead><tbody>
											</tbody>
											
								<?php

									try 
									{
										
										$conMySQL = new PDO("mysql:host=localhost;port=3306;dbname=inventario","root","");
										$conMySQL->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
										$conMySQL->exec("SET CHARACTER SET UTF8");
										
										$sentenciaSQL= "SELECT * FROM  administradores";
										foreach($conMySQL->query($sentenciaSQL) as $fila)
										{
											echo "
											<tr>
												<td>".$fila['id']."</td>
												<td>".$fila['nombre']."</td>
												<td>".$fila['direccion']."</td>
												<td>".$fila['telefono']."</td>
												<td>".$fila['correo']."</td>
												<td>".$fila['usuario']."</td>
												<td>".$fila['password']."</td></td><td><input type='checkbox' id='cbox1' name='eliminar[]' value='".$fila['id']."'></td>
												";
										
										}
										
									}
									catch (PDOException $e)
									{

										printf ("¡Error!: ".$e->getMessage()."<br/>");
										die();

									}
									finally 
									{
										$conMySQL = null;
									}

									?>
								</table>
								<br>
								<div>
									<input class="mdl-button mdl-button--raised mdl-button--colored" style="WIDTH: 170px position= "relative"; style="margin-left: 10px" type="submit" value="Recargar" name="eliminar" onclick="reload()">
									<br>
									<br>
									<button class="mdl-button mdl-button--raised mdl-button--colored" style="WIDTH: 170px; style="margin-left: 10px" type="submit" value="Eliminar">Eliminar</button>
								</div>
								</div>
									</form>
									<?php

									$bd_host = "127.0.0.1";
									$bd_user = "root";
									$bd_pass = "";
									$bd_name = "inventario";
									$conexion = new mysqli($bd_host,$bd_user,$bd_pass,$bd_name);
									if($conexion-> connect_errno){
										die("Fallo:(".$conexion->mysqli_connect_errno().")".$conexion-> mysqli_connect_errno());
									}

								if(isset($_POST['eliminar'])){
									if(empty($_POST['eliminar'])){
										echo "Hola";
								
									}else{
										foreach($_POST['eliminar'] as $id_borrar){
											$borrarAlumnos = $conexion->query("DELETE FROM administradores WHERE  id='$id_borrar'");
										}
									}
								}

								?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>