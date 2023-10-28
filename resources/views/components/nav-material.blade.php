<div>
        <div class="bg-light p-5 rounded">
            <h1>Material</h1>
        </div>
        <div class="container mt-6 py-3">      
            <div class="row d-flex bd-highlight">               
                <!--Botao para cadastro de novo usuario--> 
                <div class="col"> 
                    <a class="btn btn-primary rounded-pill px-3" href="{{route('materials.create')}}" role="button">Novo</a>          
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
</div>