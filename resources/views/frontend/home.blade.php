@extends('frontend.layouts.main')

@section('title', 'Главная')

@section('main-content')
    <main>
      <!-- Banner -------------------------------------------- -->
      <div class="banner">
        <div class="banner-title" data-aos="fade-up" data-aos-duration="1000">
          {{__('messages.qq_ministry')}}
        </div>
      </div>

      <!-- Sections ---------------------------------------------- -->
      <!-- =========================================================== -->

      <!-- Section latest news -->
      <section class="section-news">
        <div class="container">
          <!-- Section top -->
          <div class="section-top">
            <h1 class="title">{{__('messages.news')}}</h1>
            <button>
              <a href="{{route('page-2','news')}}"
                >{{__('messages.all_news')}} <i class="fa-solid fa-arrow-right"></i
              ></a>
            </button>
          </div>
          <!-- ------------------------------------------ -->
          <div class="section-inner">
            <div class="newsCards-box">
              @foreach ($posts as $post)
                  
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
            <div class="announcement-sidebar">
              <div class="announcements-list">
                <div class="announcement ad-1">
                  <div class="bg"></div>
                  <h1>e'lon</h1>
                  <img
                    src="{{asset('files/icons/speaker.png')}}"
                    alt="speaker-icon"
                  />
                  <p>05-Fevral, 2024</p>
                  <a href="#">batafsil</a>
                  <button>barcha e'lonlar</button>
                </div>
                <div class="announcement ad-2">
                  <h1>oz'bekiston bunyodkori</h1>
                  <p>ijtimoiy-iqtisodiy gazeta</p>
                </div>
                <div class="announcement ad-3">
                  <img src="{{asset('files/house.png')}}" alt="" />
                  <p>ZILZILABARDOSH UY</p>
                </div>
                <ul class="announcement ad-4">
                  <li>
                    <a href="#">
                      <img src="{{asset('files/icons/water.svg')}}" alt="" />
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="{{asset('files/icons/teplo.png')}}" alt="" />
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="{{asset('files/icons/het.png')}}" alt="" />
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="{{asset('files/icons/hududgaz.png')}}" alt="" />
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="{{asset('files/icons/logo_mah.png')}}" alt="" />
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section E-systems -->
      <section class="section-eSystems">
        <div class="container">
          <!-- Section-top -->
          <div class="section-top">
            <h1 class="title">{{Str::upper(__('messages.systems'))}}</h1>
          </div>
          <!-- ------------------------- -->
          <div class="section-inner">
            <div class="eSystems-gridBox">
              <div class="eSystemBox">
                <img src="{{asset('files/eSystems/rating.png')}}" alt="image" />
                <a href="#">
                  <p class="desc">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Enim, at?
                  </p>
                </a>
              </div>
              <div class="eSystemBox">
                <img src="{{asset('files/eSystems/chek-list.png')}}" alt="image" />
                <a href="#">
                  <p class="desc">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Enim, at?
                  </p>
                </a>
              </div>
              <div class="eSystemBox">
                <img src="{{asset('files/eSystems/meninguyim.png')}}" alt="image" />
                <a href="#">
                  <p class="desc">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Enim, at?
                  </p>
                </a>
              </div>
              <div class="eSystemBox">
                <img src="{{asset('files/eSystems/cabinet.png')}}" alt="image" />
                <a href="#">
                  <p class="desc">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Enim, at?
                  </p>
                </a>
              </div>
              <div class="eSystemBox">
                <img src="{{asset('files/eSystems/hammer.png')}}" alt="image" />
                <a href="#">
                  <p class="desc">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Enim, at?
                  </p>
                </a>
              </div>
              <div class="eSystemBox">
                <img src="{{asset('files/eSystems/elearning.png')}}" alt="image" />
                <a href="#">
                  <p class="desc">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Enim, at?
                  </p>
                </a>
              </div>
              <div class="eSystemBox">
                <img src="{{asset('files/eSystems/file.png')}}" alt="image" />
                <a href="#">
                  <p class="desc">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Enim, at?
                  </p>
                </a>
              </div>
              <div class="eSystemBox">
                <img src="{{asset('files/eSystems/review.png')}}" alt="image" />
                <a href="#">
                  <p class="desc">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Enim, at?
                  </p>
                </a>
              </div>
              <div class="eSystemBox">
                <img src="{{asset('files/eSystems/file2.png')}}" alt="image" />
                <a href="#">
                  <p class="desc">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Enim, at?
                  </p>
                </a>
              </div>
              <div class="eSystemBox">
                <img src="{{asset('files/eSystems/apartment.png')}}" alt="image" />
                <a href="#">
                  <p class="desc">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Enim, at?
                  </p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section services -->
      <section class="section-services">
        <div class="container">
          <div class="section-inner">
            <h1 class="section-title">{{Str::upper(__('messages.services'))}}</h1>
            <div class="services-grid">
              <div class="service-gridBox">
                <img src="{{asset('files/services/ic1.png')}}" alt="image" />
                Bino va inshootning tashqi ko’rinishini o’zgartirishni kelishish
              </div>
              <div class="service-gridBox">
                <img src="{{asset('files/services/ic2.png')}}" alt="image" />
                Loyiha-smeta hujjatlarini kelishish
              </div>
              <div class="service-gridBox">
                <img src="{{asset('files/services/ic3.png')}}" alt="image" />
                Obyektni qayta ixtisoslashtirish va rekonstruksiya qilishga ruxsatnoma berish
              </div>
              <div class="service-gridBox">
                <img src="{{asset('files/services/ic4.png')}}" alt="image" />
                Qurilish-montaj ishlarini amalga oshirishga ruxsatnoma berish
              </div>
              <div class="service-gridBox">
                <img src="{{asset('files/services/ic5.png')}}" alt="image" />
                Arxitektura-rejalashtirish topshirig’ini ishlab chiqish
              </div>
              <div class="service-gridBox">
                <img src="{{asset('files/services/ic6.png')}}" alt="image" />
                Yakka tartibda uy-joy qurishga (rekonstruksiya qilishga) ruxsatnoma berish
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Three Sections -->
      <section class="three-section">
        <div class="container">
          <div class="section-row">
            <div class="col1">
              <div class="section-top">
                <h1 class="title">{{Str::upper(__('messages.question'))}}</h1>
              </div>
              <div class="accordions-box">
                <div class="accordion">
                  <button class="accordionBtn">
                    Ichimlik suvi taʼminotiga ulanish uchun nima qilish
                    kerak?<span>&#x3e;</span>
                  </button>
                  <div class="content">
                    O‘zbekiston Respublikasi Vazirlar Mahkamasining 2018 yil 31
                    martdagi Muhandislik-kommunikatsiya tarmoqlariga ulanish
                    bo‘yicha davlat xizmatlari ko‘rsatishning maʼmuriy
                    reglamentlarini tasdiqlash to‘g‘risida gi 256-son qarorida
                    belgilangan parametrlar asosida:
                    <br />
                    1. Isteʼmolchi suv taʼminoti va suvni chiqarib tashlash
                    tarmoqlariga ulanish uchun Davlat xizmatlari markaziga o‘zi
                    kelib murojaat qilish yoki Yagona interaktiv davlat
                    xizmatlari portalida ro‘yxatdan o‘tishi va Davlat xizmatini
                    ko‘rsatish uchun yig‘im to‘lashi kerak.
                    <br />
                    2. Davlat xizmatlari markazi (1 soat mobaynida) yoki Yagona
                    interaktiv Davlat xizmatlari portali (avtomatik tarzda)
                    texnik shartlarni ishlab chiqish uchun so‘rovnomani suv
                    quvurlari va kanalizatsiya xo‘jaligi tashkiloti yuborishi
                    kerak.
                    <br />
                    3. Suv quvurlari va kanalizatsiya xo‘jaligi tashkiloti
                    tashkiloti 3 ish kuni mobaynida texnik shartlarni ishlab
                    chiqishi va Davlat xizmatlari markaziga (o‘zi kelib murojaat
                    etganda) yoki isteʼmolchiga Yagona interaktiv Davlat
                    xizmatlari portali orqali (elektron tarzda murojaat etgan
                    taqdirda) yuborishi kerak.
                    <br />
                    4. Suv quvurlari va kanalizatsiya xo‘jaligi tashkiloti
                    tashkiloti loyihalash va qurilish-montaj ishlarini amalga
                    oshirish bo‘yicha o‘zining tijorat takliflarini va
                    shartnomalar loyihalarini berish huquqiga ega.
                  </div>
                </div>
                <div class="accordion">
                  <button class="accordionBtn">
                    Uy-joy mulkdorlari shirkati vakolatiga nimalar kiradi?
                    <span>&#x3e;</span>
                  </button>
                  <div class="content">
                    Ichimlik suvi tarmog‘idagi avariya xolatlari bo‘yicha
                    “O‘zsuvtaʼminot” AJning qisqa aloqa markazi “1255” va
                    telegramdagi Dispetcher 24/7 SUV va https://t.me/uzsuv_chat-
                    “O‘zsuvtaʼminot” AJ ga murojaat qilish kerak.
                  </div>
                </div>
                <div class="accordion">
                  <button class="accordionBtn">
                    Uy-joy mulkdorlari shirkati vakolatiga nimalar kiradi?
                    <span>&#x3e;</span>
                  </button>
                  <div class="content">
                    Shirkat boshqaruvining vakolatlariga quyidagilar kiradi:
                    shirkat aʼzolarining umumiy yig‘ilishini chaqirish va uni
                    o‘tkazishni tashkil etish; umumiy mol-mulkni, yer
                    uchastkasini va shirkatning mol-mulkini saqlashga doir
                    ishlar rejasining loyihasini hamda uning ijrosi
                    to‘g‘risidagi hisobotni tuzish; shirkatning yillik
                    daromadlar va xarajatlar smetasi loyihasini hamda uning
                    ijrosi to‘g‘risidagi hisobotni tuzish; shirkat ustavi
                    talablarining va shirkat aʼzolari umumiy yig‘ilishi
                    qarorlarining bajarilishini taʼminlash; umumiy mol-mulkka
                    hamda shirkatning mol-mulkiga xizmat ko‘rsatish va uni
                    taʼmirlash uchun tanlov asosida pudratchilarni tanlash;
                    tanlov g‘olibi bilan umumiy mol-mulkni va shirkatning
                    mol-mulkini saqlash, unga xizmat ko‘rsatish hamda uni
                    taʼmirlash uchun shartnomalar tuzish to‘g‘risida qaror qabul
                    qilish; umumiy mol-mulkning, yer uchastkasining va shirkat
                    mol-mulkining asralishi hamda saqlanishi ustidan nazorat
                    qilish; shirkatning asbob-uskunalarini, anjomlarini va
                    boshqa moddiy qimmatliklarini olish hamda sotish,
                    topshirish, ayirboshlash, ijaraga berish, shuningdek ularni
                    shirkatning balansidan chiqarish to‘g‘risida qarorlar qabul
                    qilish; shirkat aʼzolarining arizalari va shikoyatlarini
                    ko‘rib chiqish; ish yuritish, buxgalteriya hisobini va
                    hisobotini yuritish, mablag‘larning tushumi hamda
                    sarflanishi hisobini shirkatdagi har bir ko‘p kvartirali uy
                    bo‘yicha alohida-alohida yuritish; shirkat aʼzolarining
                    majburiy badallari to‘liq tushishini tashkil etish va
                    taʼminlash; shirkat aʼzolarining umumiy yig‘ilishi tomonidan
                    tasdiqlangan shirkatning daromadlar va xarajatlar smetasiga
                    muvofiq shirkat mablag‘larini tasarruf etish. Shirkat
                    boshqaruvi shirkat aʼzolari oldida quyidagilar uchun
                    javobgardir: umumiy mol-mulkka xizmat ko‘rsatish va uni
                    taʼmirlash ishlarining tuzilgan shartnomalarga muvofiq
                    tanlov asosida tashkil etilishi; muhandislik tarmoqlariga va
                    boshqa umumiy mol-mulkka xizmat ko‘rsatishning lozim
                    darajadagi sifati taʼminlanishi; taʼmirlash ishlarini
                    belgilangan normalar va talablarga muvofiq sifatli bo‘lishi
                    hamda o‘z vaqtida o‘tkazilishi; shirkat mablag‘laridan
                    umumiy mol-mulkni saqlash va taʼmirlash uchun belgilangan
                    maqsadda foydalanilishi; umumiy foydalanishdagi joylarning
                    va ko‘p kvartirali uylarga tutash yer uchastkalarining lozim
                    darajadagi sanitariya holati, ularning obodonlashtirilishi.
                    Shirkat boshqaruvi muntazam ravishda, biroq uch oyda kamida
                    bir marta umumiy mol-mulkni saqlash bo‘yicha ishlar
                    rejalarining bajarilishi, amalga oshirilgan va
                    rejalashtirilayotgan xarajatlar, majburiy badallarni
                    yig‘ish, tadbirkorlik faoliyatidan olinadigan daromadlar
                    (foyda) to‘g‘risida shirkat aʼzolari oldida hisobot beradi.
                    Hisobotni taqdim etish shakli shirkatning barcha aʼzolari
                    uchun hisobotdan foydalanish imkoniyatini taʼminlashi kerak
                    va u shirkat aʼzolari umumiy yig‘ilishining qarori bilan
                    belgilanadi.
                  </div>
                </div>
                <div class="accordion">
                  <button class="accordionBtn">
                    Noqonuniy qurilmalarga nisbatan qanday choralar ko‘riladi?
                    <span>&#x3e;</span>
                  </button>
                  <div class="content">
                    Ko‘p kvartirali uydagi kvartira mulkdori mahalliy davlat
                    hokimiyati organlaridan tegishli ruxsatnoma olmasdan o‘ziga
                    qarashli joyni o‘zboshimchalik bilan qayta qurgan yoki
                    o‘zgartirgan taqdirda, qonun hujjatlarida belgilangan
                    tartibda javobgar bo‘ladi hamda bu joyni o‘z hisobidan
                    avvalgi holatiga keltirishi shart. Obyektni qayta
                    rejalashtirish (rekonstruksiya qilish) deganda quyidagilar
                    tushuniladi: binolar va inshootlarning mustahkamligi,
                    zilzilabardoshliligiga taʼsir qiluvchi yuk ko‘taruvchi
                    qismlarining o‘zgarishiga olib keladigan hajmi va maydonini
                    o‘zgartirish; binolar va inshootlarning mustahkamligi,
                    zilzilabardoshliligiga taʼsir qiluvchi yuk ko‘taruvchi
                    qismlarini o‘zgartirmasdan hajmi va maydonini o‘zgartirish;
                    bino va inshootlarning dastlabki hajmini saqlab qolgan holda
                    ularning asosiy qismlariga o‘zgartirish kiritish; o‘z yer
                    uchastkasida bir-biriga tutashib ketuvchi va alohida
                    qo‘shimcha bino va inshootlar qurish Vazirlar Mahkamasining
                    2018 yil 18 maydagi 370-son qaroriga 2-ILOVA “Obyektni qayta
                    ixtisoslashtirish va rekonstruksiya qilish uchun ruxsatnoma
                    berish bo‘yicha davlat xizmatlarini ko‘rsatishning maʼmuriy
                    reglamentiga asosan yuridik va jismoniy shaxslarning
                    (keyingi o‘rinlarda ariza beruvchilar deb ataladi)
                    obyektlarni qayta ixtisoslashtirish va rekonstruksiya qilish
                    uchun ruxsatnomalar (keyingi o‘rinlarda ruxsatnoma deb
                    ataladi) berish tartibini belgilangan.
                  </div>
                </div>
                <div class="accordion">
                  <button class="accordionBtn">
                    Metrologiya-xisoblagichlarni qiyoslashdan o‘tkazish tartibi
                    qanday? <span>&#x3e;</span>
                  </button>
                  <div class="content">
                    Yuridik va jismoniy shaxslarga ichimlik va issiq suvni
                    hisobga olish uskunasini (hisoblagichni) yechish,
                    qiyoslashdan o‘tkazish va o‘rnatish bo‘yicha davlat
                    xizmatlarini ko‘rsatish tartibi, O‘zbekiston Respublikasi
                    Vazirlar Mahkamasining 2019 yil 20 avgustdagi 698-son qarori
                    bilan tasdiqlangan “Yuridik va jismoniy shaxslarning
                    ichimlik va issiq suvni hisobga olish uskunalarini
                    (hisoblagichni) yechish, qiyoslashdan o‘tkazish va o‘rnatish
                    bo‘yicha davlat xizmatlari ko‘rsatishning maʼmuriy
                    reglamenti” da belgilangan. Unga muvofiq, hisoblagichlarni
                    qiyoslashdan o‘tkazish bo‘yicha Davlat xizmatlari markazlari
                    orqali yoki Yagona interaktiv davlat xizmatlari portali
                    (YAIDXP) orqali ko‘rsatiladi. Bunda isteʼmolchi Davlat
                    xizmatlari markaziga o‘zi kelib murojaat etadi yoki davlat
                    xizmatlaridan elektron tarzda foydalanish uchun YAIDXPda
                    ro‘yxatdan o‘tadi va tegishli anketani to‘ldiradi.
                    Isteʼmolchidan boshqa hujjatlarni talab qilish taʼqiqlanadi.
                    Davlat xizmatini ko‘rsatganlik uchun jismoniy shaxslardan
                    bazaviy hisoblash miqdorining 20 foizi (2021 yil fevral
                    oyidan – 49 000 so‘m) miqdorida yig‘im undiriladi.
                    Hisoblagichlarni yechish, qiyoslashdan o‘tkazish uchun
                    topshirish va qiyoslashdan o‘tkazilgandan keyin o‘rnatish
                    taʼminotchi korxona vakillari tomonidan isteʼmolchi
                    ishtirokida amalga oshiriladi. Taʼminotchi korxona
                    so‘rovnoma kelib tushganidan so‘ng 5 ish kuni ichida
                    isteʼmolchi bilan kelishib, uning ishtirokida tegishli
                    dalolatnomani 2 nusxada tuzgan holda hisobga olish
                    uskunasini yechib oladi. Hisobga olish uskunasini
                    qiyoslashdan o‘tkazish natijasi ijobiy bo‘lgan taqdirda,
                    taʼminotchi korxona tomonidan hisobga olish uskunasi
                    qiyoslashdan o‘tkazilgandan keyin 3 ish kuni ichida
                    isteʼmolchi ishtirokida o‘rnatilib, ikki nusxada
                    hisoblagichni o‘rnatish to‘g‘risidagi dalolatnoma tuzgan
                    holda tamg‘alanadi. Dalolatnomaning bir nusxasi isteʼmolda
                    qoldiriladi. Hisobga olish uskunasini qiyoslashdan o‘tkazish
                    natijasi salbiy bo‘lganda, hisobga olish uskunasi
                    foydalanishga yaroqsiz deb topiladi. Taʼminotchi korxona
                    hisobga olish uskunasini 3 ish kunida taʼmirlash yoki
                    yangisiga almashtirish chorasini ko‘radi. Ichimlik va issiq
                    suvni hisobga olish uskunasini taʼmirlash yoki yangisiga
                    almashtirishga doir sarf-xarajatlar taʼminotchi korxona
                    tomonidan qoplanadi.
                  </div>
                </div>
              </div>
            </div>
            <div class="col2" data-aos="flip-up" data-aos-duration="200">
              <div class="section-top">
                <h1 class="title">{{Str::upper(__('messages.statistics'))}}</h1>
              </div>
              <div style="width: 535px; height: 401px">
                <canvas id="myChart"></canvas>
                <div id="chartVals"></div>
              </div>
            </div>
            <div class="col3">
              <div class="section-top">
                <h1 class="title">{{Str::upper(__('messages.cammonal_tariffs'))}}</h1>
              </div>
              <div class="top-menu">
                <table>
                  <thead>
                    <tr>
                      <th>
                        <select>
                          <option value="tashkent">Toshkent</option>
                          <option value="tashkent">Toshkent</option>
                          <option value="tashkent">Toshkent</option>
                          <option value="tashkent">Toshkent</option>
                          <option value="tashkent">Toshkent</option>
                          <option value="tashkent">Toshkent</option>
                          <option value="tashkent">Toshkent</option>
                          <option value="tashkent">Toshkent</option>
                        </select>
                      </th>
                      <th>{{__('messages.counter')}}</th>
                      <th>{{__('messages.without_counter')}}</th>
                    </tr>
                  </thead>
                  <tbody></tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section Regional Administrations -->
      <section class="section-administrations">
        <div class="container">
          <!-- Section top -->
          <div class="section-top">
            <h1 class="title">{{Str::upper(__('messages.regional_adminstrations'))}}</h1>
            <button>
              <a href="#"
                >{{__('messages.all_regional')}}
                <i class="fa-solid fa-arrow-right"></i
              ></a>
            </button>
          </div>
          <div class="section-inner" data-aos="fade-up" data-aos-duration="1000">
            <svg class="map">
              <g transform="scale(1) translate(0, 0)">
                <path
                  d="m 88.641559,491.72304 -1.48769,0.12397 -0.86782,-0.99179 -6.405334,-0.0413 -0.165299,-1.03312 -5.702813,0.0413 -0.165299,-0.95047 h -5.744139 l -0.826494,-0.78517 -5.082943,-0.24795 -0.578546,-0.86782 -5.330891,-0.20662 -0.454572,-0.95047 -5.454865,-0.0413 -0.661196,-0.82649 -5.49619,-0.1653 -0.537222,-0.95047 h -5.330891 l -0.289273,-0.99179 -5.785463,-0.0413 -0.123974,-1.19841 h -5.909437 l -0.123975,-0.74385 -5.950762,-0.20662 -0.247948,-0.78517 -4.876319,-0.1653 -0.247948,-0.74385 -6.4466593,-0.0827 -0.1652989,-0.74384 -2.7274326,-0.41325 -0.5785463,0.0827 0.082649,-7.76905 1.3223915,-0.1653 v -11.98417 l 1.0744432,-0.0827 0.082649,-11.81888 1.1570926,-0.66119 -0.1652989,-11.40563 1.1570926,-0.4959 -0.3535024,-11.31101 1.0519555,-0.23377 0.05844,-11.86373 1.110399,-0.11688 -0.204548,-11.48385 0.905852,-0.11689 0.146105,-11.01632 0.905851,-11.1332 0.847409,-0.5552 0.321431,-11.39619 0.87663,-0.40909 -0.116884,-11.57152 1.227282,-0.7013 v -10.34424 l 0.935072,-0.23376 -0.116884,-11.86373 1.16884,-0.17533 -0.233768,-11.86372 1.402608,-0.52598 -0.116884,-10.51956 0.935072,-0.58442 -0.175326,-11.33775 1.227282,-0.11688 -0.233768,-12.03906 1.16884,-0.17532 -0.175326,-11.62996 1.051956,-0.35065 -0.05844,-11.62996 0.935072,-0.70131 -0.116884,-11.45463 1.402608,-0.35065 -0.05844,-10.69489 8.737079,-93.18577 7.530219,-89.286221 11.942849,-2.603458 37.52286,-7.645076 56.697535,-12.066823 47.15153,-9.876612 46.73827,-10.124561 11.19901,-2.3555098 1.44636,-0.7025205 1.653,-1.1570926 2.1902,-0.3719222 c -0.20662,1.7769638 -0.59724,4.0131364 -0.70252,5.9094381 -0.0994,2.006051 -0.77123,2.34157 -0.95046,3.471278 l -2.27287,4.752344 -0.66117,0.991794 c -2.34174,2.920281 -4.56843,4.844302 -7.97568,7.93435 -1.11812,3.08558 -2.89273,4.187572 -3.92585,6.529307 l -0.66125,1.818289 -2.27285,-0.04133 -0.45457,1.570341 c -0.20663,1.322391 -0.20663,3.059418 -0.41325,4.008498 l -2.02491,0.330599 -0.12398,7.06653 0.90915,0.454572 c 0.21981,0.38955 0.68034,0.813487 -0.57855,0.991793 l -1.85961,0.289273 -1.40505,2.190211 -0.57854,2.107562 -4.42175,8.223623 -0.45457,2.479484 -1.40504,1.198417 -1.81829,4.380422 -1.40504,2.934056 -0.12397,2.35551 -1.65299,0.123975 -0.90915,1.363716 -0.1653,9.546014 0.86782,0.950469 -0.0413,6.322685 1.28106,2.27286 0.74385,2.272861 1.15709,2.56213 0.4959,-0.0413 0.66119,0.49589 0.0827,7.68641 -1.23974,0.70252 -1.77696,1.94226 -1.23974,2.60346 -1.03312,1.57034 -0.0413,2.64478 -1.19841,0.12397 -0.0413,25.29074 1.19842,0.0827 0.0413,3.8432 3.7586,6.23133 3.09742,3.03899 0.4091,1.69481 2.74677,2.62989 0.46754,1.28573 0.7013,0.29221 0.11689,4.0325 -1.1104,1.22728 -0.17533,1.34416 -1.75326,0.46754 -1.05195,0.70131 -0.0584,10.81177 -1.16884,0.29221 -0.11688,11.51307 v 0.46754 l -2.27923,1.4026 -2.51302,2.27925 c -0.54788,0.35633 0.74684,1.59959 -1.46104,1.4026 1.87458,3.75977 0.83905,6.70135 0.46753,10.46112 l 9.46761,22.6755 v 0 -0.11688 l 6.31174,0.11688 0.35064,2.9221 -10.63644,-0.11688 -4.09094,2.62989 -1.57794,2.22079 -2.27923,2.57145 -2.16236,2.513 c -0.58899,0.73251 1.14788,0.13798 -0.29221,3.68184 -0.12106,1.12988 0.30084,2.25977 -1.57793,3.38965 v 0 l -0.11693,3.33119 1.16884,1.22728 3.97406,3.6234 3.33119,2.51301 1.5195,0.81819 1.05195,1.1104 1.75326,0.58442 2.62989,0.11689 1.46106,0.40909 1.63637,0.35065 4.32471,0.52597 1.8117,0.64287 8.70786,0.87667 v 0 l 11.62996,0.17533 1.28572,2.04547 0.99352,3.03898 1.51948,1.46105 2.33769,0.40909 h 2.04547 l 6.01953,0.23377 2.27923,1.57794 3.68185,-0.0584 v 0 l 1.87015,-0.70131 1.16884,0.46754 0.17531,9.23383 2.22081,1.46105 v 0 l 2.57144,-0.17537 -0.23377,1.8117 -0.11688,4.09094 -0.99351,0.7013 -0.11689,6.60395 -0.11688,10.22735 -3.3312,0.29221 -2.62989,2.16235 -3.56496,3.21431 -0.64286,0.99352 -0.17533,1.11039 0.0584,0.4091 -1.92859,0.0584 -0.58442,-1.22728 -2.74677,0.0584 -0.46754,-0.99351 H 259.015 l -0.17533,6.48706 -2.86366,-1.75326 -1.51949,-1.87015 -9.52605,0.0585 -0.87663,1.75326 0.0584,2.513 -1.34416,0.70131 -1.34417,0.23376 -0.7013,-0.52597 h -1.1104 l -2.2208,0.81818 -0.52597,1.98703 0.0584,2.86366 0.29221,0.46754 -0.35065,0.23376 -2.86366,0.70131 -0.0584,2.68833 v 0.99351 l 0.58442,0.17533 0.23376,0.99351 -0.58442,0.46754 -2.22079,-0.0584 -1.57794,0.11688 -0.81818,0.11689 h -0.46754 l -0.17533,0.81818 h -1.4026 l -0.52598,-1.22728 -2.57145,0.11689 -1.87014,-1.1104 -7.30525,-3.21431 -2.10392,-0.64286 -5.8442,0.11688 -3.6234,1.63638 -3.15587,1.57793 -1.28572,0.64286 -0.35066,1.22728 -2.68833,0.11689 -1.57793,1.28572 0.17532,5.96109 1.46105,1.87014 3.27276,2.74677 3.50652,2.27924 1.4026,0.4091 0.4091,0.52597 2.51301,0.35066 0.46753,1.05195 v 1.92859 l 2.45457,4.85069 1.87014,2.68833 0.7013,2.04547 1.87015,2.86366 2.80521,4.38315 1.16884,1.11039 0.0585,1.5195 0.11688,1.4026 1.57793,1.1104 1.16884,0.75975 1.22729,0.52598 0.0584,0.93507 -1.1104,0.29221 -1.8117,-0.87663 -2.27924,-0.23377 -0.11688,0.81819 -1.92859,-0.75975 -0.58442,-0.52598 0.17533,-1.57793 0.0584,-1.40261 1.22728,-0.75974 -0.46754,-1.40261 -0.7013,-1.05196 -3.09743,-4.09094 -1.4026,-2.39612 -2.2208,-1.57793 -3.15587,-3.09743 -2.04547,-2.51301 -0.7013,-0.52597 -6.37018,-0.11689 -0.93507,1.34417 -0.81819,-0.58442 -0.52598,-1.92859 -0.64286,-2.27924 -3.09743,-2.27924 -1.8117,-0.40909 -4.44159,0.17533 c 0,0 -0.23377,0.46753 -0.64286,0.64286 -0.4091,0.17532 -2.9221,0.40909 -2.9221,0.40909 l -1.16884,1.05196 -1.5195,1.22728 -2.27923,0.58442 -1.75326,1.46105 -1.87015,3.56496 v 3.62341 l 2.33768,3.38963 0.93507,0.75975 -0.35065,2.10391 -0.81819,0.29221 -0.23376,7.48058 -0.52598,0.29221 -0.11689,2.9221 -0.81818,0.17532 -0.58442,-0.87663 -5.49355,-0.17532 -1.40261,1.69482 -1.57793,0.7013 0.46753,4.55848 -8.18188,0.0584 -2.57145,1.28572 -0.81819,0.70131 -1.63637,-0.64287 -1.05196,-1.34416 -3.21431,-0.0584 -1.46105,-0.70131 -4.79224,-0.46753 -0.70131,-0.70131 -11.16242,-0.23377 -0.87663,0.87663 -2.513,0.58442 -3.3312,1.34417 -4.26626,2.33768 -1.75326,1.22728 -1.34417,1.1104 -0.87663,0.58442 -1.69482,0.40909 -0.93507,1.22729 -3.85717,7.42213 -1.57794,5.31822 -0.75974,1.22729 -2.16236,1.8117 -2.337677,0.40909 -2.220796,0.29221 -1.928586,0.52598 -3.448078,1.8117 -3.331194,3.44808 -2.04547,5.31822 -0.175326,3.74029 -1.285724,0.52598 0.409094,12.56503 -1.402608,0.23377 0.233768,8.18188 1.16884,0.81819 0.233768,2.62989 1.16884,1.34416 0.58442,1.98703 0.642862,1.16884 v 1.57793 l -1.051956,0.4091 0.175326,14.84427 1.16884,2.57144 1.285724,2.74678 1.285724,1.57793 0.116884,1.1104 1.110398,0.46754 0.409094,0.87663 -1.577934,0.58442 -1.870144,2.10391 -0.525978,1.63637 z"
                  stroke="#F7FCFE"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-opacity="0.25"
                  fill="#e0e0e0"
                  original="#e0e0e0"
                  id="jqvmap1_kungrad"
                  class="jqvmap-region"
                  fill-opacity="1"
                  data-admin="Podpolkovnik Bekmurza Bulatov"
                  data-admin-phone="+998(61) 312-16-41"
                ></path>
                <path
                  d="m 337.44412,270.62115 -1.19806,1.02273 -3.91561,0.0584 h -6.04875 l -0.23377,-4.52925 -1.72404,-1.57794 -4.70458,-0.87663 -1.60715,-0.90585 -1.95781,-0.49675 -1.05196,-0.61364 h -5.72731 l -1.51949,0.96429 -5.72732,0.58442 -1.87014,6.13641 -3.27276,4.29549 -0.99351,0.49675 -0.23377,2.30846 v 0.4091 l -3.65262,-0.14611 -0.75975,-0.61364 -1.75326,0.29221 -1.78965,1.59498 -0.0827,5.78546 0.57855,0.6612 -0.41325,1.57034 c 0,0 -0.74384,0 -1.07444,0.0827 -0.3306,0.0827 -2.47948,0.0827 -2.47948,0.0827 l -0.90915,-0.4959 -0.1653,-8.017 v -1.48769 l -1.40504,-0.82649 -1.32239,-0.41325 -1.48769,0.0827 -0.57855,0.74384 -0.74384,0.4959 -2.39684,-0.3306 -1.23974,-1.65299 -9.33939,0.0827 -2.23153,-0.99179 -0.6612,-2.31419 -2.14889,-3.96717 -11.24032,-0.1653 -1.65299,-0.6612 -8.5129,-0.1653 -2.14889,-0.82649 -4.62837,-0.41325 -1.40504,-0.66119 -3.88452,-0.41325 -2.81009,-1.73564 -7.93434,-6.36401 0.33059,-2.39683 0.90915,-0.74385 1.15709,-6.69461 5.45487,-6.44666 3.22332,-1.57034 11.65358,-0.0826 -0.24795,-5.78547 -2.89273,-1.23974 h -3.96717 l -8.76085,-20.41442 -0.0827,-9.33939 1.32239,-1.57034 0.57855,-0.99179 1.48769,-0.6612 h 1.98359 l 0.57854,-13.22391 1.3224,-1.07445 -0.4959,-10.08323 2.47948,-0.9918 0.41325,-1.73564 1.40504,-1.32239 -0.24795,-6.19871 -0.99179,-1.15709 -3.22333,-3.22333 -0.0827,-1.65299 -3.71923,-3.47128 -2.64478,-5.45486 0.0827,-4.29778 -1.23974,-0.33059 -0.0827,-22.31536 1.32239,-0.3306 0.0827,-2.89273 1.81829,-3.80188 2.72743,-1.98358 -0.1653,-11.07503 -0.90914,-0.4959 -2.64479,-6.777256 -0.0826,-6.28136 -1.1571,-1.074443 -0.0827,-7.273154 1.07445,-0.826495 1.73564,-0.08265 0.24794,-3.636577 3.30598,-6.364009 1.57034,-1.405041 0.0827,-2.810082 5.04162,-10.99238 1.73564,-0.578547 2.39683,-1.818288 v -2.644783 l -1.23974,-0.743845 -0.0827,-3.719227 2.06624,-0.743845 0.3306,-4.62837 1.73564,-0.330598 1.15709,-1.157093 0.1653,-1.405041 4.04982,-7.025205 8.09965,-8.099648 3.63658,-8.678195 V 8.0996474 l 0.74384,-0.4958968 0.0827,-3.2233294 0.8265,-1.2397421 0.24794,-1.4876905 2.31419,-0.08265 0.3306,1.8182884 10.82708,8.016998 1.65299,2.479486 11.81887,7.025204 16.41519,5.890797 20.10405,13.207893 4.44159,4.324709 1.28572,0.58442 29.33789,28.636581 10.9871,12.857241 6.19485,7.01304 8.64941,7.714344 19.0521,19.16898 1.05195,0.46753 23.61057,23.3768 2.2208,1.28573 7.83123,7.83123 2.22079,0.23376 8.53254,9.35072 2.10391,0.35066 3.27275,4.44159 4.90913,4.32471 3.38963,1.98703 7.94812,8.7663 -1.5195,2.9221 -1.4026,3.50652 -0.58442,6.19485 -0.35066,6.31173 -4.20782,8.065 -0.46754,5.25978 -0.7013,7.59746 -1.28572,4.44159 -1.28573,1.75326 -2.57145,1.05196 -4.67536,0.58442 -0.35065,5.37666 -1.51949,3.50652 -2.33768,1.05196 -3.15587,0.81819 -0.93507,3.50652 -0.58442,2.9221 -2.33768,1.98703 -2.10391,1.87014 -0.93508,3.15587 -1.51949,1.28572 -0.93507,0.46754 -1.28572,0.81819 -4.55848,-0.11689 -1.75326,-1.05195 -7.83123,-0.11689 -3.03898,-0.58442 -5.25978,-0.11688 -1.63638,-0.58442 -5.96108,-0.58442 -0.93507,-0.70131 -3.62341,2.9221 -3.15587,2.57145 -2.45456,0.70131 -2.33768,0.23376 -2.9221,-0.35065 -2.33768,-1.75326 -6.05147,0.21933 -4.13247,1.98359 -2.89273,1.90094 -2.39684,2.81008 -2.23153,0.90915 -5.95077,-0.3306 -1.65299,-1.23974 -1.65299,0.0826 -3.38862,4.62837 -5.45487,0.90915 -5.78546,-0.6612 -0.3306,1.32239 -1.65299,0.0827 -0.3306,2.56214 -3.38863,-0.0827 -0.41324,0.0827 z"
                  stroke="#F7FCFE"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-opacity="0.25"
                  fill="#e0e0e0"
                  original="#e0e0e0"
                  id="jqvmap1_muynak"
                  class="jqvmap-region"
                  fill-opacity="1"
                  data-admin="Baxtiyar Menglibekov"
                  data-admin-phone="+998 (61) 322-24-60"
                ></path>
                <path
                  d="m 582.84408,294.48007 -4.3391,6.03341 -3.30598,4.25645 -4.54572,6.15738 -9.38071,12.56272 -3.5126,4.835 -4.29778,5.37221 -0.66119,3.01671 -2.06624,2.14889 -1.52901,-0.12398 -0.3306,-1.85961 -1.98359,-2.43816 -3.71923,-2.19021 -5.62016,-3.26466 -5.74414,-3.182 -23.10053,-12.14947 -2.64478,0.24795 -0.0827,1.98358 -1.90094,1.32239 -0.0827,1.4877 -2.06623,1.73563 -0.8265,0.4959 -1.98359,-0.1653 -4.38042,-3.71922 -1.73564,-0.8265 -1.48769,-1.57034 -1.23974,-0.0827 -3.05803,-3.14068 -1.23974,0.0827 -1.98359,-1.73564 -2.81008,-1.98359 -5.58421,-3.85354 h -3.74029 l -0.23377,0.7013 -7.01304,0.11689 -1.16884,0.93507 h -7.12992 l -0.46754,0.93507 h -7.71434 l -0.23377,1.05196 h -3.15587 l -6.49481,8.41953 -0.95047,2.14888 -2.27286,1.81829 -0.24795,2.02491 -1.65299,1.40504 -0.41325,1.28107 -4.09766,4.29205 0.23376,1.51949 -2.80521,2.45457 -0.46754,1.75326 -1.63637,1.28572 -0.46754,2.10391 -1.87014,1.51949 0.11688,1.28573 -3.85717,3.74029 -0.11689,14.72738 1.16884,1.28573 v 12.85724 l 1.05196,2.9221 1.28572,2.9221 0.81819,1.4026 v 5.8442 h -1.05195 l -0.11689,3.03899 h -2.45456 l -1.75326,-2.10391 h -1.40261 l -1.87014,-1.87015 -1.75326,-0.35065 -1.63638,-1.75326 -3.27275,-2.9221 -1.98703,-0.58442 -1.75326,-1.28572 -3.50652,-3.38964 -1.28572,-0.11688 -1.28573,-1.5195 -1.75326,-0.11688 -2.57145,-3.15587 h -1.16884 l -1.98703,-1.51949 -1.28572,-0.35065 -2.57145,-3.38964 h -1.28572 l -1.16884,-1.16884 -1.75326,-0.11688 -1.87015,-2.33768 -0.29221,-4.76303 -1.02273,-0.1461 -0.0877,-5.20134 1.2565,-0.35065 -0.17533,-4.85069 1.05196,-0.20454 v -2.60067 l 6.29869,-5.10718 2.97538,-1.81829 1.48769,-0.99179 v -1.57034 l -1.48769,-0.3306 -0.66119,-1.07444 -2.47949,-0.8265 -0.24794,-4.21512 -1.1571,-0.1653 -0.24795,-2.81008 -0.90914,-0.74385 -0.82649,-0.90914 -1.48755,-0.24795 -1.1571,0.99179 -0.24795,1.1571 h -3.47127 l -0.41325,0.0827 -0.1653,-2.14889 -1.65299,-0.99179 -0.24795,-4.95897 -1.23974,-0.24795 v -7.27316 l 1.65299,-0.66119 -0.57855,-0.8265 -0.90914,-0.16529 0.0827,-1.81829 h -0.99179 l 0.16529,-12.97597 -1.32239,0.0413 -0.12397,-2.76875 1.19842,-0.28928 0.0413,-1.52901 1.32239,-0.41325 -0.0413,-3.47128 0.90914,-0.33059 -0.0413,-4.835 1.69431,-1.77696 0.0413,-1.48769 1.73563,-0.0413 3.22333,-3.38863 0.0827,-2.39683 -0.86782,-0.1653 0.0413,-2.60346 1.65299,-1.90094 0.66119,-1.61166 1.48769,-1.19842 0.57855,-0.86782 0.28927,-1.65299 0.0413,-0.49589 1.28107,-0.1653 1.90093,1.52901 3.34731,0.78517 3.30598,-0.28927 2.98106,-1.30867 5.55199,-4.44159 0.81819,0.46754 5.55199,0.52597 1.63637,0.64287 5.8442,0.11688 2.98055,0.7013 6.95459,0.0584 1.46105,0.87663 6.19486,0.11688 3.56496,-1.75326 1.8117,-1.69482 1.1104,-3.50652 4.50003,-3.97405 1.46105,-5.49355 4.73381,-1.75326 2.22079,-4.85069 0.17533,-4.32471 3.27275,-0.46753 3.6234,-1.16884 1.92859,-2.80522 1.05196,-4.96757 1.05195,-12.74036 4.32471,-7.59746 1.16884,-13.091 2.33768,-4.96757 2.33768,1.69481 0.87663,2.27924 7.53902,10.51956 9.11695,12.7988 18.46767,27.05865 14.14297,20.74691 8.94162,12.74036 1.75327,0.11688 0.81818,-0.81819 10.87022,-0.23377 -0.11689,-0.93507 10.9871,0.11689 6.5455,12.62347 5.49355,4.20782 11.57152,5.96109 z"
                  stroke="#F7FCFE"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-opacity="0.25"
                  fill="#e0e0e0"
                  original="#e0e0e0"
                  id="jqvmap1_taxtakopir"
                  class="jqvmap-region"
                  fill-opacity="1"
                  data-admin="Jambul Adilov"
                  data-admin-phone="+998 (61) 421-56-23"
                ></path>
                <path
                  d="m 549.35482,341.04376 -1.31494,-0.37987 -0.64286,-1.46105 -0.23377,-1.46105 -1.78248,-1.92859 -36.26002,-20.09222 -1.07444,-0.0827 -0.0827,1.1571 -1.65299,1.07444 -0.1653,1.65299 -3.05803,2.47948 v 3.14068 l -4.13247,4.04983 v 1.07444 l -1.81829,1.81829 v 5.95076 l -2.31419,2.56214 -0.41325,1.23974 -0.41324,12.89332 1.32239,1.15709 -0.1653,9.00879 -0.90914,1.15709 -0.24795,13.88511 0.90914,0.8265 0.0827,6.69461 -0.66119,1.23974 2.64478,3.05803 -0.0827,16.52989 -1.65299,3.22333 -1.48769,1.23975 -0.57855,1.81828 -12.14947,11.65358 -0.99179,0.4959 -1.23975,2.31418 -1.73563,2.14889 -1.07445,1.07444 -6.52931,0.0827 -0.57854,-0.74385 h -10.49649 l -1.07444,-0.82649 h -7.6864 l -0.66119,0.74385 -2.31419,0.16529 -2.18632,3.92473 -1.40261,1.92859 -1.1104,0.52597 -3.91561,-0.29221 -1.1104,-0.93507 -0.23377,-1.22728 h -0.58442 l -2.34979,2.60458 -0.90914,1.73564 -5.95076,-0.3306 -0.8265,0.90915 0.8265,2.14888 3.55392,0.24795 1.73564,1.1571 1.81829,1.65298 1.81829,1.98359 -0.1653,4.71102 -1.07444,1.40504 -0.1653,1.1571 -1.40504,0.57854 -0.74385,1.32239 0.4959,0.90915 2.97538,0.24795 1.48769,1.48769 -0.3306,6.28136 -0.3306,0.82649 0.6612,1.73564 0.74385,1.73564 0.33059,0.82649 0.8265,-0.0827 3.14068,-3.80187 1.23974,-0.24795 1.57034,-1.98359 h 0.6612 l 0.33059,-3.14068 0.8265,-0.33059 0.1653,-6.69461 0.90914,-1.40504 1.32239,-1.90094 1.48769,-1.40504 0.0827,-1.57034 0.6612,-0.41325 0.4959,-0.0827 0.0827,-10.16588 1.48769,-0.8265 0.33059,-1.07444 1.40504,-0.0827 1.3224,0.3306 0.16529,1.15709 0.9918,0.4959 1.23974,0.49589 v 0.41325 l 0.24795,0.4959 8.26495,-0.24795 0.57854,-0.1653 0.0826,-4.71102 h 5.37222 l 0.66119,0.74384 8.43025,0.24795 0.4959,-1.07444 h 5.70281 l 0.1653,-1.07444 1.15709,0.1653 0.1653,1.07444 3.47128,-0.1653 0.41325,1.48769 9.42204,-0.24795 0.33059,-1.40504 2.81009,0.1653 0.33059,-1.07444 h 1.57034 l 1.65299,-1.73564 1.48769,-0.9918 2.39684,-0.33059 0.90914,-0.8265 1.73564,-0.1653 0.3306,1.23974 8.59554,-0.16529 -1.32239,-3.88453 -0.82649,-3.38863 -1.32239,-0.57854 -0.57855,-3.71923 -0.74384,-0.24795 -0.1653,-3.80187 -1.1571,-0.57855 0.0826,-3.80188 1.57034,-0.24794 -0.24795,-8.76085 h 0.57855 l 0.3306,-0.0827 -0.0826,-6.52931 0.90914,-0.33059 0.0827,-6.11607 1.07445,-0.0827 v -4.79366 l 0.90914,-0.1653 0.1653,-3.88453 0.99179,-0.1653 -0.1653,-3.80187 h 0.9918 l 0.0826,-4.29778 h 0.74384 l 0.24795,-3.05803 2.64478,-2.14888 0.0827,-1.81829 3.22333,-1.98359 0.24795,-2.06624 1.32239,-0.82649 3.38863,-4.29777 3.05803,-3.96718 0.0826,-1.32239 2.14889,-1.57034 2.89273,-3.47128 1.32239,-2.06623 z"
                  stroke="#F7FCFE"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-opacity="0.25"
                  fill="#e0e0e0"
                  original="#e0e0e0"
                  id="jqvmap1_ellikkala"
                  class="jqvmap-region"
                  fill-opacity="1"
                  data-admin="Seydamat Avezov"
                  data-admin-phone="+998 (61) 328-36-48"
                ></path>
                <path
                  d="m 501.20706,322.82884 -3.05803,-0.1653 -4.17379,-4.0085 -1.90094,-0.99179 -1.19842,-1.28107 -1.13643,-0.22729 -3.16134,-2.97538 -1.11577,-0.0207 -2.35551,-2.19021 -7.76905,-5.64083 -2.29352,-0.0827 -0.51656,0.92981 -7.12852,-0.0207 -1.36372,1.21908 -6.46732,-0.14464 -0.61987,1.11577 -7.21116,-0.22729 -0.30994,1.05378 -3.78121,-0.0413 -5.02096,6.61196 -0.72318,0.86782 -1.11577,2.27286 -2.06624,1.79762 -0.37192,2.23154 -1.83895,1.34305 -0.53722,1.26041 -3.59525,3.65724 -0.26861,0.20662 0.33059,1.85961 -2.95471,2.37617 -0.55789,1.90094 -1.65299,1.30173 -0.41325,1.9216 -1.63232,1.36372 -0.20663,0.12397 0.1653,1.28107 -3.6779,3.59525 -0.22729,13.69915 1.30173,1.40504 -0.10331,13.07928 0.0207,0.30994 1.9216,4.83499 1.21908,2.14889 -0.14463,7.5211 -1.03312,-0.0207 -0.1653,3.0167 -1.11577,0.6612 -0.49589,0.3306 0.16529,5.62016 -0.82649,0.6612 0.0827,4.54572 -1.23974,1.81829 -3.80188,4.29777 -1.40504,0.4959 -3.71923,3.63657 -0.41324,3.88453 -1.07445,0.82649 -0.0827,1.32239 -9.25674,8.76085 -0.57854,1.90094 -2.39684,2.23153 -0.66119,0.3306 0.0827,2.31418 0.66119,0.9918 v 3.55393 l 0.74385,0.99179 0.33059,7.10785 1.23975,2.64479 0.66119,2.06623 1.90094,1.48769 v 6.36401 l 1.32239,-0.16529 0.6612,0.99179 3.63657,-0.0827 0.57855,2.23154 1.90094,1.32239 -0.1653,5.62016 0.90914,0.3306 0.0827,2.06624 1.48769,1.81828 2.31419,-0.1653 0.3306,3.88453 1.90093,1.81829 0.1653,1.23974 h 2.72744 l 2.81008,4.79367 0.3306,4.04982 3.38862,0.1653 3.38863,3.63658 0.3306,2.56213 4.71102,-0.1653 2.14889,2.06624 -0.1653,0.8265 0.90914,0.0827 1.73564,-2.14889 1.07444,-1.15709 1.40505,-0.24795 0.99179,-0.8265 0.57855,0.1653 0.57854,-0.49589 -0.0827,-0.9918 0.4959,-0.0827 0.1653,-3.47128 -2.31419,-3.71922 -1.23974,-2.06624 -1.07444,-1.81829 -0.1653,-1.23974 -0.74385,-0.99179 -0.57854,-0.6612 v -0.90914 l -0.90915,-0.24795 -0.57854,-0.74385 0.41324,-0.74384 v -1.32239 l 0.1653,-3.38863 -1.81829,-4.54572 -0.24794,-0.6612 0.66119,-0.99179 0.41325,-5.20692 -0.90914,-0.82649 -2.72744,-0.1653 -1.57034,-2.47949 0.90915,-2.31418 1.65299,-0.4959 0.0827,-0.99179 0.74384,-0.8265 0.24795,-3.96717 -4.13247,-3.88453 -4.38043,-0.24795 -1.23974,-3.14068 -0.0827,-1.07444 1.81829,-1.81829 5.53752,0.24795 0.49589,-0.90914 2.81008,-2.97538 0.74385,-0.74385 h 1.57034 l 0.82649,0.41325 0.3306,1.98359 0.3306,0.33059 2.64478,0.41325 1.90094,-2.06624 2.14889,-4.46307 2.31418,-0.1653 0.90915,-0.90914 9.33939,0.24795 1.23974,0.82649 10.16588,-0.0827 1.1571,0.74385 h 4.71102 l 1.57034,-2.23154 1.23974,-2.39683 0.1653,-0.4959 1.90094,-0.66119 11.07503,-10.66179 1.15709,-2.64478 1.81829,-1.23974 1.15709,-2.47949 0.24795,-15.7034 -3.38863,-3.63657 1.15709,-1.81829 0.1653,-5.37222 -1.48769,-1.32239 0.57855,-14.62895 0.99179,-1.57034 0.0827,-7.35581 -1.23974,-1.48769 -0.3306,-0.41325 0.90914,-13.80246 0.4959,-1.40504 2.06624,-2.06624 v -6.44665 l 1.65299,-1.3224 0.24794,-1.23974 3.88453,-3.80187 z"
                  stroke="#F7FCFE"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-opacity="0.25"
                  fill="#e0e0e0"
                  original="#e0e0e0"
                  id="jqvmap1_beruniy"
                  class="jqvmap-region"
                  fill-opacity="1"
                  data-admin="Ikrom Xidirov"
                  data-admin-phone="+998 (61) 421-56-23"
                ></path>
                <path
                  d="m 549.00417,551.49341 -23.25992,9.58449 -26.41578,-38.33795 -4.09094,-3.27276 -3.50652,-0.7013 -17.29883,-3.03898 -0.81819,-0.70131 -6.19485,0.11689 -4.09094,2.45456 -3.27276,2.57145 0.23377,2.22079 -0.93507,0.35066 -0.11688,6.77927 1.16884,2.22079 -0.46754,0.70131 -1.16884,-0.11689 -2.45456,-4.3247 -2.80522,-0.35066 -0.58442,-0.23376 0.11688,-5.37667 1.05196,-0.7013 0.11688,-5.8442 -1.63637,-1.63638 H 449.419 l -2.45456,-0.81819 -4.4416,-5.14289 -3.97405,0.11688 -0.58442,-1.87014 -1.16884,-1.87015 -0.70131,-1.05195 v -2.68833 l 1.28573,0.23376 2.80521,-3.50652 1.51949,-0.11688 1.40261,-0.58442 1.05196,-0.23377 0.93507,-0.93507 0.46754,-0.81819 -0.11689,-0.58442 0.23377,-4.55848 -5.1429,-8.06499 v -1.63638 l -1.28572,-1.63637 0.11688,-1.05196 -0.81818,-0.23377 h -0.11689 l -0.23377,-0.46753 v -3.74029 l 1.98703,-0.23377 2.9221,-3.97406 1.28573,-0.23376 1.28572,-1.63638 h 1.16884 l 0.70131,-3.6234 0.93507,-0.70131 0.11688,-6.77927 2.45457,-3.50652 1.16884,-1.28572 v -0.70131 l 0.23376,-0.7013 0.46754,-0.11689 h 0.7013 v -10.16891 l 1.05196,-0.58442 0.23377,-0.7013 0.58442,0.23377 0.23377,0.7013 1.98702,0.81819 0.58442,1.05196 9.93514,-0.23377 1.5195,-0.70131 v -3.97405 l 2.80521,-0.23377 0.93507,0.93507 10.2858,0.23377 0.7013,-1.16884 h 4.20782 l 0.70131,-0.23377 0.23377,0.35065 h 2.68833 l 0.46754,1.40261 11.33774,-0.35065 0.95022,-0.0903 0.33059,-1.40504 2.72744,0.24795 0.41324,-0.82649 1.23975,-0.24795 2.47948,-2.64478 2.72743,-0.4959 0.1653,-0.3306 0.6612,-0.1653 0.41325,1.07444 9.66998,-0.33059 0.6612,1.15709 0.1653,0.57855 0.99179,0.57854 0.24795,0.90915 -2.06624,0.74384 -4.04982,2.47949 -2.81008,0.33059 -4.62837,2.81009 -2.39684,0.24794 -2.56213,1.73564 -3.22333,0.3306 -1.73564,1.65299 -2.64478,0.8265 -1.07445,0.49589 0.1653,5.53752 0.90915,1.48769 0.57854,2.39683 0.90915,1.57034 0.99179,2.64479 0.4959,3.14068 2.81008,6.11606 0.57855,1.98358 1.90093,2.64479 2.47949,4.54572 6.85991,13.38921 2.97538,3.47128 2.97538,6.36401 6.6946,14.8769 9.58734,20.00118 6.03341,12.23212 1.65299,2.39683 z"
                  stroke="#F7FCFE"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-opacity="0.25"
                  fill="#e0e0e0"
                  original="#e0e0e0"
                  id="jqvmap1_tortkul"
                  class="jqvmap-region"
                  fill-opacity="1"
                  data-admin="Rustam Shamuratov"
                  data-admin-phone="+998 (61) 677-57-43"
                ></path>
                <path
                  d="m 401.05824,422.68724 4.76303,-3.8864 0.32143,-1.31494 1.4026,-1.08118 0.4091,-3.94483 4.14938,-3.68185 0.61364,-0.58442 1.40261,-0.35065 3.6234,-3.97406 0.75975,-1.2565 0.0584,-4.7338 0.81819,-0.73053 0.0584,-5.4351 0.20455,-0.32143 -1.54871,-0.0584 -2.01625,-2.30846 h -1.49027 l -1.89937,-2.01624 -1.8117,-0.35066 -4.55848,-4.64614 -2.48378,-0.7013 -4.76303,-4.41237 -1.54871,-0.32143 -1.46105,-1.54872 -1.75326,-0.11688 -2.39612,-3.09743 -1.2565,0.0877 -1.95781,-1.57794 -1.2565,-0.32143 -2.57145,-3.38963 h -1.22728 l -1.25651,-1.22729 -1.72404,-0.0877 -2.68833,-3.50652 -0.20455,-3.65262 -0.96429,-0.35066 0.0292,-7.04226 1.28573,-0.46753 -0.17533,-4.85069 1.05196,-0.35065 -0.0877,-2.13313 6.34096,-4.9968 3.94484,-2.45456 0.37987,-0.20455 0.0584,-0.40909 -0.84741,-0.14611 -0.81819,-1.13962 -2.89288,-0.93507 -0.1461,-3.79873 -0.96429,-0.23377 -0.37988,-3.24353 -0.75974,-0.73052 -0.29221,-0.46754 -0.43832,-0.23377 -0.17532,0.0877 -0.49676,0.40909 -0.32143,1.69482 -4.26627,-0.0584 -1.22728,0.37987 -0.29221,0.0584 h -0.1461 l -0.26299,-2.9221 -1.87015,-1.05195 -0.17532,-4.50004 -1.16884,-0.40909 v -8.70786 l 0.52597,-0.32143 -0.52597,-0.26299 0.20454,-1.22728 -0.90585,-0.14611 0.17533,-12.9449 -1.40261,0.0584 -0.26299,-4.64614 1.13962,-0.37987 0.11688,-1.37339 1.43183,-0.75974 0.0292,-3.3312 0.81819,-0.32143 -0.11688,-4.55848 1.69482,-1.63637 0.0584,-2.13313 2.42534,-0.17533 2.48379,-2.51301 0.11688,-0.96429 -0.75975,-0.32143 0.11689,-4.20783 1.78248,-1.78248 0.75975,-2.04547 1.31494,-0.7013 0.64286,-0.73053 -0.11688,-1.87014 -2.2208,0.0584 -0.35065,0.81819 -2.74677,0.23377 -0.46754,0.58442 -2.33768,1.22728 -2.2208,2.27924 -2.33768,1.8117 -1.87014,0.46754 -6.01953,-0.4091 -0.81818,-0.11688 -1.16884,-1.22728 h -0.17533 l -3.68162,4.73381 -5.8442,0.81819 -5.02601,-0.70131 -0.58442,1.46105 -1.46105,-0.0584 -0.0584,2.33768 0.29221,1.22728 -0.17533,0.93508 4.85069,5.08445 1.05196,1.40261 0.17532,7.24681 -1.16884,0.87663 0.23377,10.92865 1.22728,1.69482 0.70131,1.16884 2.80521,0.46753 1.92859,0.35066 2.31522,0.7153 0.4959,0.90914 0.8265,0.90914 -0.0827,2.89274 -0.74385,0.82649 v 0.6612 l -0.1653,0.90914 -1.07444,0.3306 -2.56214,0.24795 h -0.74384 l -0.4959,0.57854 -0.57854,0.41325 0.0827,1.73564 v 1.48769 l 0.24794,8.67819 -0.82649,1.1571 -0.6612,1.32239 -0.82649,0.74384 -0.41325,-0.41324 -0.66119,0.74384 0.33059,1.07445 0.41325,0.66119 v 0.8265 l 1.48769,0.49589 0.41325,1.73564 -0.57855,4.29777 0.41325,0.6612 1.57034,0.0827 0.82649,-0.8265 h 0.4959 l 2.39684,-0.0826 0.41324,1.23974 1.40504,0.99179 -0.24794,3.80188 -1.40504,2.06623 -2.97539,5.45487 -3.30597,4.87632 -1.65299,0.1653 -8.92615,0.0827 -1.65299,-0.3306 -0.82649,-0.24795 -2.23154,2.81008 -0.0827,3.71923 1.1571,1.90094 0.99179,2.56213 1.40504,1.40504 -0.3306,2.23154 -0.99179,1.57034 -2.23154,2.47948 -0.90914,1.57034 -0.4959,0.90914 0.1653,1.23975 3.30598,0.57854 1.73564,0.24795 4.04982,2.89273 2.72744,0.9918 1.73563,0.57854 2.89274,0.57855 7.93435,6.94255 2.06623,0.0827 1.23974,0.90915 1.73564,1.23974 4.21513,0.4959 1.90093,0.24795 2.72744,1.32239 2.06623,1.57034 3.22333,1.98358 3.47128,1.3224 2.47949,3.71922 2.39683,2.64479 0.4959,2.39683 0.41324,3.80188 0.9918,0.24794 0.24795,4.13248 1.81828,2.89273 1.73564,1.15709 0.9918,0.4959 z"
                  stroke="#F7FCFE"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-opacity="0.25"
                  fill="#e0e0e0"
                  original="#e0e0e0"
                  id="jqvmap1_karaozek"
                  class="jqvmap-region"
                  fill-opacity="1"
                  data-admin="Uzaqbergen Utambetov"
                  data-admin-phone="+998 (61) 389-04-42"
                ></path>
                <path
                  d="m 396.85042,424.93725 c -2.05452,-0.47623 -1.67534,-0.13638 -3.41886,-0.14608 l -1.75326,-0.61364 -1.78248,-1.34417 -1.78248,-2.80521 -0.61364,-0.84741 -0.17533,-3.53574 -0.87663,-0.58442 -0.43831,-4.32471 -0.5552,-2.30846 -2.04547,-2.39612 -2.2208,-3.41886 -3.44808,-1.19806 -3.68184,-2.42534 -1.28573,-1.1104 -2.25001,-1.19806 -4.99679,-0.58442 -1.13962,-0.11689 -1.69482,-0.46753 -1.40261,-1.22729 -1.46105,-0.17532 -1.02274,0.0584 -1.60715,0.96429 -2.13313,0.58442 -4.12016,-0.0292 -0.87663,0.5552 -0.58442,1.31495 -0.67209,1.22728 -0.1461,2.65911 -0.52598,0.84741 0.49676,0.75974 3.82795,1.28573 1.98703,1.08118 1.31494,1.69481 -0.0292,4.4416 -0.73053,1.02273 -5.14289,0.20455 -0.93507,0.75974 0.1461,2.04547 2.10391,1.89937 -0.0877,6.34096 1.51949,2.513 0.20455,2.80522 -1.05196,1.22728 -0.64286,0.64286 -2.89288,-0.23376 -0.5552,-0.90586 -1.51949,0.0292 -0.96429,0.75974 0.1461,1.34417 0.4091,0.93507 2.513,1.40261 1.72404,1.87014 3.50652,3.50652 2.42535,1.49027 1.05195,1.31495 2.25002,0.43831 1.16884,0.20455 2.60067,-0.99351 1.08118,-1.28573 0.17532,-1.22728 2.42534,-0.0584 c 0,0 0.99352,0.46753 1.02274,0.58442 0.0292,0.11688 0.93507,1.66559 0.93507,1.66559 l 1.2565,0.37988 c 0,0 0.73053,-0.78897 0.70131,-1.05196 -0.0292,-0.26299 0,-1.6656 -0.17533,-1.75326 -0.17532,-0.0877 -1.78248,-1.08118 -1.78248,-1.08118 l 0.23377,-4.23704 0.96429,-0.5552 -0.0292,-1.60715 3.03899,-0.17533 0.37987,1.6656 0.52598,1.84092 1.84092,0.0292 0.0584,-2.83444 2.83444,0.43832 0.37987,-1.8117 1.08118,-0.99352 1.28572,-0.0877 1.13962,-0.26299 0.29221,-1.57793 2.45457,-0.32143 0.96429,0.73052 1.02273,2.3669 1.49028,1.28573 3.85717,0.35065 h 0.64286 l 0.75975,-1.02274 1.31494,-0.87662 1.13962,-0.99352 c 0.18511,-0.32144 1.00799,-0.6068 0.78897,-0.84741 0.11934,-0.59053 0.50378,-1.10818 0.73052,-1.84092 l 0.78897,-0.90586 0.7013,-0.46754 0.35065,-0.58441 0.4091,-0.61364 -0.61364,0.0292 c -0.26671,0.11669 -5.02813,0.19698 -2.60063,0.4676 z"
                  stroke="#F7FCFE"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-opacity="0.25"
                  fill="#e0e0e0"
                  original="#e0e0e0"
                  id="jqvmap1_amudarya"
                  class="jqvmap-region"
                  data-admin="Sobir Xojametov"
                  data-admin-phone="+998 (61) 341-21-44"
                ></path>
                <path
                  d="m 348.28488,329.4408 1.40504,-1.40504 h 0.74384 l 1.40504,-1.57034 -0.24794,-12.48007 1.65299,-1.1571 1.15709,-0.41324 h 2.72743 l 0.24795,-1.40505 0.82649,-0.90914 v -1.57034 l -1.15709,-1.40504 -5.53751,-0.99179 h -0.90915 l -2.64478,-3.96718 -0.24795,-11.81887 1.11577,-1.11577 -0.1653,-6.32269 -5.99209,-6.44666 0.24795,-1.19841 -0.12397,-1.07445 -2.97538,-0.24794 -0.95047,0.33059 h -0.74385 l -0.57854,-1.23974 -0.12398,-0.41325 -0.53722,0.4959 -0.20662,2.10756 0.0827,0.8265 1.07444,0.70252 -0.37192,3.182 -0.61987,0.70252 -1.81829,0.12398 -0.28928,2.76875 1.48769,1.36372 0.20663,3.01671 -0.4959,2.06623 -1.11577,1.48769 -0.95047,0.45458 0.0413,1.28106 0.78517,0.24795 0.1653,4.21512 -0.9918,0.90915 -0.66119,0.74384 -3.59525,-0.12397 -1.81829,-0.28927 -1.15709,-0.78517 h -1.19842 l -2.19021,0.33059 -2.35551,0.57855 -1.44637,1.61167 -1.44636,1.15709 -0.78517,1.28106 -0.28928,1.98359 -0.0827,1.73564 0.95047,0.53722 0.24795,1.36372 1.61167,1.73564 2.72743,2.89273 1.40504,0.4959 0.3306,0.66119 -0.1653,7.81038 v 1.36371 l 0.3306,0.45458 0.78517,0.45457 0.16529,0.61987 0.0413,0.45457 4.1738,0.24795 0.82649,1.32239 1.44637,0.3306 0.41325,0.90914 0.90914,0.20663 -0.12397,2.31418 1.07444,0.37192 0.12397,2.68611 h 2.76876 l 0.86782,-1.11577 0.61987,-0.45457 0.99179,-0.74384 0.45458,-0.74385 5.74414,-0.20662 0.82649,-0.53722 0.90914,-0.20663 z"
                  stroke="#F7FCFE"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-opacity="0.25"
                  fill="#e0e0e0"
                  original="#e0e0e0"
                  id="jqvmap1_chimbay"
                  class="jqvmap-region"
                  fill-opacity="1"
                  data-admin="Aybek Tajetdinov"
                  data-admin-phone="+998 (61) 787-33-15"
                ></path>
                <path
                  d="M 322 324 L 322.8265 323.9711 L 323 325 L 323.062 326.1778 L 323.6569 326.8223 L 328.2853 327.0083 L 329.0085 328.1861 L 330.3309 328.4547 L 330.6615 329.1986 L 331.1367 329.3846 L 331.116 331.3475 L 331.2193 331.9674 L 332.3764 332.2773 L 332.4797 335.17 L 337.1494 335.3353 L 338.3891 333.8269 L 339.8768 332.7318 L 340.1867 332.1326 L 345.5589 331.9673 L 346.6204 331.4322 L 347.76 331.1692 L 348.2568 331.0231 L 348.7243 331.9874 L 348.9581 332.2212 L 348.9873 332.8641 L 348.9289 333.2732 L 348.8997 333.77 L 350.5361 334.296 L 350.8868 334.9389 L 350.0978 339.4097 L 351.0621 341.0169 L 351.8219 341.3676 L 353.8966 341.5722 L 354.5395 341.4845 L 355.1531 340.6079 L 356.2927 340.5202 L 356.8771 341.1923 L 357.8122 341.9813 L 357.6661 344.4359 L 355.5037 347.5918 L 353.3706 351.9457 L 350.5654 356.0366 L 345.9485 356.2411 L 340.9517 356.4164 L 338.3218 355.4229 L 337.7082 353.9034 H 335.3997 L 332.799 354.4878 L 331.8639 355.4521 L 330.8704 356.0073 L 329.3801 356.8255 L 327.3054 357.4976 L 326.6625 357.556 L 325.669 354.4293 L 324.6463 352.004 L 323.1268 349.0819 C 323.1268 349.0819 322.7761 347.3579 322.7177 347.1241 C 322.6593 346.8903 321.9287 345.1079 321.9287 345.1079 L 319.6202 341.1631 L 318.9189 340.1696 L 318.3929 339.3514 L 317.2241 338.5917 L 318 338 L 318 337 L 319 336 L 320 334 L 320 334 L 319 333 L 319 331 L 319 330 L 319 329 L 320 329 L 320 329 L 321 328 L 321 328 L 321 327 L 321 326 L 321.9281 325.9177 Z"
                  stroke="#F7FCFE"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-opacity="0.25"
                  fill="#e0e0e0"
                  original="#e0e0e0"
                  id="jqvmap1_kegeyli"
                  class="jqvmap-region"
                  data-admin="Dawletbay Utemuratov"
                  data-admin-phone="+998 (61) 540-11-23"
                ></path>
                <path
                  d="M 334.3584 273.1565 L 335.0609 273.0325 L 335.3915 273.2391 L 335.1229 275.3467 L 335.4742 276.7931 L 336.3214 277.3717 L 336.1354 279.2726 L 335.9908 279.3966 L 334.0485 279.4999 L 333.6559 280.2438 L 333.1393 283.8391 L 334.7923 285.5541 L 335.1022 287.7237 L 334.7716 289.3767 L 333.9451 290.4305 L 332.5814 291.009 L 332.6847 293.9637 L 333.5319 294.4183 L 333.5526 296.9598 L 332.6021 297.9309 L 329.792 297.7449 L 328.3663 297.6416 L 327.0852 296.6911 H 325.1016 L 320.2459 297.6829 L 318.4896 299.6872 L 317.0639 300.679 L 315.8861 302.6626 L 315.4109 306.8777 L 315.4729 307.7042 L 316.5887 308.2621 L 316.692 309.3779 L 321.2171 314.1716 L 321.589 314.7088 L 322.7254 314.9568 L 322 323 L 321 323 L 321 324 L 321 325 L 321 325 L 320 325 C 320 325 320 325 320 325 L 320 326 L 320 327 L 320 328 L 319 328 L 318 329 L 318 331 L 318 333 L 319 334 L 318 336 L 317 337 L 317 338 L 317 338 C 317 338 315.209 338.6923 315.1798 338.517 C 315.1506 338.3417 314.3908 336.4423 314.3908 336.4423 L 312.3745 335.5072 L 308.7803 335.2734 L 308.5173 331.5623 L 306.0627 331.0071 L 302.0302 330.1597 L 300.7737 328.9616 L 298.3776 327.9389 L 296.2152 327.7928 L 294.6373 326.5947 L 294.4035 322.7375 L 293.2931 321.3349 L 292.0658 320.5167 L 290.9262 317.9452 L 289.4651 316.3381 L 289.2606 313.5913 L 287.595 313.3575 L 286.8937 313.0945 L 287.0106 296.8768 L 288.1502 295.6203 L 288.121 290.8865 L 288.5593 288.315 L 288.9976 287.9059 L 289.6989 285.1299 L 289.0268 283.9318 L 288.8807 279.724 L 289.4943 278.8766 L 290.3125 278.5844 L 290.8385 279.2273 L 296.0983 279.5195 H 296.6827 L 296.9457 276.4513 L 297.7347 275.9253 L 301.3581 271.0454 L 302.8776 265.698 L 307.9621 265.0844 L 309.3063 264.1201 L 313.7771 264.0324 L 315.0336 264.6168 L 317.0499 265.2012 L 318.4233 266.2239 L 322.8357 266.7791 L 323.7708 267.5681 L 323.9461 268.0064 L 324.4429 273.1785 Z "
                  stroke="#F7FCFE"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-opacity="0.25"
                  fill="#e0e0e0"
                  original="#e0e0e0"
                  id="jqvmap1_bozataw"
                  class="jqvmap-region"
                  fill-opacity="1"
                  data-admin="Kamal Allaniyazov"
                  data-admin-phone="+998 (61) 057-83-33"
                ></path>
                <path
                  d="m 334.46358,356.32634 1.28572,-0.40909 0.78897,-0.0292 0.29221,0.52598 -0.37987,0.81818 -1.72404,2.0747 -0.20455,0.7013 -0.0584,4.1786 1.28572,2.48379 0.93508,2.25002 1.37338,1.22728 -0.32143,1.19806 -0.87663,1.54871 -2.513,2.71755 -0.70131,1.16884 -0.73052,0.58442 -0.49676,0.49676 -2.9221,0.0292 -1.37339,-1.28572 c 0,0 -0.58442,-0.70131 -0.64286,-0.81819 -0.0584,-0.11688 -0.37987,-1.28572 -0.40909,-1.40261 -0.0292,-0.11688 -0.78897,-1.05195 -0.78897,-1.05195 l -1.28572,-0.52598 h -1.69482 l -1.05196,0.7013 -1.84092,0.20455 -0.93507,-0.58442 c 0,0 -0.93507,-0.7013 -0.9643,-0.84741 -0.0292,-0.1461 -0.37987,-0.29221 -0.37987,-0.29221 l 0.0877,-5.61043 -1.49027,-1.72404 -9.40916,-0.0877 -0.8117,-0.82634 -0.22729,-2.89273 -2.6861,-2.04558 -2.35551,-0.20662 -1.44637,-1.83895 -1.44637,-0.20663 0.6612,-0.95047 0.24795,-0.99179 0.9298,-0.3306 0.20663,-0.57854 -0.0827,-4.87632 -0.57855,-0.90915 -0.61987,-0.33059 -0.20662,-9.42204 -0.57855,-1.61167 0.0413,-2.06624 -1.07445,-0.61987 -0.28927,-0.37192 v -0.95047 l -0.45457,-0.70252 -0.45457,-0.53722 0.70252,-0.74385 0.33059,-0.33059 0.95047,0.61987 1.65299,0.24795 0.78517,0.70252 1.32239,0.12397 2.23154,0.95047 0.6612,0.6612 h 1.65299 l 0.41324,-0.0413 0.3306,4.0085 1.48769,0.3306 h 1.11577 l 2.31418,-0.0413 0.86782,0.12398 0.28928,1.98358 0.95047,0.86782 0.90914,0.0827 1.03312,-0.0413 1.19842,0.0827 2.56213,4.25645 0.74384,1.11576 0.6612,2.56214 0.75693,1.71849 2.33768,4.7338 1.31495,3.91561 0.23377,0.61364 1.43183,0.0585 1.8117,-0.23377 2.83444,-1.60716 1.72403,-0.64286 z"
                  stroke="#F7FCFE"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-opacity="0.25"
                  fill="#e0e0e0"
                  original="#e0e0e0"
                  id="jqvmap1_nukus rayon"
                  class="jqvmap-region"
                  data-admin="Ziyauatdin Zaytov"
                  data-admin-phone="+998 (61) 321-68-43"
                ></path>
                <path
                  d="m 286.6288,315.06629 c -0.11688,-0.0584 -1.84092,-0.26299 -1.84092,-0.26299 l -2.13313,0.11689 -5.43511,3.97405 -0.73053,0.90585 -0.0877,1.69482 0.23377,0.7013 -0.75975,0.75975 -3.74029,-0.1461 -0.7013,-0.32144 -0.46754,-1.2565 -2.27923,0.14611 -0.93508,-0.4091 -0.35065,-0.7013 -6.5455,-0.0877 -0.29221,6.51628 -0.64286,0.61364 -0.26299,1.60715 1.1104,0.64287 -0.0584,1.87014 0.81819,0.73053 0.37987,1.37338 1.22729,0.78897 0.64286,0.75975 2.25002,0.43831 1.57793,0.26299 1.57793,0.73052 3.74029,2.01625 0.93507,1.16884 1.49028,0.20455 0.78896,0.67208 0.64286,0.78897 0.0584,8.26954 1.87014,0.0877 1.16884,0.46753 0.32143,1.46105 0.67208,-1.19806 0.11689,-0.29221 1.13962,-1.51949 7.39291,-0.0292 1.34417,2.10391 0.87663,1.31495 1.28572,0.37987 0.5552,1.02273 1.54871,0.14611 0.0877,0.73052 0.23376,0.52598 0.87663,0.14611 0.29221,-0.67209 0.4091,-0.40909 0.81819,-0.32143 0.35065,-0.46754 0.0877,-0.61364 c 0,0 0.11689,-1.89936 0,-2.01625 -0.11688,-0.11688 -0.26299,-0.67208 -0.26299,-0.67208 l -0.78896,-0.43831 -0.0877,-0.67209 -0.40909,-10.75333 -0.32143,-2.16235 -0.61364,-0.81819 -0.49676,-0.49676 -0.23377,-1.22728 -0.64286,-0.96429 -0.37987,-0.14611 0.46753,-2.04547 0.46754,-0.40909 -0.11689,-0.40909 -1.05195,-0.67209 -0.26299,-0.67208 -0.46754,-0.93507 -0.1461,-3.74029 -1.31495,-0.93507 -0.46753,-0.73053 -1.43183,-2.86365 -1.57794,-1.75326 -0.17532,-1.87015 z"
                  stroke="#F7FCFE"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-opacity="0.25"
                  fill="#e0e0e0"
                  original="#e0e0e0"
                  id="jqvmap1_kanlikol"
                  class="jqvmap-region"
                  fill-opacity="1"
                  data-admin="Ibragimov Abu-Bakir"
                  data-admin-phone="+998 (61) 458-52-23"
                ></path>
                <path
                  d="m 253.63829,323.51116 -6.98382,-0.0584 -0.75974,0.73052 0.0292,2.25002 -0.52598,0.99351 -1.69482,0.43832 -0.7013,0.58442 -1.1104,0.32143 -0.5552,0.87663 0.87663,1.2565 0.87663,0.93507 3.6234,4.79225 2.13314,2.60067 2.45456,1.54871 1.05196,2.01625 3.59418,5.31822 1.8117,2.74678 2.98054,2.71755 1.22729,1.60715 3.18509,2.83444 2.71755,2.2208 3.18509,1.28572 1.98703,1.31495 c 0,0 2.39612,0.26299 2.74677,0.26299 0.35065,0 3.15587,0 3.15587,0 l 1.43183,-0.61364 1.78248,-0.29221 c 0,0 2.30846,0.78896 2.3669,0.93507 0.0584,0.1461 1.1104,1.05195 1.1104,1.05195 l 0.7013,-0.0292 0.43832,-1.1104 0.93507,-0.8474 c 0,0 0.32143,-0.99352 0.32143,-1.40261 0,-0.4091 0.0584,-1.72404 0.0584,-1.87015 0,-0.1461 -0.32143,-1.89936 -0.32143,-1.89936 l -0.11688,0.32143 -1.13962,-1.02274 c 0,0 0.0292,-0.49675 0.0292,-0.61364 0,-0.11688 -0.43832,-0.73052 -0.5552,-0.73052 -0.11688,0 -1.2565,-0.0292 -1.2565,-0.0292 0,0 -0.26299,-0.67209 -0.37988,-0.67209 -0.11688,0 -1.54871,-0.0877 -1.54871,-0.0877 l -0.67208,0.35065 -0.14611,0.46754 -1.51949,0.20455 -1.1104,-0.26299 -0.81819,-0.20455 -0.29221,-2.16235 -1.11039,-0.4091 -0.73053,-0.1461 -0.96429,-0.67209 -0.93507,-0.46753 -0.0292,-0.81819 0.26298,-7.48058 -1.05195,-0.32143 -0.5552,-0.73052 -0.67208,-0.70131 -3.91562,-2.513 -1.05195,-0.4091 -1.72404,-0.64286 -2.2208,-0.35065 -1.19806,-0.99352 c 0,0 -0.93507,-0.55519 -1.1104,-0.58442 -0.17532,-0.0292 -0.90585,-0.49675 -0.90585,-0.49675 l -0.49676,-1.84093 -0.5552,-0.78896 -0.29221,-1.57794 -0.55519,-0.81818 -0.49676,-0.87663 0.29221,-1.81171 -0.81819,-0.81818 -1.98703,-1.08118 -0.96429,-1.28573 z"
                  stroke="#F7FCFE"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-opacity="0.25"
                  fill="#e0e0e0"
                  original="#e0e0e0"
                  id="jqvmap1_shomanay"
                  class="jqvmap-region"
                  data-admin="Baxadir Yangibaev"
                  data-admin-phone="+998 (61) 320-80-90"
                ></path>
                <path
                  d="m 321.84011,364.80043 -0.70131,3.21431 1.43183,2.13314 3.24353,0.5552 2.80522,-2.01625 0.87663,-3.44808 -1.22728,-2.07469 -2.68833,-0.84741 -2.3669,0.1461 -1.31495,1.25651 -0.23377,0.64286 z"
                  stroke="#F7FCFE"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-opacity="0.25"
                  fill="#e0e0e0"
                  original="#e0e0e0"
                  id="jqvmap1_city_nukus"
                  class="jqvmap-region active"
                  data-admin="Utemurat Panayev"
                  data-admin-phone="+998 (61) 640-25-52"
                ></path>
                <path
                  d="m 283.15709,352.1694 -0.0827,-1.28107 1.90094,-0.16529 2.06624,-0.0827 h 1.11577 l 0.74384,0.66119 0.41325,0.6612 0.1653,0.57854 0.20662,0.37193 c 0,0 0.70252,0.45457 1.07444,0.61987 0.37193,0.1653 0.20663,0.0827 0.41325,0.20662 0.20663,0.12398 0.45457,0.20663 0.45457,0.20663 l 0.45458,0.41324 0.45457,0.28928 c 0,0 0.20662,0 0.28927,0.24794 0.0827,0.24795 0.28927,0.53723 0.28927,0.53723 l 0.3306,0.24794 0.61987,0.0827 0.3306,0.0413 0.61992,0.4546 0.4959,0.4959 0.6612,0.45457 -0.12398,0.95047 0.3306,0.45457 1.23974,0.20662 1.15709,0.0827 0.90915,0.6612 0.41325,0.70252 0.90914,0.53722 1.07444,0.0827 c 0,0 0.20663,0 0.41325,0.12398 0.20662,0.12397 0.28927,0.0413 0.41325,0.20662 0.12397,0.1653 0.45457,0.45457 0.45457,0.45457 l 0.3306,0.28927 0.37192,0.0413 v 0.99179 l 0.0413,1.03312 0.37193,0.74385 0.53722,0.53722 c 0,0 0.12397,0.3306 0.1653,0.45457 0.0413,0.12397 0.0827,0.3306 0.20662,0.53722 0.12398,0.20663 0.78517,0.41325 0.78517,0.41325 0,0 0.57855,0.20662 0.90915,0.24795 0.33059,0.0413 0.49589,0.0413 0.99179,0 0.4959,-0.0413 2.06624,-0.0413 2.06624,-0.0413 l 2.93405,-0.0827 c 0,0 1.40504,0.0413 1.65299,0.0827 0.24795,0.0413 0.57855,0.0827 0.57855,0.0827 l 0.24795,0.4959 0.0413,0.95047 0.0827,2.14888 0.0413,1.36372 0.0826,0.70252 1.61167,1.11577 0.57855,0.61987 -1.3224,1.32239 -1.94226,0.12398 -0.57854,1.32239 v 1.11577 l -0.74385,1.32239 -0.78517,0.53722 -0.57855,1.19842 -0.70252,0.78517 0.45458,2.10756 -1.28107,1.32239 -1.52902,1.36371 -0.1653,1.52902 0.1653,1.19842 -0.57854,1.19841 -0.41325,1.19842 -0.20662,0.86782 -2.43816,0.53722 -1.65299,-0.20662 -1.03312,-0.41325 -1.23974,-0.3306 c 0,0 -1.1571,-2.35551 -1.1571,-2.5208 0,-0.1653 -0.95046,-1.81829 -1.15709,-2.06624 -0.20662,-0.24795 -2.56213,-1.77697 -2.56213,-1.77697 l -1.52902,-3.05803 c 0,0 -0.61987,-0.90914 -0.99179,-1.28106 -0.37192,-0.37193 -1.73564,-1.77697 -1.77696,-1.98359 -0.0413,-0.20662 -0.37193,-2.76876 -0.41325,-2.93406 -0.0413,-0.16529 -1.23974,-3.182 -1.23974,-3.182 l -0.0827,-2.06624 -0.9918,-0.95047 c 0,0 -0.3306,-1.73564 -0.41324,-1.90093 -0.0827,-0.1653 -0.6612,-1.52902 -0.6612,-1.69432 0,-0.1653 -0.20662,-1.44636 -0.20662,-1.44636 l 0.41324,-1.94227 0.90915,-0.95047 0.1653,-1.52901 v -1.65299 l 0.37192,-2.19021 -0.74385,-1.36372 -0.49589,-0.61987 -0.6612,-0.4959 -0.61987,-0.24794 -0.74385,-0.4959 -0.41324,-0.28927 -0.61987,-0.61988 -0.57855,-0.20662 c 0,0 -0.3306,-0.0413 -0.53722,-0.0413 -0.20663,0 -0.78517,0 -0.78517,0 l -0.3306,-0.1653 -0.37192,-0.12398 z"
                  stroke="#F7FCFE"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-opacity="0.25"
                  fill="#e0e0e0"
                  original="#e0e0e0"
                  id="jqvmap1_khodjeli"
                  class="jqvmap-region"
                  data-admin="Jengis Yermashev"
                  data-admin-phone="+998 (61) 552-22-13"
                ></path>
                <path
                  d="m 310.26859,392.64805 0.46754,-1.51949 0.17532,-1.5195 -0.0584,-1.16884 1.22728,-1.16884 1.5195,-0.99351 c 0,0 0.35065,-0.58442 0.35065,-0.81819 0,-0.23377 0.17532,-0.52598 0.11688,-0.93507 -0.0584,-0.40909 -0.46753,-0.99351 -0.46753,-0.99351 v -0.99352 l 0.99351,-1.05195 c 0,0 0.40909,-0.29221 0.46754,-0.75975 0.0584,-0.46754 0.0584,-0.75975 0.0584,-0.75975 l 0.7013,-0.87663 0.35065,-1.11039 0.70131,-0.35066 0.93507,-0.46753 0.99351,-0.93507 0.64287,-0.35066 h 0.87663 l 1.63637,-0.52597 h 1.05196 l 0.7013,0.0584 0.70131,0.0584 c 0,0 1.05195,1.69482 1.22728,2.27924 0.17532,0.58442 0,0.40909 0.23377,0.64286 0.23376,0.23377 0.52597,0.46754 0.75974,0.64286 0.23377,0.17533 0.11689,0.0584 0.58442,0.29221 0.46754,0.23377 0.52598,0.17533 1.63638,0.4091 1.1104,0.23376 2.39612,0.40909 2.39612,0.40909 0,0 0.35065,-0.17533 0.81819,0.0584 0.46753,0.23377 0.87663,0.23377 1.1104,0.52598 0.23376,0.29221 0.29221,0.29221 0.64286,0.58442 0.35065,0.29221 0.58442,0.46754 1.1104,0.46754 0.52597,0 1.98702,0.35065 1.98702,0.35065 0,0 0.46754,0.0584 0.87663,0.17532 0.4091,0.11689 0.29221,-0.23376 0.64287,0.11689 0.35065,0.35065 0.40909,0.35065 0.99351,0.87663 0.58442,0.52598 1.1104,0.40909 1.69482,0.7013 0.58442,0.29221 0.7013,0.23377 0.99351,0.52598 0.29221,0.29221 0,0.35065 0.70131,0.64286 0.7013,0.29221 2.33768,0.70131 2.62989,0.70131 0.29221,0 0.64286,0.29221 1.34416,0.40909 0.70131,0.11688 1.22729,0.40909 1.46105,0.64286 0.23377,0.23377 1.98703,1.57794 1.98703,1.57794 0,0 -0.17532,0.0584 0.4091,0.23376 0.58442,0.17533 0.93507,0.35066 0.93507,0.35066 l 2.39612,1.98702 1.34417,0.81819 1.11039,0.64286 0.58442,0.58442 -1.34416,0.64287 -1.22728,0.17532 -3.09743,-0.35065 c 0,0 0.46754,0 -0.29221,0 -0.75975,0 -2.68833,0.75975 -2.68833,0.75975 l -0.70131,0.7013 -0.64286,1.87014 0.29221,1.1104 -0.58442,0.75975 c 0,0 0,0.0584 0,0.7013 0,0.64286 -0.0584,1.05196 -0.0584,1.05196 0,0 -0.11688,0.23377 -0.11688,0.52598 0,0.29221 -0.4091,0.75974 -0.4091,0.75974 l -0.7013,0.70131 -0.93508,-0.11689 -0.46753,-0.11688 c 0,0 -0.23377,-0.99352 -0.4091,-1.69482 -0.17532,-0.7013 0,-1.05196 -0.52597,-1.22728 -0.52598,-0.17533 -1.40261,-1.05196 -1.40261,-1.40261 0,-0.35065 0.35065,-1.05196 -0.0584,-1.28572 -0.4091,-0.23377 -2.68834,-1.46105 -2.9221,-1.5195 -0.23377,-0.0584 -0.46754,-0.0584 -0.87663,-0.0584 -0.4091,0 -2.51301,0.70131 -2.98055,0.99352 -0.46753,0.29221 -1.05195,0.40909 -1.34416,0.7013 -0.29221,0.29221 -2.9221,0.40909 -2.9221,0.40909 0,0 0,-0.46753 -0.64286,-0.81818 -0.64287,-0.35066 -0.52598,-0.75975 -1.57794,-0.99352 -1.05195,-0.23377 -0.81819,-0.40909 -2.27924,-0.29221 -1.46105,0.11689 -1.57793,0 -2.10391,0.11689 -0.52598,0.11688 -2.68833,0.11688 -2.68833,0.11688 l -1.46105,-0.58442 -0.40909,-0.46754 c 0,0 -2.9221,-0.29221 -3.27276,-0.29221 -0.35065,0 -0.52597,0.17533 -1.05195,0.29221 -0.52598,0.11689 -0.81819,0.17533 -1.1104,0.17533 -0.29221,0 -2.57145,-0.11688 -2.57145,-0.11688 l -0.81819,-0.0584 z"
                  stroke="#F7FCFE"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-opacity="0.25"
                  fill="#e0e0e0"
                  original="#e0e0e0"
                  id="jqvmap1_takiatash"
                  class="jqvmap-region"
                  data-admin="Daniyar Rozumbayevich Kurbanov"
                  data-admin-phone="+998 (61) 421-56-23"
                ></path>
              </g>
            </svg>
            <div class="info-box">
              <h1 class="areaTitle">
                QORAQALPOG'ISTON RESPUBLIKASI QURILISH VAZIRI
              </h1>
              <div class="body">
                <div>
                  <p>Boshqarma boshlig'i</p>
                  <p id="admin-id">Kurbanbaev Azimjon Saparbaevich</p>
                </div>
                <div>
                  <p>Elektron manzil</p>
                  <p>info@mc.uz</p>
                </div>
                <div>
                  <p>Telefon</p>
                  <p id="admin-phone">(+998 61) 222-74-74</p>
                </div>
                <div>
                  <p class="undefined">Qabul kunlari</p>
                  <p></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section document -->
      <section class="document-section">
        <div class="container">
          <div class="section-inner">
            <div class="videos">
              <!-- Section-top -->
              <div class="section-top">
                <h1 class="title">{{__('messages.videos')}}</h1>
                <button>
                  <a  href="#">
                    {{__('messages.all_videos')}} <i class="fa-solid fa-arrow-right"></i>
                  </a>
                </button>
              </div>
              <div class="videos-box">
                <div class="video-box">
                  <div class="inner">
                    <img src="{{asset('files/elonDesk/desk-bg.jpg')}}" alt="image" />
                    <button class="playButton">
                      <i class="fa-solid fa-play"></i>
                    </button>
                  </div>
                  <p class="desc">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Repellat consequatur adipisci corporis debitis voluptas,
                    deleniti non vero laudantium quasi laborum iure odit ea
                    excepturi, maxime in ab tenetur possimus sit!
                  </p>
                </div>
                <div class="video-box">
                  <div class="inner">
                    <img src="{{asset('files/elonDesk/desk-bg.jpg')}}" alt="image" />
                    <button class="playButton">
                      <i class="fa-solid fa-play"></i>
                    </button>
                  </div>
                  <p class="desc">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Repellat consequatur adipisci corporis debitis voluptas,
                    deleniti non vero laudantium quasi laborum iure odit ea
                    excepturi, maxime in ab tenetur possimus sit!
                  </p>
                </div>
              </div>
            </div>
            <div class="photos">
              <!-- Section-top -->
              <div class="section-top">
                <h1 class="title">{{__('messages.photos')}}</h1>
                <button>
                  <a>
                    {{__('messages.all_photos')}}
                    <i class="fa-solid fa-arrow-right"></i>
                  </a>
                </button>
              </div>
              <div class="photos-box">
                <div class="photo-box">
                  <div class="inner">
                    <img src="{{asset('files/elonDesk/desk-bg.jpg')}}" alt="image" />
                    <button class="playButton">
                      <i class="fa-regular fa-images"></i>
                    </button>
                  </div>
                  <p class="desc">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  </p>
                </div>
                <div class="photo-box">
                  <div class="inner">
                    <img src="{{asset('files/elonDesk/desk-bg.jpg')}}" alt="image" />
                    <button class="playButton">
                      <i class="fa-regular fa-images"></i>
                    </button>
                  </div>
                  <p class="desc">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Nulla, explicabo.
                  </p>
                </div>
                <div class="photo-box">
                  <div class="inner">
                    <img src="{{asset('files/elonDesk/desk-bg.jpg')}}" alt="image" />
                    <button class="playButton">
                      <i class="fa-regular fa-images"></i>
                    </button>
                  </div>
                  <p class="desc">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Nulla, explicabo.
                  </p>
                </div>
                <div class="photo-box">
                  <div class="inner">
                    <img src="{{asset('files/elonDesk/desk-bg.jpg')}}" alt="image" />
                    <button class="playButton">
                      <i class="fa-regular fa-images"></i>
                    </button>
                  </div>
                  <p class="desc">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Nulla, explicabo.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section useful resources -->
      <section class="section-resources">
        <div class="container">
          <!-- Section-top -->
          <div class="section-top">
            <h1 class="title">{{__('messages.userful_resources')}}</h1>
          </div>

          <div class="swiper resourceSwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="{{asset('files/gerb.png')}}" alt="gerb image" />
                O‘zbekiston Respublikasi Prezidentining rasmiy veb-sayti
              </div>
              <div class="swiper-slide">
                <img src="{{asset('files/gerb.png')}}" alt="gerb image" />
                O‘zbekiston Respublikasi Prezidentining rasmiy veb-sayti
              </div>
              <div class="swiper-slide">
                <img src="{{asset('files/gerb.png')}}" alt="gerb image" />
                O‘zbekiston Respublikasi Prezidentining rasmiy veb-sayti
              </div>
              <div class="swiper-slide">
                <img src="{{asset('files/gerb.png')}}" alt="gerb image" />
                O‘zbekiston Respublikasi Prezidentining rasmiy veb-sayti
              </div>
              <div class="swiper-slide">
                <img src="{{asset('files/gerb.png')}}" alt="gerb image" />
                O‘zbekiston Respublikasi Prezidentining rasmiy veb-sayti
              </div>
              <div class="swiper-slide">
                <img src="{{asset('files/gerb.png')}}" alt="gerb image" />
                O‘zbekiston Respublikasi Prezidentining rasmiy veb-sayti
              </div>
              <div class="swiper-slide">
                <img src="{{asset('files/gerb.png')}}" alt="gerb image" />
                O‘zbekiston Respublikasi Prezidentining rasmiy veb-sayti
              </div>
            </div>
            <div class="swiper-buttons">
              <div class="swiper-button-next">
                <i class="fa-solid fa-chevron-right"></i>
              </div>
              <div class="swiper-button-prev">
                <i class="fa-solid fa-chevron-left"></i>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
@endsection
@push('css')
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
@endpush
@push('js')
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/spec.js')}}"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script src="{{asset('frontend/js/app.js')}}"></script>
@endpush