<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Appeal;
use App\Models\Category;
use App\Models\Item;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
// use Infobip\Configuration;

class VirtualController extends Controller
{
    public function virtual(){
        $menus=Menu::orderBy('created_at','desc')->get();
        $items=Item::all();
        $categories=Category::orderBy('created_at','desc')->get();
        
        
        $title='title_'.session()->get('locale');
        $body='body_'.session()->get('locale');
        $slug='slug_'.session()->get('locale');
        

        return view('frontend.pages.virtual',compact('menus','categories','items','title','body','slug'));
    }

    // public function sendSms(Request $request){
    //     $log = curl_init();

    //     curl_setopt_array($log, array(
    //     CURLOPT_URL => 'notify.eskiz.uz/api/auth/login',
    //     CURLOPT_RETURNTRANSFER => true,
    //     CURLOPT_ENCODING => '',
    //     CURLOPT_MAXREDIRS => 10,
    //     CURLOPT_TIMEOUT => 0,
    //     CURLOPT_FOLLOWLOCATION => true,
    //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //     CURLOPT_CUSTOMREQUEST => 'POST',
    //     CURLOPT_POSTFIELDS => array('email' => 'makonnokisbaev@gmail.com','password' => 'UIFiZ7Fvh1n8dyDq4KW00xLH4GfJByMsdR8ko3qC'),
    //     ));

        
    //     $response = curl_exec($log);
        
    //     curl_close($log);
    //     $response = json_decode($response);


    //     $random=random_int(1000,9999);
        

    //     $curl = curl_init();
        
    //     curl_setopt_array($curl, array(
    //       CURLOPT_URL => 'notify.eskiz.uz/api/message/sms/send',
    //       CURLOPT_RETURNTRANSFER => true,
    //       CURLOPT_ENCODING => '',
    //       CURLOPT_MAXREDIRS => 10,
    //       CURLOPT_TIMEOUT => 0,
    //       CURLOPT_FOLLOWLOCATION => true,
    //       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //       CURLOPT_CUSTOMREQUEST => 'POST',
    //       CURLOPT_POSTFIELDS => array('mobile_phone' => $request->phone,'message' => 'Siziń kodıńız '.$random,'from' => '4546','callback_url' => 'http://0000.uz/test.php'),
    //       CURLOPT_HTTPHEADER => array(
    //         'Authorization: Bearer '.$response->data->token
    //       ),
    //     ));
        
    //     $res = curl_exec($curl);
        
    //     curl_close($curl);

    //     echo $res;

    // }

    public static function sendSms(Request $request)
    {
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'address'=>'required',
            'message'=>'required',
            'file'=>'mimes:png,jpg,jpeg|max:2048'
        ]);
        $appeal_code='';
        DB::beginTransaction();
        try {
            $now = time();
            if(Session::has('expiresAt') && Session::has('expiresAt') && date('m-d-Y H:i:s', $now) <= session()->get('expiresAt') && $request->verifyCode == session('verification_code')){
                            if($request->has('file')){
                                $file=$request->file('file');
                                $file_name = $file->getClientOriginalName(); 
                                $file->move(public_path('appeals/'), $file_name);
                            }else{
                                $file_name=null;
                            }
                            $appeal=Appeal::create([
                                'firstname' => $request->firstname,
                                'lastname' => $request->lastname,
                                'email' => $request->email,
                                'phone' => '998'.$request->phone,
                                'address' => $request->address,
                                'message' => $request->message,
                                'file' => $file_name,
                            ]);
                            $appeal_code=str_pad($appeal->id, 6, "0", STR_PAD_LEFT);
                            Appeal::where('id',$appeal->id)->update([
                                'appeal_code'=>$appeal_code
                            ]);
                            Session::forget('verification_code');
                            Session::forget('expiresAt');
                    DB::commit();
            }else{
                alert()->error('Verification failed');
                return redirect()->route('virtual');
            }
        }
        catch (\Throwable $th) {
            DB::rollBack();
        }
        alert()->success($appeal_code,'Murojat kodi');
        return redirect()->route('virtual');
    }
}
