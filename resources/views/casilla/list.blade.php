@extends('plantilla')
@section('content')
<style>
    .uper {
    margin-top: 40px;
    }
</style>

<div class="uper">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    <br />
    @endif

    <div class="container py-5">
        <div class="row">
            <div class="col-xl-12 text-right">
                <!-- <a href="/casilla/pdf" class="btn btn btn-dark btn-sm">Export to PDF</a> -->
                <a href="/casilla/pdf" class="btn btn btn-dark btn-sm">Export to PDF</a>
            </div>
        </div>
  </div>

<table class="table table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>UBICACION</td>
            <td colspan="2">ACTION</td>
        </tr>
    </thead>
    <tbody>
        @foreach($casillas as $casilla)
        <tr>
            <td>{{$casilla->id}}</td>
            <td>{{$casilla->ubicacion}}</td>
            <td><a href="{{ route('casilla.edit', $casilla->id)}}"
            class="btn btn-primary">Edit</a></td>
            <td>
            <form action="{{ route('casilla.destroy', $casilla->id)}}"
            method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit"
            onclick="return confirm('Esta seguro de borrar {{$casilla->ubicacion}}')" >Del</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    
</table>
<div>
@endsection