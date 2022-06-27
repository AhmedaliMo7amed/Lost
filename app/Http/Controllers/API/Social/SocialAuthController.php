<?php

namespace App\Http\Controllers\API\Social;

use App\Http\Controllers\Controller;
use App\Models\Owner;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\Owner as OwnerResource;
use DB;
use Auth;
use mysql_xdevapi\Exception;

class SocialAuthController extends Controller
{
    use GeneralTrait;

    public function socialLogin(Request $request)
    {

        $provider_name = $request['provider_name'];
        $token = $request['access_token'];
        $type = $request['type'];

        if ($provider_name == 'google')
        {
            try {
                // get the provider's user. (In the provider server)
                $providerUser = Socialite::driver('google')
                    ->scopes([
                        'https://www.googleapis.com/auth/contacts.readonly',
                        'https://www.google.com/m8/feeds',
                        'https://www.googleapis.com/auth/calendar',
                        'https://www.googleapis.com/auth/plus.me',
                        'https://www.googleapis.com/auth/plus.login',
                        'https://www.googleapis.com/auth/plus.profile.emails.read'
                    ])->userFromToken($token);
                if ($type == 'user')
                {
                    $user = User::where('email', $providerUser->getEmail())->first();
                    if ($user == null) {
                        $user = User::create([
                            'firstName' => $providerUser->user['given_name'],
                            'lastName'=>$providerUser->user['family_name'],
                            'email' => $providerUser->email,
                            'avatar' => '/assets/defult-user-avatar.jpg',
                            'fullInfo' => false
                        ]);
                        $user->socialProvider()->create([
                            'provider_name' => $provider_name,
                            'provider_id'   => $providerUser->id
                        ]);
                        $token = Auth::guard('user-api')->login($user);
                        $user->token = $token;
                        $myuser = new UserResource($user);
                        return $this->returnData('Data',$myuser,'Account logged in now (from social account By '.$provider_name.')');
                    }else{
                        $token = Auth::guard('user-api')->login($user);
                        $user->token = $token;
                        $myuser = new UserResource($user);
                        return $this->returnData('Data',$myuser,'Account Already registerd and logged in (from social account By '.$provider_name.')');
                    }
                }
                if ($type == 'owner') {
                    $owner = Owner::where('email', $providerUser->getEmail())->first();
                    if ($owner == null) {
                        $owner = Owner::create([
                            'firstName' => $providerUser->user['given_name'],
                            'lastName' =>$providerUser->user['family_name'],
                            'email' => $providerUser->email,
                            'avatar' => '/assets/defult-user-avatar.jpg',
                            'fullInfo' => false
                        ]);
                        $owner->socialProvider()->create([
                            'provider_name' => $provider_name,
                            'provider_id'   => $providerUser->id,
                        ]);
                        $token = Auth::guard('owner-api')->login($owner);
                        $owner->token = $token;
                        $myowner = new OwnerResource($owner);
                        return $this->returnData('Data',$myowner,'Account Registerd (from social account By '.$provider_name.')');
                    }else{
                        $token = Auth::guard('owner-api')->login($owner);
                        $owner->token = $token;
                        $myowner = new OwnerResource($owner);
                        return $this->returnData('Data',$myowner,'Account already registerd and logged in (from social account By '.$provider_name.')');
                    }
                }
            }
            catch (\GuzzleHttp\Exception\ClientException $e) {
                return $this->returnError($e->getCode(), $e->getMessage());
            }
            catch (\GuzzleHttp\Exception\ServerException $e) {
                return $this->returnError($e->getCode(), $e->getMessage());
            }
            catch (\GuzzleHttp\Exception\BadResponseException $e) {
                return $this->returnError($e->getCode(), $e->getMessage());
            }
        }

        if ($provider_name == 'facebook')
        {
            try {
                // get the provider's user. (In the provider server)
                $providerUser = Socialite::driver($provider_name)->fields([
                    'name',
                    'first_name',
                    'last_name',
                    'email',
                    'gender',
                    'verified'
                ])->userFromToken($token);

                if ($type == 'user') {
                    $user = User::where('email', $providerUser->getEmail())->first();
                    if ($user == null) {
                        $user = User::create([
                            'firstName' => $providerUser->user['first_name'],
                            'lastName' => $providerUser->user['last_name'],
                            'email' => $providerUser->email,
                            'avatar' => '/assets/defult-user-avatar.jpg',
                            'fullInfo' => false
                        ]);
                        $user->socialProvider()->create([
                            'provider_name' => $provider_name,
                            'provider_id'   => $providerUser->id
                        ]);
                        $token = Auth::guard('user-api')->login($user);
                        $user->token = $token;
                        $myuser = new UserResource($user);
                        return $this->returnData('Data',$myuser,'Account Registerd (from social account By '.$provider_name.')');
                    }else{
                        $token = Auth::guard('user-api')->login($user);
                        $user->token = $token;
                        $myuser = new UserResource($user);
                        return $this->returnData('Data',$myuser,'Account Already registerd and logged in (from social account By '.$provider_name.')');
                    }
                }
                if ($type == 'owner') {
                    $owner = Owner::where('email', $providerUser->getEmail())->first();
                    if ($owner == null) {
                        $owner = Owner::create([
                            'firstName' => $providerUser->user['first_name'],
                            'lastName' => $providerUser->user['last_name'],
                            'email' => $providerUser->email,
                            'avatar' => '/assets/defult-user-avatar.jpg',
                            'fullInfo' => false
                        ]);
                        $owner->socialProvider()->create([
                            'provider_name' => $provider_name,
                            'provider_id'   => $providerUser->id,
                        ]);
                        $token = Auth::guard('owner-api')->login($owner);
                        $owner->token = $token;
                        $myowner = new OwnerResource($owner);
                        return $this->returnData('Data',$myowner,'Account Registerd (from social account By '.$provider_name.')');
                    }else{
                        $token = Auth::guard('owner-api')->login($owner);
                        $owner->token = $token;
                        $myowner = new OwnerResource($owner);
                        return $this->returnData('Data',$myowner,'Account already registerd and logged in (from social account By '.$provider_name.')');
                    }
                }
            }
            catch (\GuzzleHttp\Exception\ClientException $e) {
                return $this->returnError($e->getCode(), $e->getMessage());
            }
            catch (\GuzzleHttp\Exception\ServerException $e) {
                return $this->returnError($e->getCode(), $e->getMessage());
            }
            catch (\GuzzleHttp\Exception\BadResponseException $e) {
                return $this->returnError($e->getCode(), $e->getMessage());
            }
        }
    }
}
