<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use App\Pekerjaan;
use App\ModelUser;


class AuthController extends Controller
{
    public function getLogin()
    {

    	return view('login');
    }

    public function postLogin(Request $request)
    {
    	if (!\auth()->attempt(['email'=> $request->email, 'password'=>$request->password])) {
    		return redirect('login');
    	}else if(auth::user()->pekerjaan=="pelapor") {
            return redirect('indexpelapor');
        }else if (auth::user()->pekerjaan=="bpbd") {
            return redirect('indexbpbd');
        }else if(auth::user()->pekerjaan=="dinas") {
            return redirect('indexdinas');
        }
        // dd($request->all());
        // $input = $request->all();
        // return view('home',compact('input'));

    	// return redirect()->route('dashboard', compact('input'));
    }

    public function getRegister()
    {
    	$data = Pekerjaan::all();
        // dd($data);
        return view('register',compact('data'));
        // return view('registerpelapor');
    }

    public function postRegister(Request $request)
    {
    	$this->validate($request, [
    		'nama' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'pekerjaan' => 'required',
            'password' => 'required|min:6',
            'confirmation' => 'required|same:password',
    	]);

        $input = $request->all();
    	$data = new User();
        $data->nama = $input['nama'];
        $data->email = $input['email'];
        $data->pekerjaan = $input['pekerjaan'];
        $data->password = bcrypt($request->password);
        // dd($data);
        $data->save();
        return redirect('login')->with('alert-success','Kamu berhasil Register');

    }

    // public function create()
    // {
    //     $data = pekerjaan::all();
    //     // dd($data);
    //     return view('register',compact('data'));
    // }

    public function logout()
    {
    	\auth()->logout();

    	return redirect()->route('login');
    }

   public function edit()
    {
        $data = Auth::user()->id;
        $user = User::where('id', $data)->first();
        // dd($user);
        // dd($data);
        return view('editProfilPelapor', compact('user'));
    }
    
    public function update(Request $request)
    {
        $data = Auth::user()->id;
        
        $user = User::findOrFail($data);
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->update();
        // dd($input);
        return redirect('indexpelapor')->with('alert-success', 'Sukses Edit Profil');
    }

    public function editBpbd()
     {
        $data = Auth::user()->id;
        $user = User::where('id', $data)->first();
        // dd($user);
        // dd($data);
        return view('editProfilBpbd', compact('user'));
    }
    
    public function updateBpbd(Request $request)
    {
        $data = Auth::user()->id;
        
        $user = User::findOrFail($data);
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->update();
        // dd($input);
        return redirect('indexbpbd')->with('alert-success', 'Sukses Edit Profil');
    }

    public function editDinas()
     {
        $data = Auth::user()->id;
        $user = User::where('id', $data)->first();
        // dd($user);
        // dd($data);
        return view('editProfilDinas', compact('user'));
    }
    
    public function updateDinas(Request $request)
    {
        $data = Auth::user()->id;
        
        $user = User::findOrFail($data);
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->update();
        // dd($input);
        return redirect('indexdinas')->with('alert-success', 'Sukses Edit Profil');
    }
}
