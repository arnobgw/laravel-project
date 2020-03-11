<?php

namespace App\Http\Controllers;

use App\EmployeeCatagory;
use Illuminate\Http\Request;

class EmployeeCatagoryController extends Controller
{
    public function setupEmployeeCatagory(Request $request)
    {
        if ($request->ajax()) {
            $employeeCatagory = EmployeeCatagory::where('employeeCatagoryName', $request->n)->first();
            $data = array(
                'a' => $employeeCatagory->employeeCatagoryID,
                'b' => $employeeCatagory->employeeCatagoryName,
                'c' => $employeeCatagory->employeeCatagoryNameBangla,
                'd' => $employeeCatagory->employeeCatagoryPriority,
            );
            return $data;
        }
        $employeeCatagories = EmployeeCatagory::orderBy('employeeCatagoryName')->get();
        return view('/pages/setup/employee-catagory')->with('employeeCatagories', $employeeCatagories);
    }

    public function setupEmployeeCatagoryStore(Request $request)
    {
        if ($request->submitButton == "submitButton") {
            $employeeCatagories = EmployeeCatagory::orderBy('employeeCatagoryID')->get();
            $check = false;

            foreach ($employeeCatagories as $employeeCatagory) {
                if ($employeeCatagory->employeeCatagoryID == $request->inputEmployeeCatagoryID) {
                    EmployeeCatagory::where('employeeCatagoryID', $request->inputEmployeeCatagoryID)->update(['employeeCatagoryName' => $request->inputEmployeeCatagoryName, 'employeeCatagoryNameBangla' => $request->inputEmployeeCatagoryNameBangla, 'employeeCatagoryPriority' => $request->inputEmployeeCatagoryPriority]);
                    $check = true;
                }
            }

            if (!$check) {
                $employeeCatagory = new EmployeeCatagory;
                $employeeCatagory->employeeCatagoryName = $request->inputEmployeeCatagoryName;
                $employeeCatagory->employeeCatagoryNameBangla = $request->inputEmployeeCatagoryNameBangla;
                $employeeCatagory->employeeCatagoryPriority = $request->inputEmployeeCatagoryPriority;
                $employeeCatagory->save();
            }
        }
        else if($request->removeButton == "removeButton") {
            EmployeeCatagory::where('employeeCatagoryID', $request->inputEmployeeCatagoryID)->delete();
        }

        return redirect()->route('empcatagory');
    }
}
