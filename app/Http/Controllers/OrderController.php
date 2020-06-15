<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckOutRequest;
use App\Order;
use App\Province;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {


    }

    public function getCities(Province $province)
    {
//        DB::enableQueryLog(); // Enable query log

        $cities = DB::table("cities")
            ->where("province_id", $province->id)
            ->pluck("name", "id");
//        $cities = $province->cities;
//        return $cities;
//        dd(DB::getQueryLog()[0]); // Show results of log

        return response()->json($cities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Province $province
     * @return Response
     */
    public function create(Province $province)
    {
        $provinces = $province->all();

        // Get the Record itself with it's pivots all together
        //1.
        //return $province = Province::with('cities')->find(1);
        //2.
        //$province = Province::find(1);
        //$province->cities;
        //return  $province;

        return view('user.order.check-out', compact('provinces'));

//        DB::enableQueryLog(); // Enable query log
//         $cities = $province->find(27)->cities;
//        $cities = $province->find(27)->load('cities');
//        dd(DB::getQueryLog()); // Show results of log


//        return view('user.order.check-out');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CheckOutRequest $request
     * @return void
     */
    public function store(CheckOutRequest $request)
    {
        var_dump($request->all());
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function tempStore(Request $request)
    {
//        dd('dd');
        $this->validate($request, [
            'number' => 'required|digits_between:1,100|numeric'
        ]);

        session(['count' => $request->number]);
//        echo session('BookNumbers');
//        return session('count');

        return redirect()->route('order.create');

    }


    /**
     * Display the specified resource.
     *
     * @param \App\Order $order
     * @return Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Order $order
     * @return Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Order $order
     * @return Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Order $order
     * @return Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
