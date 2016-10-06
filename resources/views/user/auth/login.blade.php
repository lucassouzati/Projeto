@extends('layout.inicio_semtopo')

@section('content')
<div class="blog">
  <div class="container">
      <div class="col-md-12">
        <div class="blog-grid">
            <div align="rigth">
              <div class="row line-row">
                <div class="hr">&nbsp;</div>
              </div>
              <div class="with-hover-text" align="center">
                <div class="row line-row">
                  <div class="hr">&nbsp;</div>
                </div>
                <h2>Faça seu login.</h2>
                <h5>Não possui cadastro? <a href="{{url('user/register')}}">Clique aqui</a> e faça agora. É gratis!</h5></a>
              </div>
            </div>
          </p>
          <div class="row line-row">
            <div class="hr">&nbsp;</div>
          </div>
        <div class="comment-top">
      <!---->
              <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{ url('user/login') }}" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">

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
                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-primary">
                                  ENTRAR
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
