<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Helpers\Guzzle;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resbanner = Guzzle::get([], env('API_URL'), '/news/list_news', null);
        $resproduct = Guzzle::get([], env('API_URL'), '/product/list_all?', null);
        $reslistcat = Guzzle::get([], env('API_URL'), '/product/list_categories', null);
        $banner = $resbanner['data']->data;
        $product = $resproduct['data']->data;
        $listcat = $reslistcat['data']->data;
        // dd($listcat);
        return view('home', compact('banner','product','listcat'))->withTitle('Home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $parameter = [
            'phoneEmail' => $request->nohp,
            'password' => $request->password
        ];


        $response = Guzzle::post($parameter, env('API_URL'), '/auth/auth');
        if ($response['status_code'] != 200) {
            $message = $response['data']->message;
            return redirect()->back()->withErrors(['errorlogin' => $message])->withInput();
        }
        $request->session()->put('memberLog', $response['data']->data);
        return redirect()->back();
        // dd($response);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('memberLog');
        return redirect()->back();
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
