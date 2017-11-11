@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-xs-4 col-xs-offset-4">
            <h1>
                Nombre: <strong>{{ $currency->name }}</strong>
            </h1>
            <h3>
                Volatilidad Anualizada: {{ $currency->annualizedVolatility() }}
            </h3>
            <a href="{{ $back }}">
                Volver
            </a>
        </div>
    </div>
@endsection
