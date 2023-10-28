@extends('layouts.default')
{{-- Page title --}}
@section('title', 'Material')

{{-- Page content --}}
@section('content')

<!--Parte do cabeçalho da pagina-->
<nav class="container">
    <x-nav-material/>
 </nav>   
    
<section>
  <!--Inicio da Tabela-->
   <div class="table-responsive">
      <table class="table table-bordered">
          <caption>Materiais</caption>
          <thead class="table-dark">
              <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Descrição</th>
                  <th scope="col">Descrição</th>
                  <th scope="col">Quantidade</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($materials as $material)
                  <tr>
                      <td> {{ $material->id }} </td>
                      <td> {{ $material->nameidentification }} </td>
                      <td> {{ $material->descriptionMaterial}} </td>
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
</section>  
@endsection