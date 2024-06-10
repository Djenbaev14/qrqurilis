@extends('frontend.layouts.main')

@section('title', 'About')

@section('main-content')
  <div class="about-body main">
    <div class="container">
      <div class="baner">
        <div class="container">
          <div class="baner-col-2">
            <h4 class="baner-title">{{$menu->item->$title}}</h4>
          </div>
        </div>
      </div>
      <div class="body-row">
        <!-- Main Content -->
        <div class="col-3 content">
          <div class="row-1 requisites">
            {!! $menu->item->$body !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
