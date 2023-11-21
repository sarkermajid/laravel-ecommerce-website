<?php

namespace App\Http\Controllers;

use App\Models\TermsAndCondition;
use Illuminate\Http\Request;

class TermsAndConditionController extends Controller
{
    public function index()
    {
        $termsAndCondition = TermsAndCondition::first();
        return view('admin.pages.terms-and-condition',compact('termsAndCondition'));
    }

    public function store(Request $request, $id = null)
    {
        $termsAndCondition = TermsAndCondition::find($id);
        if($termsAndCondition == null){
            $termsAndCondition = new TermsAndCondition();
            $termsAndCondition->terms_and_condition = $request->terms_and_condition;
            $termsAndCondition->save();
            return redirect()->back()->with('message','Terms and Conditions updated successfully');
        }else{
            $termsAndCondition->terms_and_condition = $request->terms_and_condition;
            $termsAndCondition->update();
            return redirect()->back()->with('message','Terms and Conditions updated successfully');
        }
    }

    public function view()
    {
        $termsAndCondition = TermsAndCondition::first();
        return view('frontend.pages.terms-and-conditions',compact('termsAndCondition'));
    }
}
