
@extends("../layouts.plantilla")

@section ("cabecera")
INSERTAR REGISTROS
@endsection




@section("contenido")

<form method="post" action="/productos">
<table>
    <tr>
        <td>Nombre:</td>
        <td><input type="text" name="NombreArticulo" >{{csrf_field()}}</td>    
    </tr>
    <tr>
        <td>Sección</td>
        <td><input type="text" name="Seccion" ></td>
    </tr>

    <tr>
        <td>Precio</td>
        <td><input type="text" name="Precio" ></td>
    </tr>

    <tr>
        <td>Fecha</td>
        <td><input type="text" name="Fecha" ></td>
    </tr>

    <tr>
        <td>PaisOrigen</td>
        <td><input type="text" name="PaisOrigen" ></td>
    </tr>
    <tr>
       <td> <input type="submit" name="enviar" values="enviar"></td> 
       <td><input type="reset" name="Borrar" value="Borrar"></td>
    </tr>
    
    
</table>
   
</form>

@endsection




@section("pie")
Altra Corporación. Prácticas de CRUD. Todos los derechos reservados.
@endsection