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
                  <h4 class="card-title">Ҳәмме менюлар</h4>
                </div>
              </div>
            </div>
          </div>
          <!-- start page title -->
          <div class="row mb-3">
            <div class="col-3">
              <h5>Меню елементлерин қосыў</h5>
              <div class="card-block p-2" style="background: #fff" >
                <form action="{{route('dashboard.menu.store')}}" method="post">
                  @csrf
                  <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                aria-expanded="false" aria-controls="collapseOne">
                                Бетлер
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              @forelse ($items as $i=> $item)
                                <div class="form-check">
                                    <input type="checkbox" name="items[]" value="{{$item->id}}" class="form-check-input" id="check{{$item->id}}">
                                    <label class="form-check-label" for="check{{$item->id}}">{{$item->title_qr}}</label>
                                </div>
                              @empty
                                <span class="d-flex justify-content-center alert alert-danger">Бетлер жоқ</span>
                              @endforelse
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end <?=(count($items)>0) ? 'd-flex' : 'd-none';?>">
                  <button class="btn btn-primary mt-3 " type="submit" id="save">Менюға қосыў</button>
                </div>               
                </form>
              </div>
            </div>
            <div class="col-9">
              <h5>Меню дүзилиси</h5>
              <form action="{{route('dashboard.menu.item_add')}}" method="post">
                <div class="card-block p-2" style="background: #fff" >
                  @forelse ($menus as $menu)
                    <div class="accordion " id="accordionFlushExample{{$menu->id}}">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#flush-collapseOne{{$menu->id}}" aria-expanded="false" aria-controls="flush-collapseOne{{$menu->id}}">
                                  {{$menu->item->title_qr}}
                              </button>
                          </h2>
                            @csrf
                            <div id="flush-collapseOne{{$menu->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                                data-bs-parent="#accordionFlushExample{{$menu->id}}">
                                <div class="accordion-body">
                                  @forelse ($items as $i => $item)
                                  @if (in_array($item->id, json_decode(json_encode($menu->menu_item->pluck('item_id'))), true))
                                    <div class="form-check">
                                      <input type="checkbox" checked name="items[{{$menu->id}}][]" value="{{$item->id}}" class="form-check-input" id="check{{$item->id}}">
                                      <label class="form-check-label" for="check{{$item->id}}">{{$item->title_qr}}</label>
                                    </div>
                                    @else
                                    <div class="form-check">
                                      <input type="checkbox"  name="items[{{$menu->id}}][]" value="{{$item->id}}" class="form-check-input" id="check{{$item->id}}">
                                      <label class="form-check-label" for="check{{$item->id}}">{{$item->title_qr}}</label>
                                    </div>
                                  @endif
                                  @empty
                                  <span class="d-flex justify-content-center alert alert-danger">Бетлер жоқ</span>
                                  @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                  @empty
                  <span class="d-flex justify-content-center alert alert-danger w-100">Меню жоқ</span>
                  @endforelse
                  <button class="btn btn-sm btn-primary mt-2 <?=(count($menus)>0) ? 'd-flex' : 'd-none';?>">Менюди сақлаў</button>
                </div>
              </form>
              </div>
            </div>
          </div>
        <!-- end page title -->
             

    </div> <!-- container -->

  </div> <!-- content -->
</div>

         
@endsection
