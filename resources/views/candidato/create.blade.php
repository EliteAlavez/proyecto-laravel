@extends('plantilla')
@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Agregar Candidato
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" action="{{ route('candidato.store') }} " 
        enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nombrecompleto">Nombre completo:</label>
                <input type="text" id="nombrecompleto"
                 class="form-control" name="nombrecompleto" />
            </div>
            <div class="form-group">
                <label for="sexo">Sexo:</label>
                <select name="sexo">
                    <option value="H">Hombre</option>
                    <option value="M">Mujer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="foto">Foto:</label>
                <input type="file" id="foto" accept="image/png, image/jpeg" 
                 class="form-control" name="foto" onchange="loadImg()"/>
                <img id="img"  height="500px"/>
            </div>
            <div class="form-group">
                <label for="perfil">Perfil:</label>
                <input type="file" id="perfil" accept="application/pdf"
                 class="form-control" name="perfil" onchange="loadFile()" />
            </div>
            <div>
                <embed id="vistaPrevia" type="application/pdf" width="700">
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>


<script>
var MAX_SIZE = 2048;
var ONE_MB = 1000000;

let loadImage = function (e) {
    let img = document.getElementById("out-img");
    img.src = URL.createObjectURL(event.target.files[0])
}

//Previsualizar la imagen 
let loadImg = () => {
    let a = document.getElementById("foto").files[0].size;
    a = (a / 1024)
    console.log(a);
    if (a > MAX_SIZE) {
        alert("Imagen muy grande, tamaño actual " + a);
        //setear a null la eleccion
        document.getElementById('foto').value = null;
        // setear a null la imagen, en caso de que se haya elegido una anterior
        document.getElementById("out-img").style.display = 'none';
    } else {
        alert("Imagen aceptable ");
        // obtiene el id de la imagen
        let img = document.getElementById("out-img");

        //Visualizamos la imagen
        var archivo = document.getElementById("foto").files[0];
        var reader = new FileReader();
        if (foto) {
            reader.readAsDataURL(archivo);
            reader.onloadend = function () {
                document.getElementById("img").src = reader.result;
            }
        }
    }
}



//Previsualizar el pdf
let loadFile = () => {
    //Obtener el file
    let a = document.getElementById("perfil").files[0].size;
    //Dividir para tener una relacion con el tamaño de php.ini -> 2M
    a = (a / 1024)
    console.log(a);
    if (a > MAX_SIZE) {
        alert("Imagen muy grande, tamaño actual " + a + "MB");
        //setear a null la eleccion
        document.getElementById('perfil').value = null;
    } else {
        alert("Archivo aceptable ");

        //visualizamos el pdf
        var archivo = document.getElementById("perfil").files[0];
        var reader = new FileReader();
        if (perfil) {
            reader.readAsDataURL(archivo);
            reader.onloadend = function () {
                document.getElementById("vistaPrevia").src = reader.result;
            }
        }
    }

}
</script>
@endsection
