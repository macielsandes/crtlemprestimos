@extends('layouts/default')
{{-- Page title --}}
@section('title', 'Home')

{{-- Page content --}}
@section('content')
   
    <!-- Dados da pagina -->
    <div class="container mt-3">
      <h2>Material</h2>   
  </div>
      
  <div class="container mt-6 py-3">      
              <div class="row d-flex bd-highlight">               
                  <!--Botao para cadastro de novo usuario--> 
                  <div class="col"> 
                    <button class="btn btn-primary rounded-pill px-3" href="{{ route('materials.create') }}" type="button">Novo</button> 
                  </div>
                  <div class="col"> 
                      <a class="btn btn-primary" href="{{ route('materials.create') }}" role="button">Novo Material</a>          
                  </div>  
                  
                  <!--Div da barra de pesquisa-->     
                  <div class="col">                          
                      <form class=" d-flex ms-auto p-2 bd-highlight" action="{{ route('materials.index') }}" method="get">
                          <input class="form-control me-2" type="search" name ="search" placeholder="Pesquisar" aria-label="Pesquisar">                        
                              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>                     
                      </form>
                  </div>
              </div>
      </div>
   
  <!--Inicio da Tabela-->
   <div class="table-responsive">
      <table class="table table-bordered">
          <caption>Materiais</caption>
          <thead class="table-dark">
              <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Descrição</th>
                  <th scope="col">Numero de Serie</th>
                  <th scope="col">Quantidade</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($materials as $material)
                  <tr>
                      <td> {{ $material->id }} </td>
                      <td> {{ $material->description }} </td>
                      <td> {{ $material->numberassets }} </td>
                      <td>{{ $material->qty }} </td>
                      <td> <a href="{{ route('materials.edit', $material->id) }}">Editar></a> </td>
                      <td> <a href="{{ route('materials.show', $material->id) }}">Detalhes></a> </td>
                  </tr>
              @endforeach
          </tbody>
      </table>
  </div>
  
      <div class="container mt-6">
          <ul class="pagination  justify-content-center">
              <li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Próxima</a></li>
            </ul>
      </div>
  
  </div>    
@endsection