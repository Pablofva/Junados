@extends('plantilla')

@section('content')
    
    <h1 class="letra-titulo"><strong>Seleccione la carrera</strong></h1>
    <!-- <form class="form-inline py-1">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">Materia</span>
                    </div>
                    <input type="text" id="myInputmate" onkeyup="filtroMateria()" class="form-control" placeholder="Buscar" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                </form> -->
                <!-- FILTRO -->

  
    <div class="row">
        @foreach ($carreras as $item)
        <div class="col-md-6">
            <a href="" class="btn btn-ingenieria botones-inicio" id="" data-toggle="modal" data-target="#Informatica" onclick="materiasAjax('{{route('materias',$item->id)}}')">
                    {{$item->nombre}}
                </a>
                

              </div>
              @endforeach
            </div>
            </div>
  
            <!-- MODAL -->
            <div class="modal fade bd-example-modal-lg" id="Informatica" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        
				  <!-- COMIENZO FILTROS -->
			  <div class="row">
            <div class="col-sm-12">

              <form class="form-inline py-1">
                  <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Mat / Año</span>
                    </div>
                    <input type="text" id="myInputmate" onkeyup="filtroMatAnio()" class="form-control mr-3" placeholder="Buscar" aria-label="Username" aria-describedby="basic-addon1">
                    <button type="button" class="btn btn-light" onclick="limpiar()">
                          <i class="fas fa-sync-alt"></i>
                    </button>
                  </div>
                </form>
            </div>
            
		  </div>
		  {{--  <!-- finfiltro////////// -->  --}}
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body table-wrapper-scroll-y my-custom-scrollbar">
		        <table id="materias" class="table table-bordered table-striped mb-0">
					<thead>

					    <tr>
					        <th>Materia</th>
					        <th>Año</th>
					        <th>Comisiones</th>
					    </tr>
					    
          </thead>
          <!-- AQUI SE LISTAN LAS MATERIAS -->
					 <tbody id="listarMaterias">
					    

					</tbody>

				</table>
              <div id="nohay">
                 <p id="filtroVacio" class="filtroVacio">

                   NO HAY MATERIAS
                 </p>
               </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		        
		      </div>
		    </div>
		  </div>
		</div>


	</div>

            
            
            
<script type="text/javascript" src="{{asset('js/filtroMatAnio.js')}}"></script>

<!-- Este script cambia el color de la cabecera - se podría usar un color distinto para cada instituto -->
<script>
  var selector = {{$carreras[0]->instituto_id}};
  if(selector == 1){
      document.getElementById("fondo-cabecera").style.backgroundColor = "#A63321";
  }else if(selector == 2){
      document.getElementById("fondo-cabecera").style.backgroundColor = "#283B8A";
  }else if(selector == 3){
      document.getElementById("fondo-cabecera").style.backgroundColor = "#8AB03F";
  }else if(selector == 4){
      document.getElementById("fondo-cabecera").style.backgroundColor = "#F39231";
  }
</script>

@endsection