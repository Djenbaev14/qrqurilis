<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      O'zbekiston Respublikasi Qurilish va uy-joy kommunal xo'jaligi vazirligi
    </title>
    <link rel="shortcut icon" href="{{asset('files/logo.png')}}">
    <link rel="stylesheet" href="{{asset('frontend/Styles/styles.css')}}" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
      />
      <link rel="stylesheet" href="{{asset('frontend/Styles/about.css')}}" />
      <link rel="stylesheet" href="{{asset('frontend/Styles/form.css')}}" />
      <link rel="stylesheet" href="{{asset('frontend/Styles/style.css')}}" />
      @stack('css')
  </head>

    <body>
        @include('frontend.components.header')
        @yield('main-content')
        @include('frontend.components.footer')
  
        @stack('js')
        @include('sweetalert::alert',['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
        <script>
          window.replainSettings = { id: '239c7a5e-5eaf-4d65-82ad-be52e0c23d8a' };
          (function(u){var s=document.createElement('script');s.async=true;s.src=u;
          var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
          })('https://widget.replain.cc/dist/client.js');
        </script>
        <script src="https://kit.fontawesome.com/32ee8f9848.js" crossorigin="anonymous"></script>
        <script>
          AOS.init();
        </script>
        <script>
            const headerTop = document.querySelector(".header-top");
            const header = document.querySelector(".header");

            window.addEventListener("scroll", () => {
              if (window.pageYOffset >= 100) {
                headerTop.style.transform = "translateY(-100px)";
                header.style.marginTop = 0;
              } else {
                headerTop.style.transform = "translateY(0)";
                header.style.marginTop = `${
                  headerTop.getBoundingClientRect().height
                }px`;
              }
            });
        </script>

        <script>
          const maps = document.querySelectorAll(".jqvmap-region");
          maps.forEach((regionMap, index) => {
            // Hover Effect
            regionMap.addEventListener("mouseover", () => {
              regionMap.setAttribute("fill", "#6c7ba3");
            });

            regionMap.addEventListener("mouseleave", () => {
              regionMap.setAttribute("fill", regionMap.getAttribute("original"));
            });
            // ==============================

            // Selecting
            regionMap.addEventListener("click", () => {
              const currentRegion = regionMap.id.split("_");
              document.querySelector(".areaTitle").innerHTML =
                currentRegion[currentRegion.length - 1];

              regionMap.classList.add("active");
              maps.forEach((element, elementID) => {
                if (elementID !== index) element.classList.remove("active");
              });

              const adminName = regionMap.getAttribute("data-admin");
              document.querySelector("#admin-id").innerHTML = adminName;

              const adminPhone = regionMap.getAttribute("data-admin-phone");
              document.querySelector("#admin-phone").innerHTML = adminPhone;
              
              const adminEmail = regionMap.getAttribute("data-admin-email");
              document.querySelector("#admin-email").innerHTML = adminEmail;
              // admin-reception-days
              const adminReceptionDays = regionMap.getAttribute("data-admin-reception-days");
              document.querySelector("#admin-reception-days").innerHTML = adminReceptionDays;
            });
          });
        </script>

        <script>
          const headerTopBar = document.querySelector(".header-top_bar");
          headerTopBar.addEventListener("click", () => {
            document.querySelector(".header-menu").classList.toggle("active");
          });
        </script>
        
    </body>
    
</html> 