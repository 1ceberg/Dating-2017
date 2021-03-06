@extends('admin.layout')

@section('styles')

@stop

@section('content')
    <div class="container panel">
        <header class="panel-heading">
            {{ $user->first_name }} {{ $user->last_name }}
        </header>
        <div class="panel-body">
            <div class="col-md-6">
                <img src="{{ url( '/uploads/admins/'. $user->avatar ) }}">
            </div>
            <div class="col-md-6">
                <div class="row">
                    Имя / фамилия: <b>{{ $user->first_name }} {{ $user->last_name }}</b>
                </div>

                <div class="row">
                    Адрес:  <b>{{ $user->address }}</b>
                </div>

                <div class="row">
                    Контакты:  <b>{{ $user->contacts }}</b>
                </div>

                <div class="row">
                    Информация:  <b>{{ $user->info }}</b>
                </div>
            </div>
        </div>
    </div>

@stop

@section('scripts')

@stop