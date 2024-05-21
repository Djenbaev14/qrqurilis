@extends('admin.layouts.main')

@push('css')
<!-- SimpleMDE css -->
  <link rel="stylesheet" href="{{ asset('admin/css/colorbox.css') }}">
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
                  <h4 class="card-title">Рубрики</h4>
                </div>
              </div>
            </div>
          </div>
          <!-- start page title -->
          <div class="row mb-3">
            <div class="col-6">
              <div class="card-block p-2" style="background: #fff" >
                <form action="{{route('dashboard.menu.store')}}" method="post">
                  @csrf
                <div class="d-flex justify-content-end">
                  <button class="btn btn-primary mt-3 " type="submit" id="save">Добавить новую рубрику</button>
                </div>               
                </form>
              </div>
            </div>
            <div class="col-6">
              <div class="card-block p-2" style="background: #fff" >
              </div>
              </div>
            </div>
          </div>
        <!-- end page title -->
             

    </div> <!-- container -->

  </div> <!-- content -->
</div>

         
@endsection
