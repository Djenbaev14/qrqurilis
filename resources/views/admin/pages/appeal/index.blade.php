@extends('admin.layouts.main')

@push('css')
<!-- SimpleMDE css -->
  <link rel="stylesheet" href="{{ asset('admin/css/colorbox.css') }}">
  <!-- Datatables css -->
  <link href="assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
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
                  <h4 class="card-title">Барлык Мүрәжатлар</h4>
                </div>
              </div>
            </div>
        </div>
        <div class="card p-4" style="overflow: auto">
          <table id="basic-datatable" class="table">
            <thead>
                <tr>
                    <th>ИД</th>
                    <th>ФИО</th>
                    <th>Емайл</th>
                    <th>Тел Номер</th>
                    <th>Адресс</th>
                    <th>Мүрәжати</th>
                    <th>Файл</th>
                    <th>Мүрәжат коды</th>
                    <th>Статус</th>
                </tr>
            </thead>
            @forelse ($appeals as $appeal)
              <tbody>
                <tr>
                    <td>{{$appeal->id}}</td>
                    <td>{{$appeal->lastname}} {{$appeal->firstname}}</td>
                    <td>{{$appeal->email}}</td>
                    <td>{{$appeal->phone}}</td>
                    <td>{{$appeal->address}}</td>
                    <td>{{$appeal->message}}</td>
                    <td><img src="{{asset('appeals/'.$appeal->file)}}" width="200px" alt=""></td>
                    <td>{{$appeal->appeal_code}}</td>
                    <td>
                      <?php
                        if($appeal->status == 'new')
                          echo "<span class='border rounded border-danger text-danger p-1'>Новый</span>";
                      ?>
                    </td>
                    {{-- <td class="d-flex">
                      <a href="{{route('dashboard.pages.edit',$page->id)}}" class="btn btn-warning btn-sm float-left mr-1 mb-1">
                          <i class="ri-edit-box-line"></i>
                      </a>
                      <form action="{{route('dashboard.pages.destroy',$page->id)}}" method="post">
                          @csrf
                          <button class="btn btn-danger btn-sm float-left mr-1 mb-1"> <i class="
                          ri-delete-bin-5-fill"></i></button>
                      </form>
                    </td> --}}
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
          <p class="d-flex justify-content-end">{{$appeals->links('pagination::bootstrap-4')}}</p>
        </div>
        <!-- end page title -->
             

    </div> <!-- container -->

  </div> <!-- content -->
</div>

         
@endsection

@push('js')
  <!-- Datatables js -->
  <script src="assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
  <script src="assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>

  <!-- Datatable Init js -->
  <script src="assets/js/pages/demo.datatable-init.js"></script>
                                                
@endpush