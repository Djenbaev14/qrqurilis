
<footer class="footer">
  <div class="container">
    <div class="footer-inner">
      <div class="col-1">
        <div>
          <img src="{{asset('files/logo.png')}}" alt="logo-image" />
          <span>
            {{__('messages.qq_ministry')}}
          </span>
        </div>
        <p>
          <i class="fa-solid fa-location-dot"></i> {{__('messages.address')}}: 230100, Nókis qalası
          G‘arezsizlik ko‘chasi, 59a-jay
        </p>
        <p>
          <i class="fa-solid fa-phone"></i> {{__('messages.phone')}}: (+99861) 222-74-50
        </p>
        <p><i class="fa-solid fa-print"></i> {{__('messages.fax')}}: (+99861) 222-73-69</p>
        <p>
          2024 © Qaraqalpaqstan Respublikası Qurılıs hám úy-jay kommunal xojalıǵı ministrligi | DBC24.uz
        </p>
      </div>
      <div class="col-2">
        <ul class="links">
          @foreach ($menus as $menu)
            <a href="/{{$menu->item->slug}}"><span>∷</span> <span>{{$menu->item->$title}}</span></a>
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