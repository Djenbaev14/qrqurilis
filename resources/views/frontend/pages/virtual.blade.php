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
        {{-- <form class="form" action="{{route('send-sms')}}" method="POST">
          @csrf
          <!-- Name -->
          <div class="name-inputBox">
            <label for="name">Ism *</label>
            <input type="text" name="firstname" id="name" />
          </div>
          <!-- Surname -->
          <div class="surname-inputBox">
            <label for="surname">Familiya *</label>
            <input type="text" name="lastname" id="surname" />
          </div>
          <!-- Email -->
          <div class="email-inputBox">
            <label for="email">Elektron pochta manzili *</label>
            <input type="email" name="email" id="email" />
          </div>
          <!-- Address -->
          <div class="address-inputBox">
            <label for="address">Manzil *</label>
            <textarea name="address" id="address"></textarea>
          </div>
          <!-- Message -->
          <div class="message-inputBox">
            <label for="message">Murojaat *</label>
            <textarea name="message" id="message"></textarea>
          </div>

          <!-- Radio Box -->
          <div class="radio-box">
            <p>
              <input type="radio" name="radio" id="radio" />
              <label for="radio"
                >Hokimlikdagi murojaatlarni ko'rib chiqish tartib qoidalari
                bilan tanishdim.</label
              >
            </p>

            <button id="file-upload_btn">
              <i class="fa-solid fa-cloud-arrow-up"></i>
              <label for="file">Fayl joylashtirish</label>
              <input
                type="file"
                name="file"
                id="file"
                style="display: none"
              />
            </button>
          </div>

          <!-- Phone Varification -->
          <div class="phone-varification">
            <div class="phone-inputBox">
              <label for="phone">Telefon *</label>
              <input type="tel" name="phone" id="phone" />
            </div>
            <div class="varification-code_inputBox">
              <label for="varifyCode">Tasdiqlash kodi *</label>
              <input type="number" name="varifyCode" id="varifyCode" />
            </div>
          </div>

          <!-- Submit Button -->
          <button class="submit-btn">
            <i class="fa-regular fa-paper-plane" style="cursor: pointer"></i> Murojaatni yuborish
          </button>
        </form> --}}
      </div>
    </div>
  </div>
</div>
@endsection

@push('js')
  @livewireScripts
@endpush