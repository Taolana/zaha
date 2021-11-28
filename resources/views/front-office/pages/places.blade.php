@extends('front-office.layouts.app')
@section('content')
    <section  class="area">
        <div id="app"></div>
    </section>
    <section class="public">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1>Liste des places</h1>
                    <ul class="list-group list-group-flush">
                        @foreach ($datas as $data)
                            <li class="list-group-item">{{ $data->name }}</li>
                        @endforeach
                    </ul>
                    <div class="d-flex">
                        {!! $datas->links() !!}
                    </div>
                </div>
            </div>
            <br>
        </div>
    </section>
@endsection
@section('js')
@endsection
