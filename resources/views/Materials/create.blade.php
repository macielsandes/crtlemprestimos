@extends('layouts/default')
{{-- Page title --}}
@section('title', 'Material')

{{-- Page content --}}
@section('content')

      <!--Parte do cabeçalho da pagina-->
      <nav class="container">
        <h2>Material</h2>   
    </nav>
           
<!--Inicio-->
<div class="container">
    <div class="bg-light p-5 rounded">
        <div class="col-sm-8 mx-auto">               
        <h2> Novo Material</h2>
            <div class="row">
                <div class="col">
                    <form action="{{route('materials.store')}}" method="POST">
                    @csrf
                    @include('materials._partials.form')
                </form>
            </div>       
        </div>
    </div>
</div>
@endsection
