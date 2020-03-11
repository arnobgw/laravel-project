<?php

namespace App\Http\Controllers;

use App\OTStatus;
use Illuminate\Http\Request;

class OTStatusController extends Controller
{
    public function setupOTStatus(Request $request)
    {
        if ($request->ajax()) {
            $otStatus = OTStatus::where('otStatusName', $request->n)->first();
            $data = array(
                'a' => $otStatus->otStatusID,
                'b' => $otStatus->otStatusName,
                'c' => $otStatus->otStatusNameBangla,
                'd' => $otStatus->otStatusPriority,
            );
            return $data;
        }        
        $otStatuses = OTStatus::orderBy('otStatusName')->get();
        return view('/pages/setup/ot-status')->with('otStatuses', $otStatuses);
    }

    public function setupOTStatusStore(Request $request)
    {
        if ($request->submitButton == "submitButton") {
            $otStatuses = OTStatus::orderBy('otStatusID')->get();
            $check = false;

            foreach ($otStatuses as $otStatus) {
                if ($otStatus->otStatusID == $request->inputOTStatusID) {
                    OTStatus::where('otStatusID', $request->inputOTStatusID)->update(['otStatusName' => $request->inputOTStatusName, 'otStatusNameBangla' => $request->inputOTStatusNameBangla, 'otStatusPriority' => $request->inputOTStatusPriority]);
                    $check = true;
                }
            }

            if (!$check) {
                $otStatus = new OTStatus;
                $otStatus->otStatusName = $request->inputOTStatusName;
                $otStatus->otStatusNameBangla = $request->inputOTStatusNameBangla;
                $otStatus->otStatusPriority = $request->inputOTStatusPriority;
                $otStatus->save();
            }
        }
        else if($request->removeButton == "removeButton") {
            OTStatus::where('otStatusID', $request->inputOTStatusID)->delete();
        }

        return redirect()->route('otstatus');
    }
}
