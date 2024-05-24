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
                  <h4 class="card-title">Ҳәмме постлар</h4>
                  <a href="{{route('dashboard.post.create')}}" class="card-button btn btn-primary">Пост косыў</a>
                </div>
              </div>
            </div>
        </div>
        <div class="card p-4" style="overflow: auto">
          
          <div class="tab-pane" style="overflow: auto">
            <table id="basic-datatable" class="table">
              <thead>
                  <tr>
                      <th>ИД</th>
                      <th>ЗАГОЛОВОК</th>
                      <th>ВРЕМЯ</th>
                      <th>ДЕЙСТВИЯ</th>
                  </tr>
              </thead>
              <tbody>
                @forelse ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title_qr}}</td>
                        <td>{{$post->created_at}}</td>
                        <td class="d-flex">
                          <a href="{{route('dashboard.post.edit',$post->id)}}" class="btn btn-warning btn-sm float-left mr-1 mb-1">
                              <i class="ri-edit-box-line"></i>
                          </a>
                          <form action="{{route('dashboard.post.destroy',$post->id)}}" method="post">
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