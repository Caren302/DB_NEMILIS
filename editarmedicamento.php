<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nueva Receta</title>
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
	<form action="index.php" method="post">
	<section class="full-width container-notifications">
		<div class="full-width container-notifications-bg btn-Notification"></div>
	    <section class="NotificationArea">
	        <div class="full-width text-center NotificationArea-title tittles">Advertencias<i class="zmdi zmdi-close btn-Notification"></i></div>
	        <a href="#" class="Notification" id="notifation-unread-1">
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
	</form>
	<div class="full-width navBar">
		<div class="full-width navBar-options">
			<i class="zmdi zmdi-more-vert btn-menu" id="btn-menu"></i>	
			<div class="mdl-tooltip" for="btn-menu">Menu</div>
			<nav class="navBar-options-list">
				<ul class="list-unstyle">
					<li class="btn-Notification" id="notifications">
						<i class="zmdi zmdi-notifications"></i>
						
						<div class="mdl-tooltip" for="notifications">Notifications</div>
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
				<i class="zmdi zmdi-close btn-menu"></i> Editar registros
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
								<a href="actualinventario.php" class="full-width">
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
								<a href="ajustes.php" class="full-width">
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
    <?php

    $cnx = mysqli_connect("localhost", "root", "", "inventario" );
    $id = $_GET ['id'];
    $sql= "SELECT * FROM medicamentos WHERE id='$id'";
    $rta = mysqli_query($cnx,$sql);
    $mostrar = mysqli_fetch_row($rta)

    ?>
    <div>
        <form action="editmed.php" method="post">
        <center>
            <table class='mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive' style="width: 10%; padding" >
            <tr>
                    <th><h5> Ingresar:</h5></th>
                    <td><input type=text name="id" id="" style="visility:hidden" value="<?php echo $mostrar[0] ?>"></td>
                </tr>
                <tr>
                    <td><h5>Nombre:</h5></td>
                    <td><input type=text name="nombre" id="" value="<?php echo $mostrar[1] ?>"></td>
                </tr>
                <tr>
                    <td><h5>Presentación:</h5></td>
                    <td><input type=text name="presentacion" id="" value="<?php echo $mostrar[2] ?>"></td>
                </tr>
                <tr>
                    <td><h5>Categoria:</h5></td>
                    <td><input type=text name="categoria" id="" value="<?php echo $mostrar[3] ?>"></td>
                </tr>
                <tr>
                    <td><h5>Lote:</h5></td>
                    <td><input type=number name="lote" id="" value="<?php echo $mostrar[4] ?>"></td>
                </tr>
                <tr>
                    <td><h5>Sector:</h5></td>
                    <td><input name="sector" id="" value="<?php echo $mostrar[5] ?>"></td>
                </tr>
                <tr>
                    <td><h5>Fecha:</5></td>
                    <td><input type=date name="fecha" id="" value="<?php echo $mostrar[6] ?>"></td>
                </tr>
                <tr>
                    <td><h5>Estado:<h5></td>
                    <td><input name="estado" id="" value="<?php echo $mostrar[7] ?>"></td>
                </tr>
                <tr>
                    <td><h5>Cantidad:<h5></td>
                    <td><input type=number name="cantidad" id="" value="<?php echo $mostrar[8] ?>"></td>
                </tr>
                <tr>
                    <td ><input class="mdl-button mdl-button--raised mdl-button--colored" type=submit value="Actualizar"></td>
                    <td><a class="mdl-button mdl-button--raised mdl-button--colorred" href="inventario.php">cancelar</a></td>
                    <form action="eliminarmed.php" method="post">
<input name="borrar" type="hidden" value="<?= row['id'] ?>" />
<input type="submit" value="Borrar Registro" />
</form>
                </tr>
                </center>
            </table>
        </form>
    </div>  
    
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