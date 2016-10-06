@extends('layout.painelanunciante')

@section('content')
      <!-- CONTEUDO -->
      <div class="right_col" role="main">

        <!-- top tiles -->
        <div class="row tile_count">
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> Total de eventos</span>
              <div class="count">{!! $total !!}</div>
            </div>
          </div>
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-clock-o"> Total Seguidores</i> </span>
              <div class="count">123.50</div>
            </div>
          </div>
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> Total Homens</span>
              <div class="count green">2,500</div>
            </div>
          </div>
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> Total Mulheres</span>
              <div class="count">4,567</div>
            </div>
          </div>
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> Total Confirmados</span>
              <div class="count">{!!$conf!!}</div>

            </div>
          </div>
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> Total Favoritados</span>
              <div class="count">7,325</div>
            </div>
          </div>

        </div>
        <!-- /top tiles -->

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="dashboard_graph">

              <div class="row x_title">
                <div class="col-md-12">
                  <h3>Visualizações <small> Último evento cadastrado.</small></h3>
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div id="placeholder33" style="height: 260px; display: none" class="demo-placeholder"></div>
                <div style="width: 100%;">
                  <div id="canvas_dahs" class="demo-placeholder" style="width: 100%; height:270px;"></div>
                </div>
              </div>

              </div>
          </div>

        </div>
        <br />

        <div class="row">


          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel tile fixed_height_320">
              <div class="x_title">
                <h2>App Versions</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h4>App Usage across versions</h4>
                <div class="widget_summary">
                  <div class="w_left w_25">
                    <span>0.1.5.2</span>
                  </div>
                  <div class="w_center w_55">
                    <div class="progress">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                        <span class="sr-only">60% Complete</span>
                      </div>
                    </div>
                  </div>
                  <div class="w_right w_20">
                    <span>123k</span>
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="widget_summary">
                  <div class="w_left w_25">
                    <span>0.1.5.3</span>
                  </div>
                  <div class="w_center w_55">
                    <div class="progress">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                        <span class="sr-only">60% Complete</span>
                      </div>
                    </div>
                  </div>
                  <div class="w_right w_20">
                    <span>53k</span>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="widget_summary">
                  <div class="w_left w_25">
                    <span>0.1.5.4</span>
                  </div>
                  <div class="w_center w_55">
                    <div class="progress">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                        <span class="sr-only">60% Complete</span>
                      </div>
                    </div>
                  </div>
                  <div class="w_right w_20">
                    <span>23k</span>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="widget_summary">
                  <div class="w_left w_25">
                    <span>0.1.5.5</span>
                  </div>
                  <div class="w_center w_55">
                    <div class="progress">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                        <span class="sr-only">60% Complete</span>
                      </div>
                    </div>
                  </div>
                  <div class="w_right w_20">
                    <span>3k</span>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="widget_summary">
                  <div class="w_left w_25">
                    <span>0.1.5.6</span>
                  </div>
                  <div class="w_center w_55">
                    <div class="progress">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                        <span class="sr-only">60% Complete</span>
                      </div>
                    </div>
                  </div>
                  <div class="w_right w_20">
                    <span>1k</span>
                  </div>
                  <div class="clearfix"></div>
                </div>

              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel tile fixed_height_320 overflow_hidden">
              <div class="x_title">
                <h2>Faixa de idades</h2>

                <div class="clearfix"></div>
              </div>
              <div class="x_content">

                <table class="" style="width:100%">
                  <tr>
                    <th style="width:37%;">
                      <p>Proporção</p>
                    </th>
                    <th>
                      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                        <p class="">Faixas</p>
                      </div>
                      <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <p class="">Percentual</p>
                      </div>
                    </th>
                  </tr>
                  <tr>
                    <td>
                      <canvas id="canvas1" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                    </td>
                    <td>
                      <table class="tile_info">
                        <tr>
                          <td>
                            <p><i class="fa fa-square blue"></i>At� 10 anos </p>
                          </td>
                          <td>30%</td>
                        </tr>
                        <tr>
                          <td>
                            <p><i class="fa fa-square green"></i>Entre 10 e 20 anos </p>
                          </td>
                          <td>10%</td>
                        </tr>
                        <tr>
                          <td>
                            <p><i class="fa fa-square purple"></i>Entre 20 e 35 anos </p>
                          </td>
                          <td>20%</td>
                        </tr>
                        <tr>
                          <td>
                            <p><i class="fa fa-square aero"></i>Entre 35 e 50 anos </p>
                          </td>
                          <td>15%</td>
                        </tr>
                        <tr>
                          <td>
                            <p><i class="fa fa-square red"></i>Acima de 50 anos </p>
                          </td>
                          <td>30%</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>

		 </div>
              </div>
            </div>
          </div>



            </div>

          </div>
        </div>
@endsection
