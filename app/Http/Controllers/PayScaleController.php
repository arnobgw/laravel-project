<?php

namespace App\Http\Controllers;

use App\PayScale;
use Illuminate\Http\Request;

class PayScaleController extends Controller
{
    public function setupPayScale(Request $request)
    {
        if ($request->ajax()) {
            $payScale = PayScale::where('payScaleName', $request->n)->first();
            $data = array(
                'a' => $payScale->payScaleID,
                'b' => $payScale->payScaleName,
                'c' => $payScale->payScaleNameBangla,
                'd' => $payScale->payScalePriority,
            );
            return $data;
        }        
        $payScales = PayScale::orderBy('payScaleName')->get();
        return view('/pages/setup/pay-scale')->with('payScales', $payScales);
    }

    public function setupPayScaleStore(Request $request)
    {
        if ($request->submitButton == "submitButton") {
            $payScales = PayScale::orderBy('payScaleID')->get();
            $check = false;

            foreach ($payScales as $payScale) {
                if ($payScale->payScaleID == $request->inputPayScaleID) {
                    PayScale::where('payScaleID', $request->inputPayScaleID)->update(['payScaleName' => $request->inputPayScaleName, 'payScaleNameBangla' => $request->inputPayScaleNameBangla, 'payScalePriority' => $request->inputPayScalePriority]);
                    $check = true;
                }
            }

            if (!$check) {
                $payScale = new PayScale;
                $payScale->payScaleName = $request->inputPayScaleName;
                $payScale->payScaleNameBangla = $request->inputPayScaleNameBangla;
                $payScale->payScalePriority = $request->inputPayScalePriority;
                $payScale->save();
            }
        }
        else if($request->removeButton == "removeButton") {
            PayScale::where('payScaleID', $request->inputPayScaleID)->delete();
        }

        return redirect()->route('pscale');
    }
}
