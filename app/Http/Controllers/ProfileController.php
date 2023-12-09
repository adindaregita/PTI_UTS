<?php
  
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
  
class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }
    
    public function update(Request $request)
    {
        $userId = auth()->user()->id;
        $user = User::findOrFail($userId);
        $update = $user->update(request()->all());
        return redirect()->route('profile')->with('success', 'Profile updated successfully');
    }


}