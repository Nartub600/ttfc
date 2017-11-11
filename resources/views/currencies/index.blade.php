@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-xs-4 col-xs-offset-4">
            <h3>
                Monedas
            </h3>
            <ul>
                @foreach ($currencies as $currency)
                    <li>
                        <p>
                            <a href="{{ route('currencies.show', $currency->id) }}">
                                {{ $currency->name }}
                            </a>
                        </p>
                    </li>
                @endforeach
            </ul>
            <div class="row text-center">
                {{ $currencies->links() }}
            </div>
        </div>
    </div>
@endsection
