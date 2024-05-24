@extends('frontend.layouts.main')

@section('title', 'About')

@section('main-content')
<div class="about-body main">
  <div class="container">
    <!-- ================================================== -->
    <div class="baner">
      <div class="container">
        <div class="baner-col-1"></div>
        <div class="baner-col-2">
          <h4 class="baner-title">{{$categories[0]->$title}}</h4>
        </div>
      </div>
    </div>
    <div class="body-row">

      <div class="col-1 sidebar left">
        <ul class="sideRow-1 sidebar-menu">
          @foreach ($categories as $category)
          <li class="sidebar-menu_item active">
            <a href="{{route('page-2',$category->slug)}}" class="active">{{$category->$title}}</a>
          </li>
          @endforeach
          @foreach ($menus as $menu)
          <li class="sidebar-menu_item">
            <a href="/">{{$menu->item->$title}}</a>
          </li>
          @endforeach
        </ul>
        <div href="#" class="sideRow-2 sidebar-mailbox">
          <a href="#" style="color: #fff">
            <img src="{{asset('files/mailbox.svg')}}" alt="" />
            <p>
              Qurilish va uy-joy kommunal xo'jaligi vazirining virtual
              qabulxonasi
            </p>
          </a>
        </div>

        <div class="sideRow-3 yearname">
          <img src="{{asset('files/sidebar-window-white.jpg')}}" alt="image" />
        </div>
      </div>
      <!-- Main Content -->
      <div class="col-2 content">
        <div class="rows row-1">
          <h2 class="info-title">
            {{$post->$title}}
            <div class="title-bottom">
              <i class="fa-regular fa-calendar"></i><span>{{$post->created_at->format('d-m-Y')}}</span>
            </div>
          </h2>
        </div>
        <div class="rows row-2">
          {!! $post->$body !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
