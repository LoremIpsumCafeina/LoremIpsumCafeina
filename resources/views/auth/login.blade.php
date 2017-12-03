@extends('layouts.app') @section('content')
<link rel="stylesheet" href="../../assets/css/login.css" type="text/css"/>
<style>
.background-login {
    background: #1c242f;
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
}
body {
    background: #1c242f!important;
}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel-body">
            <div class="panel-heading"><img src="#" class="logo"/></div>
				<form class="form-horizontal" method="POST" action="/logar">
					{{ csrf_field() }}

					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						<div class="col-md-7  col-md-offset-3">
							<img src="#" /><input id="email" type="text" class="form-control border-input input-color" name="numero_matricula" value="{{ old('email') }}" placeholder="Entre com sua matrícula"
							 required autofocus> @if ($errors->has('email'))
							<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
						</div>
					</div>

					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
						<div class="col-md-7  col-md-offset-3">
							<img src="#" /><input id="password" type="password" class="form-control border-input input-color" name="password" placeholder="Entre com sua senha"
							 required> @if ($errors->has('password'))
							<span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
						</div>
					</div>
                    @if (isset($retorno))
                    <div id="esconder_esta_div" class="col-md-6 col-md-offset-5">
                    {{$retorno}}
                    </div>
                    @endif
					<div class="form-group">
						<div class="col-md-6 col-md-offset-5">
							<a class="btn btn-link" style="color: white" href="{{ route('password.request') }}">
                                    Esqueceu a sua senha?
                                </a>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-7 col-md-offset-3">
							<button type="submit" class="btn btn-primary btn-full">
                                    Entrar
                                </button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="background-login"></div>
@endsection