@extends('frontend.layouts.main')

@section('title', 'About')

@section('main-content')
  <div class="about-body main">
    <div class="container">
      <div class="baner">
        <div class="container">
          <div class="baner-col-1"></div>
          <div class="baner-col-2">
            {{-- <h4 class="baner-title">{{$item->$title}}</h4> --}}
          </div>
        </div>
      </div>
      <div class="body-row">
        <!-- Sidebar -->
        <div class="col-1 sidebar left">
          <ul class="sideRow-1 sidebar-menu">
            @foreach ($menu->menu_item as $m_item)
                <li class="sidebar-menu_item">
                  <a href="{{route('page-1',[$menu->item->slug,$m_item->item->slug])}}" class="<?=($item->id == $m_item->item->id) ? 'active' :'';?>">{{$m_item->item->$title}}</a>
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
          {!! $item->$body !!}
        </div>
      </div>
    </div>
  </div>
@endsection
