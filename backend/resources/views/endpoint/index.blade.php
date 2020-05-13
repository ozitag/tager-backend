@extends('layouts.vue')

@section('content')
    <div class="container">

        <div class="row" style="padding: 0 30px;">
            <div class="col-md-12 card" style="padding: 20px">
                <div id="app">

                </div>
            </div>
        </div>
        @include('layouts.footers.auth')
    </div>
@endsection
