@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>

        <div class="card mt-4">

            <table class="table">
                <thead>
                    <tr>
                <th scope="col">#</th>
                <th scope="col">Link</th>
                <th scope="col">Visits</th>
                <th scope="col">Shortened Link</th>
                <th scope="col">Created Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>https://google.com</td>
                <td>2</td>
                <td>ja2e</td>
                <td>8th, June 2023</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>https://google.com</td>
                <td>2</td>
                <td>ja2e</td>
                <td>8th, June 2023</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>https://google.com</td>
                <td>2</td>
                <td>ja2e</td>
                <td>8th, June 2023</td>
              </tr>
            </tbody>
        </table>
    </div>
    </div>
</div>
@endsection
