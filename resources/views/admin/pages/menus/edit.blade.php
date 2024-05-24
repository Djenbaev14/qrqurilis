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
                  <h4 class="card-title">Менюди өзгертиў</h4>
                  <a href="{{route('dashboard.menu.create')}}" class="card-button btn btn-primary">Артқа қайтыў</a>
                </div>
              </div>
            </div>
        </div>
                                            
              
          <div class="card-block p-3" style="background: #fff" >
            <form action="{{route('dashboard.menu.update',$menu->id)}}" method="POST">
                @csrf
                <div class="row">
                  <ul class="nav nav-tabs nav-bordered mb-3">
                    @foreach (config('app.available_locales') as $local)
                    <li class="nav-item">
                        <a href="#menu_{{$local['lang']}}" data-bs-toggle="tab" aria-expanded="false" class="nav-link <?=($local['lang']=='ru' ? 'active' : '')?>">
                            <i class="mdi mdi-home-variant d-md-none d-block"></i>
                            <span class="d-none d-md-block">{{$local['title']}}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
                
                <div class="tab-content">
                  @foreach (config('app.available_locales') as $local)
                    <div class="tab-pane  <?=($local['lang']=='ru' ? 'show active' : '')?>" id="menu_{{$local['lang']}}">
                      <div class="mb-3">
                        <label for="simpleinput" class="form-label">Тема</label>
                        <?php
                        $title='title_'.$local['lang'];
                        ?>
                        <input type="text" name="title_{{$local['lang']}}" id="simpleinput" value="{{$menu->$title}}" class="form-control">
                      </div>
                    </div>
                  @endforeach
                    <select class="form-select mb-3 w-25" <?=($items_count==0)? '' : 'disabled' ?> name="type">
                      <option value="item">Итем</option>
                      <option value="noitem">Но итем</option>
                    </select> 
                </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit" id="save">Изменить</button>
                    </div>
                </div>
            </form>
          </div>

    </div> <!-- container -->

  </div> <!-- content -->
</div>

         
@endsection
