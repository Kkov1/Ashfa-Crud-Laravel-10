@extends('layouts.app')

@section('content')

  <body style="background: lightgray">

    <div class="container mt-5 mb-5">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card border-0 shadow-sm rounded">
            <div class="card-body " style="background-color: #e3f2fd;">
              <div class="card-body" style="background-color: #2e3a43;">
                <img src="{{ asset('storage/posts/' . $post->image) }}" class="w-100 rounded">
                <hr>
                <h4>{{ $post->title }}</h4>
                <p class="tmt-3">
                  {!! $post->content !!}
              </div>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection
