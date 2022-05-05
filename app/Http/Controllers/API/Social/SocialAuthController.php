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
use DB;
use Auth;
use mysql_xdevapi\Exception;

class SocialAuthController extends Controller
{
    use GeneralTrait;

    public function socialLogin(Request $request)
    {
        $input = $request->all();

        $provider_name = $input['provider_name'];
        $token = $input['access_token'];
        $type = $input['type'];

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
                            'firstName' => $providerUser->name,
                            'email' => $providerUser->email,
                            'avatar' => $providerUser->avatar
                        ]);
                        $user->socialProvider()->create([
                            'provider_name' => $provider_name,
                            'provider_id'   => $providerUser->id
                        ]);
                    }
                    $token = Auth::guard('user-api')->login($user);
                    $user->token = $token;
                    $user->fullInfo = false;
                    $myuser = new UserResource($user);
                    return $this->returnData('Data',$myuser,'User Account logged in now (from social Login By '.$provider_name.')');
                }
                if ($type == 'owner') {
                    $owner = Owner::where('email', $providerUser->getEmail())->first();
                    if ($owner == null) {
                        $owner = Owner::create([
                            'firstName' => $providerUser->name,
                            'email' => $providerUser->email,
                            'avatar' => $providerUser->avatar
                        ]);
                        $myowner = $owner->socialProvider()->create([
                            'provider_name' => $provider_name,
                            'provider_id'   => $providerUser->id,
                        ]);
                    }
                    $token = Auth::guard('owner-api')->login($owner);
                    $owner->token = $token;
                    $owner->fullInfo = false;
                    $myowner = new UserResource($owner);
                    return $this->returnData('Data',$myowner,'Owner Account logged in now (from social Login By '.$provider_name.')');
                }
            }catch (\GuzzleHttp\Exception\ClientException $e) {
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
                $providerUser = Socialite::driver($provider_name)->userFromToken($token);
                if ($type == 'user')
                {
                    $user = User::where('email', $providerUser->getEmail())->first();
                    if ($user == null) {
                        $user = User::create([
                            'firstName' => $providerUser->name,
                            'email' => $providerUser->email,
                            'avatar' => $providerUser->avatar
                        ]);
                        $user->socialProvider()->create([
                            'provider_name' => $provider_name,
                            'provider_id'   => $providerUser->id
                        ]);
                    }
                    $token = Auth::guard('user-api')->login($user);
                    $user->token = $token;
                    $user->fullInfo = false;
                    $myuser = new UserResource($user);
                    return $this->returnData('Data',$myuser,'User Account logged in now (from social Login By '.$provider_name.')');
                }
                if ($type == 'owner') {
                    $owner = Owner::where('email', $providerUser->getEmail())->first();
                    if ($owner == null) {
                        $owner = Owner::create([
                            'firstName' => $providerUser->name,
                            'email' => $providerUser->email,
                            'avatar' => $providerUser->avatar
                        ]);
                        $myowner = $owner->socialProvider()->create([
                            'provider_name' => $provider_name,
                            'provider_id'   => $providerUser->id,
                        ]);
                    }
                    $token = Auth::guard('owner-api')->login($owner);
                    $owner->token = $token;
                    $owner->fullInfo = false;
                    $myowner = new UserResource($owner);
                    return $this->returnData('Data',$myowner,'Owner Account logged in now (from social Login By '.$provider_name.')');
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
