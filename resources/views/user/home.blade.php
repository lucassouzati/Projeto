	@extends('layout.inicio_painel')

	@section('content')
	      <!-- CONTEÚDO -->
	<div class="right_col" role="main">
		<div id="works"  class=" clearfix grid">
			<!-- Galeria aqui -->
						<select id="company2" class="selectpicker" data-style="btn-primary" multiple>
						  <option selected="true" >TUDO</option>
						  <option>Buick [GM]</option>
						  <option>Honda</option>
						  <option>Ford</option>
						</select>
						<select id="company2" class="selectpicker" data-style="btn-primary" multiple>
							<option selected="true" disabled>TUDO</option>
							<option>Buick [GM]</option>
							<option>Honda</option>
							<option>Ford</option>
						</select>
						<button type="button"  class="btn btn-success" onclick="Mudarestado('minhaDiv')">Mostrar/Ocultar Preferidos</button>

					<div class="row line-row">
						<div class="hr">&nbsp;</div>
					</div>
					<div class="panel panel-primary">
					</div>
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div>
			<div id="minhaDiv"  style="display:none">
				<h3> Seus preferidos: </h3>
				<div class="row line-row">
					<div class="hr">&nbsp;</div>
				</div>
				<div class="row">
					<?php foreach ($eventos as $eventos): ?>
					<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<img src="{!!$eventos->foto!!}" id="{!!$eventos->idevento!!}" alt="...">
								<div class="caption">
									<h2>{!! $eventos->nome !!}</h2>
									<p>{!! $eventos->descricaoCategoria !!}</p>
									<p><a href="{{url('user/confirm')}}/{{ Auth::user()->id }}&{!!$eventos->idevento!!}&{!!$eventos->idanunciante!!}" class="btn btn-primary" role="button">Confirmar Presença</a> <a href="{{url('user/details/')}}/{!!$eventos->idevento!!}" class="btn btn-default" role="button">Detalhes</a></p>
								</div>
							</div>
						</div>
						<?php endforeach; ?>

				</div>
				<div class="panel panel-primary">
				</div>
			</div>
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div>


		<div id="app">
		<div class="form-group col-sm-12">
		    <label for="search">Pesquisar</label>
		    <input type="text" class="form-control" id="search" placeholder="Pesquisar" v-model="search">
		</div>
		@{{events | json}}
		<div class="col-sm-6 col-md-4" v-for="event in events | filterBy search in 'nome, descricao'">
			<div class="thumbnail">
				<img :src="event.foto" :id="event.idevento" alt="...">
				<div class="caption">
					<h2>@{{ event.name }}</h2>
					<p><a href="#" class="btn btn-primary" role="button">Confirmar Presença</a> <a href="{{url('user/details/')}}" class="btn btn-default" role="button">Detalhes</a></p>
				</div>
			</div>
		</div>
		</div>
	</div>

			<!-- <div class="row">
				<?php foreach ($tudo as $tudo): ?>
			  <div class="col-sm-6 col-md-4">
						<div class="thumbnail">
				      <img src="{!!$tudo->foto!!}" id="{!!$tudo->idevento!!}" alt="...">
				      <div class="caption">
				        <h2>{!! $tudo->nome !!}</h2>
				        <p>{!! $tudo->descricaoCategoria !!}</p>
				        <p><a href="{{url('user/confirm')}}/{{ Auth::user()->id }}&{!!$tudo->idevento!!}&{!!$tudo->idanunciante!!}" class="btn btn-primary" role="button">Confirmar Presença</a> <a href="{{url('user/details/')}}/{!!$tudo->idevento!!}" class="btn btn-default" role="button">Detalhes</a></p>
				      </div>
				    </div>
				  </div>
					<?php endforeach; ?>
			</div> -->

	    <!-- Fim da galeria -->
		</div>
	</div>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.28/vue.min.js"></script>
	<script>
		new Vue({
		  el: '#app',
		  data: {
		    events: <?= json_encode($tudo) ?>
		  }
		});
	</script>
	@endsection
