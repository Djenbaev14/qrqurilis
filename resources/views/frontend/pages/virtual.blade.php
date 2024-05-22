@extends('frontend.layouts.main')

@section('title', 'About')

@section('main-content')
<div class="about-body main">
  <div class="container">
    <div class="baner">
      <div class="container">
        <div class="baner-col-2">
          <h4 class="baner-title">{{__('messages.send_appeal')}}</h4>
        </div>
      </div>
    </div>
    <div class="body-row">
      <!-- Main Content -->
      <div class="col-2 content">
        @livewire('send-sms')
      </div>
    </div>
  </div>
</div>
@endsection
@push('css')
  <link rel="stylesheet" href="{{asset('frontend/Styles/form.css')}}" />
@endpush
@push('js')
  @livewireScripts
@endpush