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
              @foreach ($links as $link)
                  <tr>
                  <th scope="row">{{$link->id}}</th>
                  <td>{{$link->origional_link}}</td>
                  <td>{{$link->visits_count}}</td>
                  <td>{{$link->shortened_link}}</td>
                  <td>{{$link->created_at->format('F j, Y g:i A')}}</td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>
@endsection
