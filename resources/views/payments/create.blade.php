@extends('layouts.app')


@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <form action="/payments" method="POST">
                @csrf
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Make Payment</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
