<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.6.0.js"
  	integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  	crossorigin="anonymous"></script>
	<title>PRUEBA</title>
</head>
<body>

<div class="row small">
	
	<div class="col-8">

		<div class="row mt-3">
			<div class="col-4 text-center">
				<img src="head-logo.svg" width="100" height="100">
			</div>
			<div class="col-8">
				<div class="row">
					<h4 class="col-8">PLANILLA DE CALCULO DE PRECIOS</h4>
					<p class="col-4">LISTA DE PRECIOS REV.001</p>
				</div>				
				<form class="row">
				
					<label class="col-2 col-form-label" for="ingresoCrm">CRM Nro:</label>
					<div class="col-2">
						<input type="text" class="form-control" placeholder="CRM" id="ingresoCrm" name="ingresoCrm">
					</div>
					<label class="col-2 col-form-label" for="revCrm" class="form-label">Rev:</label>
					<div class="col-2">
						<input type="text" class="form-control" placeholder="REV" id="revCrm" name="revCrm">
					</div>
					<label class="col-2 col-form-label" for="fecha">Fecha:</label>
					<div class="col-2">
						<input type="text" class="form-control" placeholder="FECHA" id="fecha" name="fecha">
					</div>				
				
				</form>



			</div>
		</div>

		<div class="container-fluid">
				
			<table class="table table-striped text-center table-sm">
				<thead>
					<tr>
						<th>#</th>
						<th>Art.</th>
						<th>Descripcion</th>
						<th>Precio Lista</th>
						<th>Plazo</th>
						<th>Cantidad</th>
						<th>Descuento</th>
						<th>Precio Neto</th>
						<th>Subtotal</th>
						<th>Accion</th>						
					</tr>
				</thead>
				<tbody id="items"></tbody>
		        <tfoot>
		        	<tr id="footer">
	            <th scope="row" colspan="8">Comenzar a cargar items!</th>
		        	</tr>
		        </tfoot>
			</table>

			<button type="button" value="Imprimir" id="print">GUARDAR</button>

			<template id="template-carrito">
				<tr>
					<div class="input-group input-group-sm">
					<th scope="row">id</th>
					<td>Art.</td>
					<td>Descripción</td>
					<td>USD <span>400</span></td>
					<td>90 días</td>
						<td><input type="number" name="cantItem" style="width: 60px" class="btn btn-primary btn-sm" value="1"></td>
						<td><input type="number" name="descuento"style="width: 60px" class="btn btn-secondary btn-sm" value="0"></td>
					<td>USD <span>400</span></td>
					<td>USD <span>500</span></td>
					<td>
						<button class="btn btn-danger btn-sm">
							x
						</button>					
					</td>
					</div>
				</tr>
			</template>

			<template id="template-footer">
		        <th scope="row" colspan="7">Total Oferta</th>
		        <td>10</td>
		        <td class="font-weight-bold">USD <span>5000</span></td>
		        <td>
		            <button class="btn btn-danger btn-sm" id="vaciar-carrito">
		                VACIAR
		            </button>
		        </td>
			</template>

		</div>

		<form class="p-1 bg-light" method="post">
			<div class="form-group">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Buscar Producto" id="txtSearch">
				</div>
			</div>
		</form>

		<br>

		<table class='table text-center'>
			<thead>
				<tr>
					<th>REF</th>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Familia</th>
					<th>PRECIO UNIT</th>
					<th></th>
				</tr>
			</thead>	
			<tbody id='tblPrecios'>
				<tr>
					<td>REF</td>
					<td>MARCA</td>
					<td>MODELO</td>
					<td>FAMILIA</td>
					<td>PRECIO UNIT</td>
					<td>AÑADIR</td>
				</tr>
			</tbody>
		</table>

		<template id="template-precios">
			<tr>
				<td>FOXIN001</td>
				<td>Fox</td>
				<td>FT1-06I-DD-P1</td>
				<td>FT1</td>
				<td>4000 USD</td>
				<td><button class="btn btn-dark">+</button></td>
			</tr>
		</template>
	</div>

	<div class="col-4 small">
			
				<table class="table table-sm">
					<thead>
						<tr>
							<th>Art.</th>
							<th>Descripcion</th>
							<th>Precio Lista</th>
							<th >Cantidad</th>
							<th >Descuento</th>
							<th>Precio Neto</th>
							<th>Subtotal</th>
						</tr>
					</thead>
					<tbody id="itemsAntecedentes"></tbody>
				</table>

				<template id="template-carritoAntecedentes">
					<tr>
						<td>Art.</td>
						<td>Descripción</td>
						<td>USD <span>400</span></td>
						<td>Cantidad</td>
						<td>Descuento</td>
						<td>USD <span>400</span></td>
						<td>USD <span>500</span></td>
					</tr>
				</template>	
	</div>

</div>

<script src="js/app.js"></script>
</body>
</html>