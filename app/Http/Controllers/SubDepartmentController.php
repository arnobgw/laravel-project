<?php

namespace App\Http\Controllers;

use App\SubDepartment;
use Illuminate\Http\Request;

class SubDepartmentController extends Controller
{
    public function setupSubDepartment(Request $request)
    {
        if ($request->ajax()) {
            $subDepartment = SubDepartment::where('subDepartmentName', $request->n)->first();
            $data = array(
                'a' => $subDepartment->subDepartmentID,
                'b' => $subDepartment->subDepartmentName,
                'c' => $subDepartment->subDepartmentNameBangla,
                'd' => $subDepartment->subDepartmentPriority,
            );
            return $data;
        }
        $subDepartments = SubDepartment::orderBy('subDepartmentName')->get();
        return view('/pages/setup/sub-department')->with('subDepartments', $subDepartments);
    }

    public function setupSubDepartmentStore(Request $request)
    {
        if ($request->submitButton == "submitButton") {
            $subDepartments = SubDepartment::orderBy('subDepartmentID')->get();
            $check = false;

            foreach ($subDepartments as $subDepartment) {
                if ($subDepartment->subDepartmentID == $request->inputSubDepartmentID) {
                    SubDepartment::where('subDepartmentID', $request->inputSubDepartmentID)->update(['subDepartmentName' => $request->inputSubDepartmentName, 'subDepartmentNameBangla' => $request->inputSubDepartmentNameBangla, 'subDepartmentPriority' => $request->inputSubDepartmentPriority]);
                    $check = true;
                }
            }

            if (!$check) {
                $subDepartment = new SubDepartment;
                $subDepartment->subDepartmentName = $request->inputSubDepartmentName;
                $subDepartment->subDepartmentNameBangla = $request->inputSubDepartmentNameBangla;
                $subDepartment->subDepartmentPriority = $request->inputSubDepartmentPriority;
                $subDepartment->save();
            }
        }
        else if($request->removeButton == "removeButton") {
            SubDepartment::where('subDepartmentID', $request->inputSubDepartmentID)->delete();
        }

        return redirect()->route('sdepartment');
    }
}
