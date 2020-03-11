<?php

namespace App\Http\Controllers;

use App\Religion;
use Illuminate\Http\Request;

class ReligionController extends Controller
{
    public function setupReligion(Request $request)
    {
        if ($request->ajax()) {
            $religion = Religion::where('religionName', $request->n)->first();
            $data = array(
                'a' => $religion->religionID,
                'b' => $religion->religionName,
                'c' => $religion->religionNameBangla,
                'd' => $religion->religionPriority,
            );
            return $data;
        }        
        $religions = Religion::orderBy('religionName')->get();
        return view('/pages/setup/religion')->with('religions', $religions);
    }

    public function setupReligionStore(Request $request)
    {
        if ($request->submitButton == "submitButton") {
            $religions = Religion::orderBy('religionID')->get();
            $check = false;

            foreach ($religions as $religion) {
                if ($religion->religionID == $request->inputReligionID) {
                    Religion::where('religionID', $request->inputReligionID)->update(['religionName' => $request->inputReligionName, 'religionNameBangla' => $request->inputReligionNameBangla, 'religionPriority' => $request->inputReligionPriority]);
                    $check = true;
                }
            }

            if (!$check) {
                $religion = new Religion;
                $religion->religionName = $request->inputReligionName;
                $religion->religionNameBangla = $request->inputReligionNameBangla;
                $religion->religionPriority = $request->inputReligionPriority;
                $religion->save();
            }
        }
        else if($request->removeButton == "removeButton") {
            Religion::where('religionID', $request->inputReligionID)->delete();
        }

        return redirect()->route('religion');
    }
}
