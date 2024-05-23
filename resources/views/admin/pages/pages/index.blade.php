@extends('admin.layouts.main')

@push('css')
<!-- SimpleMDE css -->
  <link rel="stylesheet" href="{{ asset('admin/css/colorbox.css') }}">
  <link href="assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
@endpush

@section('title', 'Довавить меню')




@section('content')                                                 
               


<div class="content-page">
  <div class="content">
      <!-- Start Content-->
      <div class="container-fluid">

          <!-- start page title -->
          <div class="row mb-3">
            <div class="col-12">
              <div class="card-block p-3 mt-3" style="background: #fff" >
                <div class="card-body d-flex justify-content-between align-items-center">
                  <h4 class="card-title">Все страницу</h4>
                  <a href="{{route('dashboard.pages.create')}}" class="card-button btn btn-primary">Добавить страницу</a>
                </div>
              </div>
            </div>
        </div>
        <div class="card p-4">
          {{-- <ul class="nav nav-tabs nav-bordered mb-3" >
            @foreach (config('app.available_locales') as $local)
            <li class="nav-item">
                <a href="#page_{{$local['lang']}}" data-bs-toggle="tab" aria-expanded="false" class="nav-link <?=($local['lang']=='ru' ? 'active' : '')?>">
                    <i class="mdi mdi-home-variant d-md-none d-block"></i><?php 
                    $img='files/flags/'.$local['lang'].'.png';
                  ?>
                  <span class="d-flex align-items-center justify-content-center"><img src="{{asset($img)}}" alt="">{{$local['title']}}</span>
                </a>
            </li>
            @endforeach
        </ul> --}}
        
        {{-- <div class="tab-content">
          @foreach (config('app.available_locales') as $local)
              
            <div class="tab-pane <?=($local['lang']=='ru' ? 'show active' : '')?>" id="page_{{$local['lang']}}" style="overflow: auto">
              <table class="table dt-responsive nowrap w-100 table-bordered table-centered mb-0 text-center" id="<?=($local['lang']=='ru' ? 'datatable-buttons' : '')?>">
                <thead>
                    <tr>
                        <th>ИД</th>
                        <th>ЗАГОЛОВОК</th>
                        <th>ЯРЛЫК</th>
                        <th>ВРЕМЯ</th>
                        <th>ДЕЙСТВИЯ</th>
                    </tr>
                </thead>
                @forelse ($pages as $page)
                  <tbody>
                    <tr>
                        <td>{{$page->id}}</td>
                        <?php 
                          $title='title_'.$local['lang'];
                        ?>
                        <td>{{$page->$title}}</td>
                        <td>{{$page->slug}}</td>
                        <td>{{$page->created_at}}</td>
                        <td class="d-flex">
                          <a href="{{route('dashboard.pages.edit',$page->id)}}" class="btn btn-warning btn-sm float-left mr-1 mb-1">
                              <i class="ri-edit-box-line"></i>
                          </a>
                          <form action="{{route('dashboard.pages.destroy',$page->id)}}" method="post">
                              @csrf
                              <button class="btn btn-danger btn-sm float-left mr-1 mb-1"> <i class="
                              ri-delete-bin-5-fill"></i></button>
                          </form>
                        </td>
                    </tr>
                  </tbody>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">
                            <h4>Страницы нет</h4>
                        </td>
                    </tr>
                @endforelse
              </table>
            </div>
          @endforeach
        </div> --}}
        
        <table class="table table-striped dt-responsive nowrap w-100" id="datatable-buttons">
          <thead>
              <tr>
                  <th>ИД</th>
                  <th>ЗАГОЛОВОК</th>
                  <th>ЯРЛЫК</th>
                  <th>ВРЕМЯ</th>
                  <th>ДЕЙСТВИЯ</th>
              </tr>
          </thead>
          <tbody>
            @forelse ($pages as $page)
                <tr>
                    <td>{{$page->id}}</td>
                    <?php 
                      $title='title_qr';
                    ?>
                    <td>{{$page->title_qr}}</td>
                    <td>{{$page->slug}}</td>
                    <td>{{$page->created_at}}</td>
                    <td class="d-flex">
                      <a href="{{route('dashboard.pages.edit',$page->id)}}" class="btn btn-warning btn-sm float-left mr-1 mb-1">
                          <i class="ri-edit-box-line"></i>
                      </a>
                      <form action="{{route('dashboard.pages.destroy',$page->id)}}" method="post">
                          @csrf
                          <button class="btn btn-danger btn-sm float-left mr-1 mb-1"> <i class="
                          ri-delete-bin-5-fill"></i></button>
                      </form>
                    </td>
                </tr>
            @empty
              <tr>
                  <td colspan="5" class="text-center">
                      <h4>Страницы нет</h4>
                  </td>
              </tr>
          @endforelse
        </tbody>
        </table>
        </div>
        <!-- end page title -->
             

    </div> <!-- container -->

  </div> <!-- content -->
</div>

         
@endsection

@push('js')
    <script src="assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
@endpush