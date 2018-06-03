<!DOCTYPE html>
<html>
	<head>
		<meta content="text/html;" http-equiv="content-type" charset="utf-8">
	</head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/material.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery-3.3.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<body>
			<section class="formSection pb-50 pt-50">
				<div class="formBackground">
					<div class="container">
						<div class="row">
							<h1>
							Formulario de empleo
							</h1>
							<form class="styleForm" id="formulario">
								<div class="fieldForm">
									<div class="container">
										<div class="row">
											<div class="col-md-2 col-sm-2 col-xs-2">
												<p>Datos personales</p>
											</div>
											
											<div class="col-md-offset-10 col-sm-offset-10 col-xs-offset-10">
											</div>
										</div>
									</div>
									<div class="container">
										<div class="row">
											<div class="col-md-4 col-sm-4 col-xs-4 marginInputForm">
												<input type="text" class="formStyle" name="nombre" placeholder="Nombre"  required>
											</div>
											<div class="col-md-4 col-sm-4 col-xs-4 marginInputForm">
												<input type="text" class="formStyle" name="apellidos" placeholder="Apellidos"  required>
											</div>
											<div class="col-md-4 col-sm-4 col-xs-4 marginInputForm">
												Sexo:
												<label class="radio-inline"><input type="radio" value="masculino" name="sexo" checked>Masculino</label>
												<label class="radio-inline"><input type="radio" value="femenino" name="sexo">Femenino</label>
											</div>
										</div>
									</div>
									<div class="container">
										<div class="row">
											<div class="col-md-4 col-sm-4 col-xs-4 marginInputForm">
												<input type="text" class="formStyle" name="estadoCivil"placeholder="Estado Civil"  required>
											</div>
											<div class="col-md-4 col-sm-4 col-xs-4 marginInputForm">
												<input type="text" class="formStyle" name="dni" placeholder="Dni"  required>
											</div>
											<div class="col-md-4 col-sm-4 col-xs-4 marginInputForm">
												<input type="text" class="formStyle" name="telefono" placeholder="Telefono" aria-describedby="inputGroupPrepend2" required>
											</div>
										</div>
									</div>
									<div class="container">
										<div class="row">
											<div class="col-md-3 col-sm-3 col-xs-3 marginInputForm">
												<input type="text" class="formStyle listener_pais" name="pais"placeholder="Pais"  required>
											</div>
											<div class="col-md-3 col-sm-3 col-xs-3 marginInputForm">
												<input type="text" class="formStyle" name="provincia" placeholder="Provincia" aria-describedby="inputGroupPrepend2" required>
											</div>
											<div class="col-md-3 col-sm-3 col-xs-3 marginInputForm">
												<input type="text" class="formStyle" name="ciudad" placeholder="Ciudad" aria-describedby="inputGroupPrepend2" required>
											</div>
											<div class="col-md-3 col-sm-3 col-xs-3 marginInputForm">
												<input type="text" class="formStyle" name="calle" placeholder="Calle" aria-describedby="inputGroupPrepend2" required>
											</div>
										</div>
									</div>
								</div>
								<div class="fieldForm">
									<div class="container">
										<div class="row">
											<div class="col-md-2 col-sm-2 col-xs-2">
												<p>Objetivo Laboral</p>
											</div>
											<div class="col-md-offset-10 col-sm-offset-10 col-xs-offset-10">
											</div>
										</div>
									</div>
									<div class="container">
										<div class="row">
											<div class="col-md-6 col-sm-6 col-xs-6 marginInputForm">
												<textarea class="formStyle" name="objetivo" rows="5" maxlength="200"></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="fieldForm">
									<div class="container">
										<div class="row">
											<div class="col-md-2 col-sm-3 col-xs-3">
												<p>Experiencia Laboral</p>
											</div>
											<div class="col-md-1 col-sm-3 col-xs-3 marginInputForm">
												<p><button class="botonBorrar" id="addExpLaboral"><i  class="glyphicon glyphicon-plus" aria-hidden="true"></i></button></p>
											</div>
											<div class="col-md-9 col-sm-6 col-xs-6">
											</div>
										</div>
									</div>
									<div id="divExperiencia">
										<div class="container" >
											<div class="row">
												<div class="col-md-4 col-sm-4 col-xs-4 marginInputForm">
													<input type="text" class="formStyle" id="nombreEmpresa" name="nombreEmpresa" placeholder="Nombre de la empresa" required>
												</div>
												<div class="col-md-4 col-sm-4 col-xs-4 marginInputForm">
													<input type="text" class="formStyle" name="actividadEmpresa" placeholder="Cantidad de años"  required>
												</div>
												<div class="col-md-3 col-sm-3 col-xs-3 marginInputForm">
													<input type="text" class="formStyle" name="puesto0" placeholder="Puesto" aria-describedby="inputGroupPrepend2" required>
												</div>
												<div class="col-md-1  col-sm-1 col-xs-1 marginInputForm">
													<button class="botonBorrar delExpLaboral"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i></button>
												</div>
											</div>
										</div>
										<div class="container" >
											<div class="row">
												<div class="col-md-3 col-sm-3 col-xs-3 marginInputForm">
													<input type="text" class="formStyle" name="nivelEmpresa0" placeholder="Nivel" required>
												</div>
												<div class="col-md-3 col-sm-3 col-xs-3 marginInputForm">
													<input type="text" class="formStyle" name="paisEmpresa0" placeholder="Pais"  required>
												</div>
												<div class="col-md-3 col-sm-3 col-xs-3 marginInputForm">
													<input type="text" class="formStyle" name="desdeEmpresa0" placeholder="Desde"  required>
												</div>
												<div class="col-md-3 col-sm-3 col-xs-3 marginInputForm">
													<input type="text" class="formStyle" name="hastaEmpresa0" placeholder="Hasta"  required>
												</div>
											</div>
										</div>
										<div class="container" >
											<div class="row">
												<div class="col-md-3 col-sm-3 col-xs-3 marginInputForm">
													<input type="text" class="formStyle" name="areaPuestoEmpresa0" placeholder="Area" required>
												</div>
												<div class="col-md-3 col-sm-3 col-xs-3 marginInputForm">
													<input type="text" class="formStyle" name="descripcionEmpresa0" placeholder="Descripcion"  required>
												</div>
												<div class="col-md-3 col-sm-3 col-xs-3 marginInputForm">
													<input type="text" class="formStyle" name="personasACargoEmpresa0" placeholder="Personas a cargo"  required>
												</div>
												<div class="col-md-3 col-sm-3 col-xs-3 marginInputForm">
													<input type="text" class="formStyle" name="personaDeReferenciaEmpresa0" placeholder="Persona de Referencia"  required>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="exp"></div>
								
								<div class="container">
									<div class="row">
										<div class="submitButtonForm col-md-2 col-sm-2 col-xs-2 col-md-offset-10 col-sm-2 col-sm-offset-8 col-xs-offset-8">
											<button class="btn btn-primary" type="submit">Enviar</button>
										</div>
									</div>
								</div>
							</form>
							<div id="enviado"></div>
						</div>
					</div>
					
				</div>
				
			</section>

		</body>

<script type="application/javascript" src="js/Persona.js">

</script>

<script>
    new Persona();
</script>