<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    public function setupDepartment(Request $request)
    {
        if ($request->ajax()) {
            $department = Department::where('departmentName', $request->n)->first();
            $data = array(
                'a' => $department->departmentID,
                'b' => $department->departmentName,
                'c' => $department->departmentNameBangla,
                'd' => $department->departmentPriority,
            );
            return $data;
        }
        $departments = Department::orderBy('departmentName')->get();
        return view('/pages/setup/department')->with('departments', $departments);
    }

    public function setupDepartmentStore(Request $request)
    {
        if ($request->submitButton == "submitButton") {
            $departments = Department::orderBy('departmentID')->get();
            $check = false;

            foreach ($departments as $department) {
                if ($department->departmentID == $request->inputDepartmentID) {
                    Department::where('departmentID', $request->inputDepartmentID)->update(['departmentName' => $request->inputDepartmentName, 'departmentNameBangla' => $request->inputDepartmentNameBangla, 'departmentPriority' => $request->inputDepartmentPriority]);
                    $check = true;
                }
            }

            if (!$check) {
                $department = new Department;
                $department->departmentName = $request->inputDepartmentName;
                $department->departmentNameBangla = $request->inputDepartmentNameBangla;
                $department->departmentPriority = $request->inputDepartmentPriority;
                $department->save();
            }
        } else if ($request->removeButton == "removeButton") {
            Department::where('departmentID', $request->inputDepartmentID)->delete();
        }

        return redirect()->route('department');
    }
}
