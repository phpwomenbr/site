---
extends: _layouts.master
---
@section('content')
<section class="wrapper style1">
	<div class="container">
		<h2>Junte-se a nós =)</h2>
		<div class="row">
		<p>
			Para melhorar a participação de mulheres no cenário PHP.<br>
			É muito fácil fazer parte do grupo, preencha o formulário com seus dados de contato, quando tivermos novidades enviamos para você =)
		</p>
		</div>

		<div class="12u">
			<form name="form" id="form" enctype="text/plain">
				<div class="row">
					<div class="4u">
						<input type="text" name="nome" id="nome" placeholder="Nome" required/>
					</div>
					<div class="4u">
						<input type="email" name="email" id="email" placeholder="Email" required/>
					</div>
				</div>
				<div class="row">
					<div class="4u">
						<input type="text" name="cidade" id="cidade" placeholder="Cidade / Estado " required/>
					</div>
					<div class="4u">
						<input type="number" name="idade" id="idade" placeholder="Sua idade" required/>
					</div>
				</div>
				<div class="row">
					<div class="4u">
					<label>Quero receber sobre:</label>
						<input type="checkbox" name="sobre" value="116" > Reuniões<br>
						<input type="checkbox" name="sobre" value="117" > Eventos<br>
						<input type="checkbox" name="sobre" value="118" > Cursos<br>
					</div>
				</div>
				<div class="row half">
					<div class="12u">
						<ul class="actions">
							<li><input type="submit" id="submit" class="button alt" value="Enviar" /></li>
						</ul>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
<script type="text/javascript">
$(document).ready(function(){
	$("#form").submit(function(e){
		e.preventDefault();
		var sobre = [];
		$("input[name='sobre']:checked").each(function(){
			sobre.push(this.value);
		})
		$.ajax({
			url: 'https://cloud.phpwomen.org.br/ocs/v2.php/apps/forms/api/v1.1/submission/insert',
			crossDomain: true,
      		headers: {
				'OCS-APIRequest': true
			},
			type : "POST",
			dataType : 'json',
			data : {"formId":11,"answers":{"66":[$("#nome").val()],"67":[$("#email").val()],"68":[$("#cidade").val()],"69":["idade"],"72":sobre}},
			success : function(result) {
				console.log(result);
			},
			error: function(xhr, resp, text) {
				console.log(xhr, resp, text);
			}
		})
		$('#form *').fadeOut(2000)
		$('#form').prepend('Obrigada! Seu envio foi concluído =) ');
	});
});
</script>
@endsection