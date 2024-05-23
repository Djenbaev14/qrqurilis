
<div class="header-top">
  <div class="container">
    <div class="headerTop-inner">
      <ul class="social-links">
        <li class="social-link">
          <a href="https://www.instagram.com/minstroykomxoz/"><i class="fa-brands fa-instagram"></i></a>
        </li>
        <li class="social-link"><a href="https://www.facebook.com/rk.minstroy"><i class="fa-brands fa-facebook"></i></a></li>
        <li class="social-link"><a href="https://youtube.com/channel/UCCvBjFoldX3eeh4noocNLeA"><i class="fa-brands fa-youtube"></i></a></li>
        <li class="social-link"><a href="https://t.me/qurilisministrligi"><i class="fa-brands fa-telegram"></i></a></li>
        <li class="social-link"><a href=""><i class="fa-brands fa-twitter"></i></a></li>
      </ul>
      <div class="topInner">
        <div class="phone">
          <i class="fa-solid fa-phone-volume"></i>
          <div>
            <p>{{__('messages.hotline')}}</p>
            <p>+998(61) 222-74-50</p>
          </div>
        </div>
        <div class="email">
          <i class="fa-regular fa-envelope"></i>
          <div>
            <p>{{__('messages.email')}}</p>
            <p>minstroy-rk@umail.uz</p>
          </div>
        </div>
        <div class="top-tools">
          <div class="search">
            <i class="fa-solid fa-magnifying-glass"></i>
          </div>
          <div class="specialView">
            <i class="fa-regular fa-eye"></i>
          </div>
          <div class="languages">
            <i class="fa-solid fa-globe"></i>
            @foreach (config('app.available_locales') as $local)
              <a href="{{route('local',$local['lang'])}}" style="color: #fff">{{$local['local']}}</a>
            @endforeach
          </div>
        </div>
        <div class="bar-box">
          <button class="header-top_bar" style="display: none">
            <i class="fa-solid fa-bars"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ================================================================ -->
<!-- Header -->



<header class="header">
  <div class="container">
    <div class="header-inner">
      <a href="{{route('home')}}" class="logo-box">
        <img src="{{asset('files/logo.png')}}" alt="logo" />
        <h1>
          {{__('messages.logo_title')}}
        </h1>
      </a>
      <ul class="header-menu">
        @foreach ($menus as $menu)

            @if ($menu->menu_item->count()>0)
              <li class="header-menu_item">
                <a href="#">{{Str::upper($menu->item->$title)}}</a>
                <ul class="col-1 drop-down_items">
                  @foreach ($menu->menu_item as $m_item)
                    <li class="drop-down_item">
                      <a href="{{route('page-1',[$menu->item->slug,$m_item->item->slug])}}" class="drop-down_link">{{$m_item->item->$title}}</a>
                    </li>
                  @endforeach
                </ul>
              </li>
            @else
              <li class="header-menu_item">
                <a href="{{route('page-2',$menu->item->slug)}}">{{Str::upper($menu->item->$title)}}</a>
              </li>
            @endif
        @endforeach
        @foreach ($categories as $category)
            @if (count($category->post) > 0)
            <li class="header-menu_item">
              <a href="{{route('page-2',$category->slug)}}">{{Str::upper($category->$title)}}</a>
            </li>
            @endif
        @endforeach
        <li class="header-menu_item">
          <a href="{{route('virtual')}}">{{Str::upper(__('messages.virtual'))}}</a>
        </li>
      </ul>
    </div>
  </div>
</header>