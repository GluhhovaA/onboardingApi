<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{

    public function index(Request $request)
    {
        if($request->id)
        {
            $user = User::find($request->id);

            return new JsonResponse($user, JsonResponse::HTTP_OK);

        }
        return new JsonResponse(null, JsonResponse::HTTP_NOT_FOUND);
    }

    public function update(ProfileRequest $request)
    {
        $params = $request->all();
        if(!empty($params))
        {
            $user = User::find($request->id);
            if($user)
            {
                if(!empty($request->photo))
                {
                    Storage::delete($user->photo);
                    $path = $request->file('photo')->store('photos');
                    $params['photo'] = $path;
                }
                $user->update($params);

                if($request->interests)
                {
                    $user->interests()->detach($user->interests);
                    $user->interests()->attach($request->interests);
                }
                return new JsonResponse($user, JsonResponse::HTTP_OK);
            }
            return new JsonResponse(null, JsonResponse::HTTP_NOT_FOUND);
        }
        return new JsonResponse(null, JsonResponse::HTTP_NOT_FOUND);
    }
}
