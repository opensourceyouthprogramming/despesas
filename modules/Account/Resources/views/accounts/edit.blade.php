@extends('layouts.app')

@section('title', ' | Contas | Editar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
            @endif

            <form method="POST" action="/contas/{{$conta->id}}">

                {{ method_field('PATCH') }}

                {{ csrf_field() }}

                <div class="form-group {{ $errors->has('nome') ? 'has-error' : '' }}">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{ $conta->nome }}">
                </div>

                <div class="form-group {{ $errors->has('iban') ? 'has-error' : '' }}">
                    <label for="iban">IBAN</label>
                    <input type="text" class="form-control" id="iban" name="iban" placeholder="IBAN" value="{{ $conta->iban }}">
                </div>
                
                <button type="submit" class="btn btn-default">Gravar</button>

            </form>
        </div>
    </div>
@endsection