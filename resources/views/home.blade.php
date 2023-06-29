@extends('layouts.app')

@section('content')
@vite('resources/js/app.js')
@vite('resources/js/nav.js')
<style>
    .links-container {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }
    .links-container a {
        width: 20%;
        margin-bottom: 10px;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h1>This is an Admin home!</h1>
                    <h1>Which is the place that you want to go?</h1>
                    <div class="links-container">
                        <a href="/homepage" class="buttonn">Homepage</a>
                        <a href="/admin/car-list" class="buttonn">Car-List</a>
                        <a href="/admin/contact" class="buttonn">Contact-list</a>
                        <a href="/admin/compare" class="buttonn">Compare-List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
