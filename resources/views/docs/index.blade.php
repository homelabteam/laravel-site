@extends('body')
@section('rowTop')
<span class="display-4"> Documentación </span>
@endsection
@section('rowMid')
<div class="container mx-2">
	<div class="row">
		<div class="col-sm-9 ">
			<div class="row">
				<h4> Últimos subidos </h4>
			</div>
			<div class="row">
				<div class="col-sm w-25">
					icono
				</div>
				<div class="col-sm w-75">
					<p class="font-weight-normal">Nombre del recurso</p>
				</div>
			</div>
		</div>
		<div class="col-lg-3 ">
			<p class="h4 text-center">Acceso rápido</p>
			<div class="btn-group-vertical w-100">
				<button type="button" class="btn btn-outline-info btn-block border-0">Block level button</button>
				<button type="button" class="btn btn-outline-info btn-block border-0">Block level button</button>
				<button type="button" class="btn btn-outline-info btn-block border-0">Block level button</button>
				<button type="button" class="btn btn-outline-info btn-block border-0">Block level button</button>
			</div>
		</div>
	</div>
</div>



@endsection
@section('rowBot')

@endsection
