@extends('layouts.navbar')

@section('content')
<div class="fondo1">
    <div class="row">
        <div class="col-2">

        </div>
        <div class="col-6" id="labelp">
            <label>¿Perdiste tu mascota?</label>
        </div>
    </div>

    <div class="row">
        <div class="col-3">

        </div>
        {{-- <div class="col-6">
            @if(Auth::user())
                @if(Auth::user()->Rol == 1)
                    <button class="boton"><a href="/MascotasPerdidas/{{Auth::user()->id}}">Agregar extravío</a></button>
                @endif    
            @else
                <button class="boton"><a href="{{ route('login') }}">Agregar extravío</a></button>
            @endif
        </div> --}}
        <div class="col-6">
            <button class="boton">Agregar extravío</button>
        </div>
    </div>
    
    <div class="row" >
        <div class="col-1">

        </div>
        <div class="col-6" id="labeln">
            <label>Nosotros podemos ayudar<span class="letras_Blancas">te</span></label>
        </div>
    </div> 
</div>

<div class="fondo2">
    <div class="container1">
        <div class="row" id="superior">
            <div class="col-1">
            </div>
            <div class="col-8">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="label1">
                    <label>Somos una <b>plataforma digital</b>, donde
                    encontrarás un concentrado de las mascotas
                    pérdidas por colonias, zona o municipio.</label>
                </div>
            </div>
        </div>
        <div class="row" id="medio">
        <div class="col-1">
            </div>
            <div class="col-7">
                <div class="label2">
                    <label>Al registrar a tú mascota extravíada le
                    llegará una <b>notificación</b> a las personas
                    <b>voluntarios y rescatistas</b> que se
                    encuentren cerca de la zona para
                    <b>colaborar en su búsqueda.</b><label>
                </div>
            </div>
        </div>
        <div class="row" id="inferior">
        <div class="col-1">
            </div>
            <div class="col-7">
                <div class="label3">
                    <label>Los <b>voluntarios y rescatistas</b> serán 
                    <b>verificadas</b> a través de las reseñas
                    por otros <b>dueños</b> que le ayudaron
                    previamente en la búsqueda de su
                    mascota.</label>
                </div>
            </div>
        </div>
    </div>
</div>

<div id= "containerfon3">
    <div class="fondo3izq">

    </div>
    <div class="fondo3der">
        <div class= "labelt">
            <label>¿Cómo puedo usar la plataforma?</label>
        </div>
        <div class= "labelr">
            <label>Registrate como nuevo usuario</label>
        </div>
        <div class= "labele">
            <label>Espera un email de confirmación de cuenta</label>
        </div>
        <div class= "labela">
            <label>Al acceder nuevamente a la plataforma</label>
            <label>ya podrás registrar a tú mascota pérdida</label>
        </div>
        {{-- <br>
        <div class= "labely">
        </div> --}}
    </div>
</div>
@endsection