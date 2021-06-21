<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
//use http\Client;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function products()
    {

        $client = new \GuzzleHttp\Client();
        $res = $client->get('https://thefoodstore.app/api/v1/stores');
        $data = $res->getBody()->getContents();
        $r = json_decode($data);
         $ar=$r->data;
//         var_dump(count($ar));die();
//         dd($ar);
//        $da=0;
//        while ($da=9){
//            print_r($ar[$da]);die();
//        }
//        foreach ($ar as $key => $value){
//                         print_r($value);die();
//
//        }
//        foreach ($ar as $item) {
//            foreach ($item as $it) {
//                print_r($it);die();
//
//            }
//        }
        $lenght=count($ar);
        for ($i=0; $i=$lenght-1; $i++){
//              echo $lenght;die();
            print_r($ar[$i]);die();
        }
        return view('backend.event.create');
    }
    public function index()
    {
        //
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
