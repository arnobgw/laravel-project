<?php

namespace App\Http\Controllers;

use App\Sex;
use Illuminate\Http\Request;

class SexController extends Controller
{
    public function setupSex(Request $request)
    {
        if ($request->ajax()) {
            $sex = Sex::where('sexName', $request->n)->first();
            $data = array(
                'a' => $sex->sexID,
                'b' => $sex->sexName,
                'c' => $sex->sexNameBangla,
                'd' => $sex->sexPriority,
            );
            return $data;
        }        
        $sexes = Sex::orderBy('sexName')->get();
        return view('/pages/setup/sex')->with('sexes', $sexes);
    }

    public function setupSexStore(Request $request)
    {
        if ($request->submitButton == "submitButton") {
            $sexes = Sex::orderBy('sexID')->get();
            $check = false;

            foreach ($sexes as $sex) {
                if ($sex->sexID == $request->inputSexID) {
                    Sex::where('sexID', $request->inputSexID)->update(['sexName' => $request->inputSexName, 'sexNameBangla' => $request->inputSexNameBangla, 'sexPriority' => $request->inputSexPriority]);
                    $check = true;
                }
            }

            if (!$check) {
                $sex = new Sex;
                $sex->sexName = $request->inputSexName;
                $sex->sexNameBangla = $request->inputSexNameBangla;
                $sex->sexPriority = $request->inputSexPriority;
                $sex->save();
            }
        }
        else if($request->removeButton == "removeButton") {
            Sex::where('sexID', $request->inputSexID)->delete();
        }

        return redirect()->route('sex');
    }
}
