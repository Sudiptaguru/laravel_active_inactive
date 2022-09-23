<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
  
class UserController extends Controller
{
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = User::get();
        return view('users',compact('users'));
    }
  
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function changeStatus(Request $request)
    {
        $user = User::find($request->id);
        $user->status = $request->status;
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
    public function edit($id)
    {
        $user = User::find($id);
        // return $data; die;
        return view('edit',compact('user'));
    }
    public function update(Request $request, User $user)
    { 
        $user->update($request->all());
    
        return redirect()->route('users.index')
                        ->with('success','Status updated successfully');
    }
}