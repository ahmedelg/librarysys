<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.dashboard');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function checklogin(Request $request)
    {
        // VALIDATE FRM
        $data =$request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5'
        ]);

        // dd($request);
        // CHECK LOGIN INFO
        // EXTRACT ALL ADMINs
        $admins =new Admin;
        $data =$admins->all();
        foreach($data as $l){
            if($request->email == $l->admin_email){
                if($request->password == $l->admin_password){
                    //return "dashboard of admin
                    return view('admin.dashboard');
                }
            }
        }
//        if(Auth::guard('admin')->attempt(['admin_email'=>$request['email'],'admin_password'=>$request['password']])){
//            return redirect()->intended('/admin/dashboard');
//        }
        abort(404);
//        return 'name of dashboard';
//        return redirect('/admin/dashboard');
        // CHECK ADMIN LOGIN
//         if (auth('admin')::attempt(['email' => $request->email, 'password' => $request->password])) {
//             return redirect()->intended('/admin.dashborad');
//         }
        // SEARCH IF EXISTs
//        return redirect('');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
