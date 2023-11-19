<?php

namespace App\Http\Controllers;

use App\Http\Requests\PromoCodeRequest;
use App\Models\PromoCode;
use Illuminate\Http\Request;

class PromoCodeController extends Controller
{
    public function index()
    {
        return view('admin.promo.create');
    }

    public function store(PromoCodeRequest $request)
    {
        $promoCode = new PromoCode();
        $promoCode->title = $request->title;
        $promoCode->type = $request->type;
        $promoCode->code = $request->code;
        $promoCode->discount = $request->discount;
        $promoCode->limit = $request->limit;
        $promoCode->expire_date = $request->expire_date;
        $promoCode->status = $request->status;
        $promoCode->save();
        return redirect()->route('promo.manage')->with('message','Promo Code created successfully');
    }

    public function manage()
    {
        $promoCodes = PromoCode::orderBy('id','desc')->get();
        return view('admin.promo.manage',compact('promoCodes'));
    }
}
