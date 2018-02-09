<?php

namespace App\Http\Controllers;

use App\Handles\ImageUploadHandle;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(UserRequest $request, User $user ,ImageUploadHandle $uploader)
    {
        $data = $request->all();

        if ($request->file('avatar')){
            $result = $uploader->save($request->file('avatar'),'avatars',$user->id,362);
            if ($result){
                $data['avatar'] = $result['path'];
            }
        }
        $user->update($data);
        return redirect()->route('users.show', $user->id)->with('success', '个人资料更新成功！');
    }
}
