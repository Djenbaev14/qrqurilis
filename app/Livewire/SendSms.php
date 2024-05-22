<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class SendSms extends Component
{
    public $phone;

    public function updatedPhone(){
        if(strlen($this->phone) == 9){
            if(Session::has('expiresAt')){
                if(now() > session()->get('expiresAt')){
                    Session::forget('verification_code');
                    Session::forget('expiresAt');
                }
            }else{
                $url_login = "notify.eskiz.uz/api/auth/login";
        
                $auth = Http::post($url_login, [
                    'email' => config('app.SMS_EMAIL'),
                    'password' => config('app.SMS_PASSWORD'),
                ]);
                $auth = $auth->json();
                dd($auth);
                if ($auth['message'] == 'token_generated') {
                    $url = "notify.eskiz.uz/api/message/sms/send";
                    $ran=random_int(1000,9999);
                    $resposnse = Http::withHeaders([
                        'Authorization' => 'Bearer ' . $auth['data']['token'],
                        ])->post($url, [
                            'mobile_phone' => '998'.$this->phone,
                            "message" => "Qrqurilis.uz sms kodi:" . $ran,
                        ]);
                        
                    $resposnse = $resposnse->json();
                    
                    Session::put('verification_code', $ran);
                    Session::put('expiresAt', now()->addMinutes(1));
                }
        
                return $resposnse;
            }
        }
        
     }
    
}
