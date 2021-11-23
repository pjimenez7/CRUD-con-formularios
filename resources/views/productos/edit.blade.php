
@extends("../layouts.plantilla")

@section ("cabecera")
EDITAR REGISTROS
@endsection




@section("contenido")

<form method="post" action="/productos/{{$producto->id}}">
<table>
    <tr>
        <td>Nombre:</td>
        <td>
            <input type="text" name="NombreArticulo" value="{{$producto->NombreArticulo}}" >
            <input type="hidden" name="_method" value="PUT">
            {{csrf_field()}}
        </td>    
    </tr>
    <tr>
        <td>Sección</td>
        <td><input type="text" name="Seccion" value="{{$producto->Seccion}}"></td>
    </tr>

    <tr>
        <td>Precio</td>
        <td><input type="text" name="Precio" value="{{$producto->Precio}}"></td>
    </tr>

    <tr>
        <td>Fecha</td>
        <td><input type="text" name="Fecha" value="{{$producto->Fecha}}"></td>
    </tr>

    <tr>
        <td>PaisOrigen</td>
        <td><input type="text" name="PaisOrigen" value="{{$producto->PaisOrigen}}"></td>
    </tr>
    <tr>
       <td> <input type="submit" name="enviar" values="Actualizar"></td> 
       <td><input type="reset" name="Borrar" value="Borrar campos"></td>
       
    </tr>
    
    
</table>
   
</form>
<form method="post" action="/productos/{{$producto->id}}">
    <input type="hidden" name="_method" value="DELETE">
    {{csrf_field()}}
    <input type="submit"  value="Eliminar registro">
</form>
@endsection




@section("pie")
Altra Corporación. Prácticas de CRUD. Todos los derechos reservados.
@endsection