
<footer class="footer">
  <div class="container">
    <div class="footer-inner">
      <div class="col-1">
        <div>
          <img src="{{asset('files/logo.png')}}" class="footer-logo-image" alt="logo-image" />
          <span>
            {{__('messages.qq_ministry')}}
          </span>
        </div>
        <p>
          <i class="fa-solid fa-location-dot"></i> {{__('messages.address')}}: {{__('messages.address_nukus')}}
        </p>
        <p>
          <i class="fa-solid fa-phone"></i> {{__('messages.phone')}}: (+99861) 222-74-50
        </p>
        <p style="display: flex;alig-self:center;justify-content:space-between;">
          <span><i class="fa-solid fa-print"></i> {{__('messages.fax')}}: (+99861) 222-73-69</span>
          <A href="http://www.uz/uz/res/visitor/index?id=47737" target=_top><IMG height=31 src="https://cnt0.www.uz/counter/collect?id=47737&pg=http%3A//uzinfocom.uz&&col=F7AE00&amp;t=ffffff&amp;p=0E418F" width=88 border=0 alt="Топ рейтинг www.uz"></A>    
        </p>
        <p>
          2024 © {{__('messages.qq_ministry')}} | DBC24.uz
        </p>
      </div>
      <div class="col-2">
        <ul class="links">
          @foreach ($menus as $menu)
            @if (count($menu->menu_item) > 0)
              <a href="/{{$menu->item->slug}}/{{$menu->menu_item[0]->item->slug}}"><span>∷</span> <span>{{$menu->menu_item[0]->item->$title}}</span></a>
            @endif
          @endforeach
        </ul>
      </div>
      <div class="col-3"></div>
    </div>
  </div>
</footer>
<button class="toTop-btn"><i class="fa-solid fa-chevron-up"></i></button>

@push('js')
    
<script>
  const toTopBtn = document.querySelector(".toTop-btn");
  window.addEventListener("scroll", () => {
    if (window.pageYOffset >= 200) {
      toTopBtn.classList.add("active");
    } else {
      toTopBtn.classList.remove("active");
    }
  });

  toTopBtn.addEventListener("click", () => {
    window.scrollTo(0, 0);
  });
</script>
@endpush