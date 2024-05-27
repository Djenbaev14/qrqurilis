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
      <!-- Sidebar -->
      <div class="col-1 sidebar left">
        <ul class="sideRow-1 sidebar-menu">
          @foreach ($categories as $category)
          <li class="sidebar-menu_item active">
            <a href="{{route('page-2',$category->slug)}}" class="active">{{$category->$title}}</a>
          </li>
          @endforeach
          @foreach ($menus as $menu)
          <li class="sidebar-menu_item">
            <a href="{{route('page-2',$menu->item->slug)}}">{{Str::limit($menu->item->$title,45)}}</a>
          </li>
          @endforeach
        </ul>
        <div class="sideRow-2 sidebar-mailbox">
          <a href="https://pm.gov.uz/oz#/authorities/2/4836/_info" style="color: #fff">
            <img src="{{asset('files/mailbox.svg')}}" alt="" />
            <p>
              {{__('messages.VirtualQabul')}}
            </p>
          </a>
        </div>

        <div class="sideRow-3 yearname">
          <img src="{{asset('files/sidebar-window-white.jpg')}}" alt="image" />
        </div>
      </div>

      <!-- Main Content -->
      <div class="col-2 content" style="background-color: transparent">
        <div class="newsCards-box">
          
          @foreach ($category->post as $post)
                                    
          <div class="newsCard">
            <div class="card-imageBox">
              <img src="{{asset('uploads/'.$post->image)}}" alt="image-news" />
              <div class="image-date">
                <p>{{$post->created_at->format('d')}}</p>
                <p>{{$post->created_at->format('M')}}, {{$post->created_at->format('Y')}}</p>
              </div>
            </div>
            <div class="card-body">
              <p class="card-desc">
                {{$post->$title}}
              </p>
              <div class="card-bottom">
                <a class="card-moreInfo title" href="{{route('new-new',$post->$slug)}}">{{__('messages.more')}}</a>
                <ul class="social-links">
                  <li class="social-link">
                    <a href="https://www.instagram.com/minstroykomxoz"><i class="fa-brands fa-instagram"></i></a>
                  </li>
                  <li class="social-link">
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </li>
                  <li class="social-link">
                    <a href="https://www.facebook.com/rk.minstroy"><i class="fa-brands fa-facebook"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

