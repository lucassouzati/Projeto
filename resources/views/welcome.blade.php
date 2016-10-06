@extends('layout.inicio')

@section('content')
<!--content-->
<div class="content">
	<div class="container">
		<!--content-top-->
		<div class="content-top">
			<div class="col-md-7 content-top1">
				<h3>Bem-vindo</h3>
				<div class="col-12 font-thin"><span class="font-semibold">GO2FUN</span>, o único que te ajuda decidir onde ir com base em suas preferências.</div>
				<p>Não importa sua preferência: seja um barzinho na sexta-feira à noite para ir com os amigos, ou um rodízio de churros para levar a família no domingo.
					Tenha acesso à todos, de maneira simples e rápida. Com filtros rápidos e inteligentes, painel personalizado, esteja sempre por dentro dos melhores eventos.
					<p align="center"> Isto é o que nós fazemos de melhor.
			</div>
			<div class="col-md-5 top-col">
				<div class="col1">
					<div class="col-md-6 col2">
						<img src="images/ic.png" alt="" >
					</div>
					<div class="col-md-6 col3">
						<img src="images/ic1.png" alt="" >
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col1">
					<div class="col-md-6 col4">
						<img src="images/ic2.png" alt="" >
					</div>
					<div class="col-md-6 col5">
						<img src="images/ic3.png" alt="" >
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!--//content-top-->
		<!--content-mid-->
		<div class="content-mid">
			<div class="col-md-4 mid">
				<a href="{{url('/user')}}"><img src="images/1.jpg" alt="" class="img-responsive">
				<div class="mid1">
					<h4>Usuário</h4>
					<i class="glyphicon glyphicon-circle-arrow-right"></i>
					<div class="clearfix"> </div>
				</div>
				</a>
			</div>
			<div class="col-md-4 mid">
				<a href="{{url('/anunc')}}"><img src="images/2.jpg" alt="" class="img-responsive">
				<div class="mid1">
					<h4>Anunciante</h4>
					<i class="glyphicon glyphicon-circle-arrow-right"></i>
					<div class="clearfix"> </div>
				</div>
				</a>
			</div>
			<div class="col-md-4 mid">
				<a href="single.html"><img src="images/4.jpg" alt="" class="img-responsive">
				<div class="mid1">
					<h4>Fotos</h4>
					<i class="glyphicon glyphicon-circle-arrow-right"></i>
					<div class="clearfix"> </div>
				</div>
				</a>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!--content-mid-->
	</div>
	<div class="content-middle">
		<div class="container">
		<div class="content-mid-top">
					<h3> Categorias</h3>
				</div>
				<div class="news">
					<div class="col-md-3 new-more">
						<div class=" new-more1" align="center">
						<div class="col-md-10 six1" >
							<h5>Balada</h5>
							<i class="fa fa-headphones  fa-5x" ></i>
							</div>
						<div class="clearfix"> </div>
					</div>
					</div>
						<div class="col-md-3 new-more">
						<div class=" new-more1" align="center">
						<div class="col-md-10 six1">
							<h5>Barzinho</h5>
								<i class="fa fa-beer  fa-5x" ></i>
						</div>
						<div class="clearfix"> </div>
					</div>
					</div>
					<div class="col-md-3 new-more">
						<div class=" new-more1" align="center">
						<div class="col-md-10 six1">
							<h5>Cinema</h5>
							<i class="fa fa-film  fa-5x" ></i>						</div>
						<div class="clearfix"> </div>
					</div>
					</div>
						<div class="col-md-3 new-more">
						<div class=" new-more1" align="center">
						<div class="col-md-10 six1">
							<h5>Fast Food</h5>
							<i class="fa fa-cutlery  fa-5x" ></i>
						</div>
						<div class="clearfix"> </div>
					</div>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="news">
					<div class="col-md-3 new-more">
						<div class=" new-more1" align="center">
						<div class="col-md-10 six1" >
							<h5>Festival</h5>
							<i class="fa fa-child  fa-5x" ></i>
							</div>
						<div class="clearfix"> </div>
					</div>
					</div>
						<div class="col-md-3 new-more">
						<div class=" new-more1" align="center">
						<div class="col-md-10 six1">
							<h5>Jogos</h5>
								<i class="fa fa-trophy  fa-5x" ></i>
						</div>
						<div class="clearfix"> </div>
					</div>
					</div>
					<div class="col-md-3 new-more">
						<div class=" new-more1" align="center">
						<div class="col-md-10 six1">
							<h5>Lanchonete</h5>
							<i class="fa fa-apple  fa-5x" ></i>						</div>
						<div class="clearfix"> </div>
					</div>
					</div>
						<div class="col-md-3 new-more">
						<div class=" new-more1" align="center">
						<div class="col-md-10 six1">
							<h5>Museu</h5>
							<i class="fa fa-institution  fa-5x" ></i>
						</div>
						<div class="clearfix"> </div>
					</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="news">

					<div class="col-md-3 new-more">
						<div class=" new-more1" align="center">
						<div class="col-md-10 six1">
							<h5>Pizzaria</h5>
							<i class="fa fa-heartbeat  fa-5x" ></i>						</div>
						<div class="clearfix"> </div>
					</div>
					</div>
						<div class="col-md-3 new-more">
						<div class=" new-more1" align="center">
						<div class="col-md-10 six1">
							<h5>Restaurante</h5>
							<i class="fa fa-money  fa-5x" ></i>
						</div>
						<div class="clearfix"> </div>
					</div>
					</div>
					<div class="col-md-3 new-more">
						<div class=" new-more1" align="center">
						<div class="col-md-10 six1" >
							<h5>Show</h5>
							<i class="fa fa-microphone  fa-5x" ></i>
							</div>
						<div class="clearfix"> </div>
					</div>
					</div>
						<div class="col-md-3 new-more">
						<div class=" new-more1" align="center">
						<div class="col-md-10 six1">
							<h5>Teatro</h5>
								<i class="fa fa-ticket  fa-5x" ></i>
						</div>
						<div class="clearfix"> </div>
					</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>

	</div>
	<!---->
	<div class="content-bottom">
		<div class="container">
			<div class="content-bottom-top">
				<div class="col-md-6 content-bottom-top1">
					<h3>texto a decidir</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</p>
				</div>
				<div class="col-md-6 bottom-co1">
					<img class="img-responsive" src="images/3.jpg" alt="">

				</div>
			</div>
		</div>
	</div>
	<!---->
</div>
<!--//content-->
@endsection
