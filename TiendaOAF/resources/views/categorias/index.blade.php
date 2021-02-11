@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Categoria</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('categorias.create') }}" class="btn btn-info" >Añadir Categoria</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Descripcion</th>
             </thead>
             <tbody>
              @if($Categorias->count()>0)  
                @foreach($Categorias as $Categoria)
                {{-- dd($Categoria->nombre) --}}  
                <tr>
                  <td>{{$Categoria->nombre}}</td>
                  <td>{{$Categoria->descripcion}}</td>
                 <td><a class="btn btn-primary btn-xs" href="{{action('CategoriaController@edit', $Categoria->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                  <td>
                    <form action="{{action('CategoriaController@destroy', $Categoria->id)}}" method="post">
                     {{csrf_field()}}
                     <input name="_method" type="hidden" value="DELETE">
                     <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                   </td>
                 </tr>
                 @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>
 
          </table>
        </div>
      </div>
      {{ $Categorias->links() }}
    </div>
  </div>
</section>
@endsection