<div>
  <form class="form" action="{{route('send-sms')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- Name -->
    <div class="name-inputBox">
      <label for="name">Ism *</label>
      <input type="text" value="{{old('firstname')}}" name="firstname" id="name" <?=($errors->has('firstname')) ? 'style="border: 1px solid rgb(245, 70, 70)"' : ''?>/>
    </div>
    <!-- Surname -->
    <div class="surname-inputBox">
      <label for="surname">Familiya *</label>
      <input type="text" value="{{old('lastname')}}" <?=($errors->has('lastname')) ? 'style="border: 1px solid rgb(245, 70, 70)"' : ''?> name="lastname" id="surname" />
    </div>
    <!-- Email -->
    <div class="email-inputBox">
      <label for="email">Elektron pochta manzili *</label>
      <input type="email" value="{{old('email')}}" <?=($errors->has('email')) ? 'style="border: 1px solid rgb(245, 70, 70)"' : ''?> name="email" id="email" />
    </div>
    <!-- Address -->
    <div class="address-inputBox">
      <label for="address">Manzil *</label>
      <textarea name="address" value="{{old('address')}}" <?=($errors->has('address')) ? 'style="border: 1px solid rgb(245, 70, 70)"' : ''?> id="address"></textarea>
    </div>
    <!-- Message -->
    <div class="message-inputBox">
      <label for="message">Murojaat *</label>
      <textarea name="message" value="{{old('message')}}" <?=($errors->has('message')) ? 'style="border: 1px solid rgb(245, 70, 70)"' : ''?> id="message"></textarea>
    </div>

    <!-- Radio Box -->
    <div class="radio-box">
      {{-- <p>
        <input type="radio" name="radio" id="radio" />
        <label for="radio"
          >Hokimlikdagi murojaatlarni ko'rib chiqish tartib qoidalari
          bilan tanishdim.</label
        >
      </p> --}}

      <a id="file-upload_btn">
        <i class="fa-solid fa-cloud-arrow-up"></i>
        <label for="file">Fayl joylashtirish</label>
        <input
          type="file"
          name="file"
          id="file"
        />
      </a>
    </div>

    <!-- Phone Varification -->
    <div class="phone-varification">
      <div class="phone-inputBox">
        <label for="phone">Telefon *</label>
        <input type="number" value="{{old('phone]')}}" <?=($errors->has('phone')) ? 'style="border: 1px solid rgb(245, 70, 70)"' : ''?> name="phone" wire:model.lazy="phone" id="phone" onfocusout="myFunction()" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" placeholder="+998 xx-xxx-xx-xx" maxlength="9"
        autocomplete="off">
        <div id="countdownDisplay">01:00</div>
      </div>
      <div class="varification-code_inputBox">
        <label for="verifyCode">Tasdiqlash kodi *</label>
        <input type="number" name="verifyCode" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" id="verifyCode" />
      </div>
      
    {{-- <button id="startButton">Start Countdown</button> --}}

    </div>
    <!-- Submit Button -->
    <button class="submit-btn">
      <i class="fa-regular fa-paper-plane" style="cursor: pointer"></i> Murojaatni yuborish
    </button>
  </form>
</div>


<script>
  const countdownDisplay = document.getElementById('countdownDisplay');
  let countdownInterval;

    function myFunction() {
      clearInterval(countdownInterval);
      
      // Set the countdown time
      let timeLeft = 59;
      countdownDisplay.textContent = '00:'+timeLeft;
      
      // Start the countdown
      countdownInterval = setInterval(function() {
          timeLeft--;
          countdownDisplay.textContent = '00:'+timeLeft;
          
          if (timeLeft <= 0) {
            sessionStorage.removeItem('verification_code'); 
            sessionStorage.clear();  
            clearInterval(countdownInterval);
          }
      }, 1000);
    }

</script>
