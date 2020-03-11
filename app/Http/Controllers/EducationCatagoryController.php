<?php

namespace App\Http\Controllers;

use App\EducationCatagory;
use Illuminate\Http\Request;

class EducationCatagoryController extends Controller
{
    public function setupEducationCatagory(Request $request)
    {
        if ($request->ajax()) {
            $educationCatagory = EducationCatagory::where('educationCatagoryName', $request->n)->first();
            $data = array(
                'a' => $educationCatagory->educationCatagoryID,
                'b' => $educationCatagory->educationCatagoryName,
                'c' => $educationCatagory->educationCatagoryNameBangla,
                'd' => $educationCatagory->educationCatagoryPriority,
            );
            return $data;
        }        
        $educationCatagories = EducationCatagory::orderBy('educationCatagoryName')->get();
        return view('/pages/setup/education-catagory')->with('educationCatagories', $educationCatagories);
    }

    public function setupEducationCatagoryStore(Request $request)
    {
        if ($request->submitButton == "submitButton") {
            $educationCatagories = EducationCatagory::orderBy('educationCatagoryID')->get();
            $check = false;

            foreach ($educationCatagories as $educationCatagory) {
                if ($educationCatagory->educationCatagoryID == $request->inputEducationCatagoryID) {
                    EducationCatagory::where('educationCatagoryID', $request->inputEducationCatagoryID)->update(['educationCatagoryName' => $request->inputEducationCatagoryName, 'educationCatagoryNameBangla' => $request->inputEducationCatagoryNameBangla, 'educationCatagoryPriority' => $request->inputEducationCatagoryPriority]);
                    $check = true;
                }
            }

            if (!$check) {
                $educationCatagory = new EducationCatagory;
                $educationCatagory->educationCatagoryName = $request->inputEducationCatagoryName;
                $educationCatagory->educationCatagoryNameBangla = $request->inputEducationCatagoryNameBangla;
                $educationCatagory->educationCatagoryPriority = $request->inputEducationCatagoryPriority;
                $educationCatagory->save();
            }
        }
        else if($request->removeButton == "removeButton") {
            EducationCatagory::where('educationCatagoryID', $request->inputEducationCatagoryID)->delete();
        }

        return redirect()->route('educatagory');
    }
}
