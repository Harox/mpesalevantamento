@extends('layouts.app')

@section('content')


@if(Session::has('success'))
	<div class="text-center">
		<div class="alert alert-success alert-dismissible fade show fixed-top" role="alert">
			<strong>{{ Session::get('success') }}</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	</div>
@endif

@if(Session::has('error'))
	<div class="text-center">
		<div class="alert alert-error alert-dismissible fade show fixed-top" role="alert">
			<strong>{{ Session::get('error') }}</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	</div>
@endif


<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">0.00 MZN</li>
        </ol>
    </nav>

    <form  method="POST" role="form" action="{{ action('LevantamentoController@levantamento')}}">
        @csrf
        <div class="form-group">
            <h1 class="display-4">Levantamento</h1>
            <label for="phone">Telefone</label>
            <input type="number" name="phone" class="form-control" id="phone" placeholder="84xxxxxxx">
        </div>

        <div class="form-group">
            <label for="value">Valor</label>
            <input type="number" name="value" class="form-control" id="value" placeholder="0">
        </div>
        <button type="submit" class="btn btn-primary">Levantar</button>
    </form>
</div>
@endsection
