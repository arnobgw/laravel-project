<?php

namespace App\Http\Controllers;

use App\Designation;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class DesignationController extends Controller
{
    public function setupDesignation(Request $request)
    {
        if ($request->ajax()) {
            $designation = Designation::where('designationName', $request->n)->first();
            $data = array(
                'a' => $designation->designationID,
                'b' => $designation->designationName,
                'c' => $designation->designationNameBangla,
                'd' => $designation->designationPriority,
            );
            return $data;
        }
        $designations = Designation::orderBy('designationName')->get();
        return view('/pages/setup/designation')->with('designations', $designations);
    }

    public function setupDesignationStore(Request $request)
    {
        if ($request->submitButton == "submitButton") {
            $designations = Designation::orderBy('designationID')->get();
            $check = false;

            foreach ($designations as $designation) {
                if ($designation->designationID == $request->inputDesignationID) {
                    Designation::where('designationID', $request->inputDesignationID)->update(['designationName' => $request->inputDesignationName, 'designationNameBangla' => $request->inputDesignationNameBangla, 'designationPriority' => $request->inputDesignationPriority]);
                    $check = true;
                }
            }

            if (!$check) {
                $designation = new Designation;
                $designation->designationName = $request->inputDesignationName;
                $designation->designationNameBangla = $request->inputDesignationNameBangla;
                $designation->designationPriority = $request->inputDesignationPriority;
                $designation->save();
            }
        }
        else if($request->removeButton == "removeButton") {
            Designation::where('designationID', $request->inputDesignationID)->delete();
        }

        return redirect()->route('designation');
    }
}
