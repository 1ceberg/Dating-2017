@extends('client.app')

@section('content')
    <div class="content-bg">
        <div class="row map-bg">
            <div class="col-md-12">
                <div class="container">
                    <div class="col-md-2 col-sm-2" id="profileMenu">
                        @if(Auth::user())
                            @include('client.blocks.profile-sidebar')
                        @endif
                    </div>
                    <div class="col-md-10 col-sm-10" id="profileFields">
                        @yield('profileContent')
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('styles')
    <style>
        #profileFields{
            margin-top: 30px;
            margin-bottom: 30px;
        }
        header{
            font-weight: bold;
            font-size: 20px;
        }
        .info{
            margin: 5px;
        }
    </style>
@stop

@section('scripts')
    @yield('additional_scripts')
@stop