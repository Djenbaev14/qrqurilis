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
        <input type="tel" value="{{old('phone]')}}" <?=($errors->has('phone')) ? 'style="border: 1px solid rgb(245, 70, 70)"' : ''?> name="phone" wire:model.lazy="phone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" 
        maxlength="9" id="phone" onfocusout="myFunction(this)" placeholder="+998 xx-xxx-xx-xx" autocomplete="off" 
        >
        {{-- oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" 
        maxlength="9"
        --}}

      </div>
      
      <div class="varification-code_inputBox">
        <label for="verifyCode">Tasdiqlash kodi *</label>
        <input type="number" name="verifyCode" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" id="verifyCode" />
      </div>
      <p class="timer" id="countdownDisplay">01:00</p>
      
    {{-- <button id="startButton">Start Countdown</button> --}}

    </div>
    <!-- Submit Button -->
    <button class="submit-btn">
      <i class="fa-regular fa-paper-plane" style="cursor: pointer"></i> Murojaatni yuborish
    </button>
  </form>
</div>


{{-- <script src="{{asset('frontend/js/components/form.js')}}" type="module"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/imask"></script>
<script type="module">
  const button = document.getElementById("file-upload_btn");
  const fileUpload = document.getElementById("file");

  button.addEventListener("click", (e) => {
    fileUpload.click();
    e.preventDefault();
  });

  fileUpload.addEventListener("click", (event) => {
    event.stopPropagation();
  });

  // Varification code input
  const varifyCodeInput = document.querySelector("#verifyCode");
  varifyCodeInput.addEventListener(
    "keypress",
    (evt) => ["e", "E", "+", "-"].includes(evt.key) && evt.preventDefault()
  );

</script>
<script>
  
  // const phoneInput = document.getElementById("phone");
  // function func(e){
  //     e.value = "998";
  //     setTimeout(() => {
  //       phoneInput.setSelectionRange(6, 6);
  //     }, 10);

  //     IMask(phoneInput, {
  //       mask: "998000000000",
  //       lazy: false,
  //     });
  // }

  const countdownDisplay = document.getElementById('countdownDisplay');
  let countdownInterval;

    function myFunction(e) {
      console.log(typeof  e.value);
      if(e.value.length==9){
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
    }

</script>
