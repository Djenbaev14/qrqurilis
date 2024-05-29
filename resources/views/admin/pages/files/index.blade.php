@extends('admin.layouts.main')

@push('css')
<!-- SimpleMDE css -->
  <link rel="stylesheet" href="{{asset('plugins/rte_theme_default.css')}}" />
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
                  <h4 class="card-title">Файл жуклеу</h4>
                </div>
              </div>
            </div>
        </div>                      
        
        <div class="card-block p-3 col-4 mb-3" style="background: #fff" >
          <form action="{{ route('dashboard.file.store') }}" class="form-main" method="POST">
              @csrf
              <div class="row">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                  <div class="col-md-12">
                    <label for="simpleinput" class="form-label">Названия</label>
                    <input type="text" name="name" value="" id="simpleinput" class="form-control">
                  </div>
                  <div class="col-md-12 mt-3">
                      <div class="form-group">
                        <label class="form-label">Файл жуклеу</label>
                        <input type="file" name="file" value="{{old('file')}}" class="form-control">
                      </div>
                  </div>
              </div>
              

                {{-- <a class="w-100 btn btn-success add-more-btn">Add</a> --}}
                <div class="row">
                    <div class="col-12 mt-3">
                        <button class="btn btn-primary" type="submit" id="save">Қосыў</button>
                    </div>
                </div>
          </form>
        </div>
        
        
        <div class="card p-4">
          <div class="tab-pane" style="overflow: auto">
            <table id="basic-datatable" class="table">
              <thead>
                  <tr>
                      <th>ИД</th>
                      <th>Названия</th>
                      <th>Ссылка</th>
                      <th>Файл</th>
                      <th>ДЕЙСТВИЯ</th>
                  </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>

    </div> <!-- container -->

  </div> <!-- content -->
</div>

         
@endsection

@push('js')
  <script>
    $("form").submit(function () {
        $("#save").attr("disabled", true);
    });
  </script>
@endpush
