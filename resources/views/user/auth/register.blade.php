@extends('layout.inicio_semtopo')

@section('content')
<div class="blog">
  <div class="container">
      <div class="col-md-12">
        <div class="blog-grid">
        <img class="img-responsive" src="/images/b1.jpg" alt="" />
        <div class="lone-line">
          <p>
            <div class="clearfix"> </div>
            <div align="rigth">
              <div class="with-hover-text" align="center">
                <h2>CADASTRAR</h2>
                <h5>Já possui cadastro? <a href="{{url('user/login')}}">Clique aqui</a> e faça login.</h5></a>
              </div>
            </div>
          </p>
          <div class="row line-row">
            <div class="hr">&nbsp;</div>
          </div>
        <div class="comment-top">
      <!---->
              <div class="panel-body">
                  <form class="form-horizontal" id="contactForm"role="form" method="POST" action="{{ url('user/register') }}" files="true" enctype="multipart/form-data">
                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="name" class="col-md-4 control-label">Nome</label>

                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>

                              @if ($errors->has('name'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="name" class="col-md-4 control-label">Sobrenome</label>

                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control" name="sobrenome" value="{{ old('sobrenome') }}" autofocus>

                              @if ($errors->has('sobrenome'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('sobrenome') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <label for="password" class="col-md-4 control-label">Sexo</label>

                          <div class="col-md-6">
                                      <label>
                                      <input type="radio" class="flat" value="F" checked name="genero"> Feminino
                                      </label>
                                      <label>
                                      <input type="radio" class="flat" value="M" name="genero"> Masculino
                                      </label>
                            </div>
                      </div>

                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">CPF</label>

                          <div class="col-md-6">
                              <input id="cpf" type="text" class="form-control" name="cpf" value="{{ old('cpf') }}">
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">Telefone</label>

                          <div class="col-md-6">
                              <input id="telefone" type="text" class="form-control" name="telefone" value="{{ old('telefone') }}">
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('cep') ? ' has-error' : '' }}">
                          <label for="cep" class="col-md-4 control-label">CEP</label>

                          <div class="col-md-6">
                              <input id="cep" type="text" class="form-control" name="cep" value="{{ old('cep') }}">
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">E-Mail</label>

                          <div class="col-md-6">
                              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                              @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <label for="password" class="col-md-4 control-label">Senha:</label>

                          <div class="col-md-6">
                              <input id="password" type="password" class="form-control" name="password">

                              @if ($errors->has('password'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                          <label for="password-confirm" class="col-md-4 control-label">Confirme sua senha:</label>

                          <div class="col-md-6">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                              @if ($errors->has('password_confirmation'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('password_confirmation') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <!-- pref[]s -->
                      <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                          <label for="password-confirm" class="col-md-4 control-label">Escolha suas preferências:</label>

                          <div class="col-md-6 panel panel-info" align="center">
                            <label class="checkbox-inline"><input type="checkbox" name="pref[]" value="10">Balada</label>
                            <label class="checkbox-inline"><input type="checkbox" name="pref[]" value="2">Barzinho</label>
                            <label class="checkbox-inline"><input type="checkbox" name="pref[]" value="8">Chopperia</label>
                            <label class="checkbox-inline"><input type="checkbox" name="pref[]" value="5">Cinema</label>
                            <label class="checkbox-inline"><input type="checkbox" name="pref[]" value="13">Exposição</label>
                            <label class="checkbox-inline"><input type="checkbox" name="pref[]" value="7">Fast Food</label>
                            <label class="checkbox-inline"><input type="checkbox" name="pref[]" value="14">Feira</label>
                            <label class="checkbox-inline"><input type="checkbox" name="pref[]" value="11">Festival</label>
                            <label class="checkbox-inline"><input type="checkbox" name="pref[]" value="15">Jogos</label>
                            <label class="checkbox-inline"><input type="checkbox" name="pref[]" value="9">Lanchonete</label>
                            <label class="checkbox-inline"><input type="checkbox" name="pref[]" value="12">Museu</label>
                            <label class="checkbox-inline"><input type="checkbox" name="pref[]" value="6">Pizzaria</label>
                            <label class="checkbox-inline"><input type="checkbox" name="pref[]" value="1">Restaurante</label>
                            <label class="checkbox-inline"><input type="checkbox" name="pref[]" value="3">Show</label>
                            <label class="checkbox-inline"><input type="checkbox" name="pref[]" value="4">Teatro</label>
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                          <label for="password-confirm" class="col-md-4 control-label">Foto de perfil:</label>

                          <div class="col-md-6">
                            <label class="checkbox-inline"><input type="file" name="img"></label>
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                          <label for="password-confirm" class="col-md-4 control-label"></label>

                          <div class="col-md-6">
                            <label class="checkbox-inline"><input type="checkbox" name="news" value="1">Aceito receber e-mails de notificação.</label>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-primary">
                                  CADASTRAR
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
    <!---->
    </div>
  </div>
      </div>
  </div>
</div>
@endsection
