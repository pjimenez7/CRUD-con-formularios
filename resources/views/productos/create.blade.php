
@extends("../layouts.plantilla")

@section ("cabecera")
INSERTAR REGISTROS
@endsection




@section("contenido")


    <form method="POST" action="/productos" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <input accept="image/*" type="file" name="file" >
                </td>
            </tr>
        </table>

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

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection




@section("pie")
Altra Corporación. Prácticas de CRUD. Todos los derechos reservados.
@endsection