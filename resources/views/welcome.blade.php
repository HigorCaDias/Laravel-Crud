
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetinho Laravel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <link href="{{URL::asset('/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"></script>
</head>
<body>
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fas fa-film mr-2"></i>
                Catalog-Z
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-1 active" aria-current="page" href="index.html">Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-2" href="videos.html">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="contact.html">Contact</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/hero.jpg">
        <form class="d-flex tm-search-form">
            <input class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>
    <div class="container-fluid tm-container-content tm-mt-60">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado">Cadastro marca Produto</button>
        <div class="row mb-4">
    <div class="container-fluid tm-container-content tm-mt-60">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastroProduto">teste</button>
        <div class="row mb-4">
            <div class="col table-responsive" style="text-align: center">
            <table class="table table-striped table-hover">
                <h4>Titulo</h4>
                        <thead class="tbl-cabecalho">
                            <tr>
                                <th scope="col">Marca</th>
                                <th scope="col">Produto</th>
                                <th scope="col">Estoque</th>
                                <th scope="col">Valor pago</th>
                                <th scope="col">Valor revenda</th>
                                <th scope="col">Deletar</th>
                                <th scope="col">Editar</th>
                            </tr>
                        </thead>
                        <!-- Para exibir os dados de uma tabela dentro da view de forma direta -->
                        @foreach ($produto as $produto)
                        <tbody>
                            <!-- primeiro campo se passa a tabela origem e a coluna que está sendo referenciada no caso
                                tabela marca na coluna marca sendo exibida na tabela produto (chave estrangeira) -->
                            <td>{{ $produto ->marca->marca }}</td>
                            <td>{{ $produto ->produto }}</td>
                            <td>{{ $produto ->Estoque }}</td>
                            <td>{{ $produto ->valorPago }}</td>
                            <td>{{ $produto ->valorRevenda }}</td>
                            <td>
                                <!-- Criação do Botao Delete, é necessario passar a rota que será redirecionado
                                e tambem a tabela logo em seguida do campo $produto(tabela)->id(campo) -->
                                <form action="/cadastroDeletarMarca/{{$produto->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
                                </form>
                            </td>
                            <td><a href="edit/{{ $produto->id }}" class="btn btn-info edit-btn">Editar</a></td>
                        </tbody>
                        @endforeach

            </table>
         </div>
         <br>
            <h2 class="col-6 tm-text-primary">
                Latest Photos
            </h2>
            <div class="col-6 d-flex justify-content-end align-items-center">
                <form action="" class="tm-text-primary">
                    Page <input type="text" value="1" size="1" class="tm-input-paging tm-text-primary"> of 200
                </form>
            </div>
        </div>
        <div class="row tm-mb-90 tm-gallery">
        	<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/img-03.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Clocks</h2>
                        <a href="photo-detail.html">View more</a>
                    </figcaption>
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">18 Oct 2020</span>
                    <span>9,906 views</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/img-04.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Plants</h2>
                        <a href="photo-detail.html">View more</a>
                    </figcaption>
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">14 Oct 2020</span>
                    <span>16,100 views</span>
                </div>
            </div>
        </div> <!-- row -->
        <div class="row tm-mb-90">
            <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
                <a href="javascript:void(0);" class="btn btn-primary tm-btn-prev mb-2 disabled">Previous</a>
                <div class="tm-paging d-flex">
                    <a href="javascript:void(0);" class="active tm-paging-link">1</a>
                    <a href="javascript:void(0);" class="tm-paging-link">2</a>
                    <a href="javascript:void(0);" class="tm-paging-link">3</a>
                    <a href="javascript:void(0);" class="tm-paging-link">4</a>
                </div>
                <a href="javascript:void(0);" class="btn btn-primary tm-btn-next">Next Page</a>
            </div>
        </div>
    </div> <!-- container-fluid, tm-container-content -->
      <!-- Modal -->
      <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="TituloModalCentralizado">Cadastre a marca</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/cadastroMarca">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Marca</label>
                      <input type="text" class="form-control" id="marcaProduto" name="marcaProduto">
                      <small id="emailHelp" class="form-text text-muted"> </small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">classe</label>
                      <input type="text" class="form-control" id="classeProduto" name="classeProduto">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar Cadastro</button>
                    <button type="submit" class="btn btn-primary">Cadastrar!</button>
                </form>
                </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="cadastroProduto" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="cadastroProduto">Cadastre a marca</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/cadastroProduto">
                    <!--Chave necessaria para segurança do Laravel-->
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Produto</label>
                      <input type="text" class="form-control" id="produto" name="produto">
                      <small id="emailHelp" class="form-text text-muted"> </small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Marca do produto</label>
                      <select class="form-select" aria-label="Default select example" name="idMarca" id="idMarca">
                        <!-- Referencia a varivel dentro do Controller-->
                        @foreach ($marca as $marca)
                        <!-- Busca o valor o campo ID da tabela Marca e dentro do option é o campo marca dentro da tabela-->
                        <option value="{{$marca->id}}"> {{$marca->marca}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Estoque</label>
                      <input type="text" class="form-control" id="Estoque" name="Estoque">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Valor pago</label>
                      <input type="text" class="form-control" id="valorPago" name="valorPago">
                      <small id="emailHelp" class="form-text text-muted"> </small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Valor revenda</label>
                      <input type="text" class="form-control" id="valorRevenda" name="valorRevenda">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar Cadastro</button>
                    <button type="submit" class="btn btn-primary">Cadastrar!</button>
                </form>
                </div>
          </div>
        </div>
      </div>
    <footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer">
        <div class="container-fluid tm-container-small">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">About Catalog-Z</h3>
                    <p>Catalog-Z is free <a rel="sponsored" href="https://v5.getbootstrap.com/">Bootstrap 5</a> Alpha 2 HTML Template for video and photo websites. You can freely use this TemplateMo layout for a front-end integration with any kind of CMS website.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">Our Links</h3>
                    <ul class="tm-footer-links pl-0">
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Our Company</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <ul class="tm-social-links d-flex justify-content-end pl-0 mb-5">
                        <li class="mb-2"><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
                        <li class="mb-2"><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                        <li class="mb-2"><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
                        <li class="mb-2"><a href="https://pinterest.com"><i class="fab fa-pinterest"></i></a></li>
                    </ul>
                    <a href="#" class="tm-text-gray text-right d-block mb-2">Terms of Use</a>
                    <a href="#" class="tm-text-gray text-right d-block">Privacy Policy</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-7 col-12 px-5 mb-3">
                    Copyright 2020 Catalog-Z Company. All rights reserved.
                </div>
                <div class="col-lg-4 col-md-5 col-12 px-5 text-right">
                    Designed by <a href="https://templatemo.com" class="tm-text-gray" rel="sponsored" target="_parent">TemplateMo</a>
                </div>
            </div>

        </div>


    </footer>

    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>
