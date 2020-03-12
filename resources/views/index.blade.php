@extends(config('ayuda-dvs.layout'))




@section('content')

<div class="row">
    <div class="col-lg-6">
        <div class="jumbotron">
            <h1 class="display-6">Tutoriales y Preguntas Frecuentes</h1>
            <p class="lead">Tutoriales para usar la aplicación.</p>
            <hr class="my-4">
            <p>Encontra videos y textos sobre como usar nuestra aplicación</p>
            <a class="btn btn-primary btn-lg" href="{{ route('help.tutoriales') }}" role="button"><i class="fa fa-play"></i> Tutoriales</a>
            <a class="btn btn-primary btn-lg" href="{{ route('help.faqs') }}" role="button"><i class="fa fa-question-circle"></i> Preguntas Frecuentes</a>
          </div>
    </div>
    <div class="col-lg-6">
        <div class="jumbotron">
            <h1 class="display-6">Soporte</h1>
            <p class="lead">Ingresa en nuestro sistema de Tickets para solictar soporte sobre tu aplicación.</p>
            <hr class="my-4">
            <p>Envianos un mensaje para que nuestro equipo te contacte a la brevedad, recorda que debes estar logeado para poder acceder.</p>

            @auth

                <form id="form-support" target="_blank"action="https://soporte.dvs360.com/auth/{{ config('ayuda-dvs.key_dvs') }}/login" method="post">
                    <input type="hidden" name="user_name" value="{{ Auth::user()->user_name }}">
                    <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                    <input type="hidden" name="lastname" value="{{ Auth::user()->lastname }}">
                    <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                    {{-- <input type="submit" value="Soporte"> --}}
                </form>

                <a class="btn btn-primary btn-lg" href="#" onclick="javascript:document.getElementById('form-support').submit();" class="breadcrumb-elements-item">
                    <i class="fa fa-life-ring"></i> Ir a Soporte DVS
                </a>
                
            @endauth


          </div>
    </div>
</div>

    
@endsection