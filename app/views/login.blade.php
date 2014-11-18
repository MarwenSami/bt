@extends('template')

@section('contenu')
	<div class="container">
		<div class="row vertical-center-row col-md-5 col-md-offset-3" style="margin-top: 13%;">
			<div class="panel panel-info">
				<div class="panel-body">
				    {{ Form::open(array('url' => 'admin')) }}
				    	<small class="text-danger">{{$errors->first('user')}}</small>
				    	<div class="form-group {{$errors->has('user') ? 'has-error has-feedback': ''}}">
				        	{{ Form::label('user', 'Username : ') }}
				        	{{ Form::text('user', null, array('class' => 'form-control')) }}
				    	</div>
				    	<small class="text-danger">{{$errors->first('pass')}}</small>
				    	<div class="form-group {{$errors->has('pass')?'has-error has-feedback':''}}">
				        	{{ Form::label('pass', 'Password : ') }}
				        	{{ Form::password('pass', array('class' => 'form-control')) }}
				  	  	</div>
				        {{ Form::submit('Envoyer', array('class' => 'btn btn-info pull-right')) }}
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
	<style>
		body{
			background: #eaeaea;
		}
	</style>
@stop