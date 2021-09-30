<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index(Request $request) 
    {
        $users_length = User::all();
        $users = User::offset($request->limit)->take(20)->get();
        return response()->json(['status' => 200, 'message' => 'success', 'data' => $users , 'total' => count($users_length)]);
        // return $users;
    }

    public function show($id)
    {
        $user = User::find($id);
        return $user;
    }

    public function create(Request $request)
    {
       $user = new User;
       $user->firstname = $request->firstname;
       $user->lastname = $request->lastname;
       $user->date_of_birth = $request->date_of_birth;
       $user->save();
       return response()->json(['status' => 200, 'message' => 'success']);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->firstname = $request->firstname;
       $user->lastname = $request->lastname;
       $user->date_of_birth = $request->date_of_birth;
       $user->save();
       return response()->json(['status' => 200, 'message' => 'success']);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json(['status' => 200, 'message' => 'success']);
    }
}
