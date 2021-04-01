@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-primary mb-4">
                <div class="card-header"><h3>{{ __('Sistema de Login') }}</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Estás Logueado!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
