---
layout: default
url: "/joinus"
---
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
			<form name="gform" id="gform" enctype="text/plain" action="https://docs.google.com/forms/d/e/1FAIpQLSdfL_6GnE12yiY0qleLMVAOrtj6vmtV7GIOBq8MJIRa41-TlA/formResponse?" target="hidden_iframe" onsubmit="submitted=true;">
					<div class="row">
						<div class="4u">
							<input type="text" name="entry.121771905" id="entry.121771905" placeholder="Nome" required/>
						</div>
						<div class="4u">
							<input type="email" name="entry.1211919314" id="entry.1211919314" placeholder="Email" required/>
						</div>
					</div>
					<div class="row">
						<div class="4u">
							<input type="text" name="entry.51849938" id="entry.51849938" placeholder="Cidade / Estado " required/>
						</div>
						<div class="4u">
							<input type="email" name="entry.364574701" id="entry.364574701" placeholder="Sua idade" required/>
						</div>
					</div>
					<div class="row">
						<div class="4u">
						<label>Quero receber sobre:</label>
							<input type="checkbox" name="entry.1138873067" value="Reuniões" required > Reuniões<br>
							<input type="checkbox" name="entry.1138873067" value="Hangouts" required > Hangouts<br>
							<input type="checkbox" name="entry.1138873067" value="Eventos" required > Eventos<br>
							<input type="checkbox" name="entry.1138873067" value="Cursos" required > Cursos<br>
							<input type="checkbox" name="entry.1138873067" value="Todas" required > Todas as anteriores
						</div>
					</div>
				<div class="row half">
					<div class="12u">
						<ul class="actions">
							<li><input type="submit" class="button alt" value="Enviar" /></li>
						</ul>
					</div>
				</div>
			</form>
			<iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted) {}"></iframe>
			<script type="text/javascript">var submitted=false;</script>
			<script type="text/javascript">
			  $('#gform').on('submit', function(e) {
			  $('#gform *').fadeOut(2000);
			  $('#gform').prepend('Obrigada! Seu envio foi concluído =) ');
			  });
			</script>
		</div>
	</div>
</section>
