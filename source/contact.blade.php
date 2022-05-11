@extends('_layouts.master')

@section('content')
<section class="wrapper style1">
	<div class="container">
		<h2>Contate-nos</h2>
		<div class="row">
		<p>Caso você tenha alguma dúvida, sugestão ou crítica, entre em contato conosco preenchendo nosso formulário.</p>
		</div>
		<div class="row">
    	@include('_layouts.master.form_contact')
		</div>
	</div>
</section>
@endsection