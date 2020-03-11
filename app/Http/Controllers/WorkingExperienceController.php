<?php

namespace App\Http\Controllers;

use App\WorkingExperience;
use Illuminate\Http\Request;

class WorkingExperienceController extends Controller
{
    public function setupWorkingExperience(Request $request)
    {
        if ($request->ajax()) {
            $workingExperience = WorkingExperience::where('workingExperienceName', $request->n)->first();
            $data = array(
                'a' => $workingExperience->workingExperienceID,
                'b' => $workingExperience->workingExperienceName,
                'c' => $workingExperience->workingExperienceNameBangla,
                'd' => $workingExperience->workDetails,
                'e' => $workingExperience->workingExperiencePriority,
            );
            return $data;
        }        
        $workingExperiences = WorkingExperience::orderBy('workingExperienceName')->get();
        return view('/pages/setup/working-experience')->with('workingExperiences', $workingExperiences);
    }

    public function setupWorkingExperienceStore(Request $request)
    {
        if ($request->submitButton == "submitButton") {
            $workingExperiences = WorkingExperience::orderBy('workingExperienceID')->get();
            $check = false;

            foreach ($workingExperiences as $workingExperience) {
                if ($workingExperience->workingExperienceID == $request->inputWorkingExperienceID) {
                    WorkingExperience::where('workingExperienceID', $request->inputWorkingExperienceID)->update(['workingExperienceName' => $request->inputWorkingExperienceName, 'workingExperienceNameBangla' => $request->inputWorkingExperienceNameBangla, 'workDetails' => $request->inputWorkDetails,'workingExperiencePriority' => $request->inputWorkingExperiencePriority]);
                    $check = true;
                }
            }

            if (!$check) {
                $workingExperience = new WorkingExperience;
                $workingExperience->workingExperienceName = $request->inputWorkingExperienceName;
                $workingExperience->workingExperienceNameBangla = $request->inputWorkingExperienceNameBangla;
                $workingExperience->workDetails = $request->inputWorkDetails;
                $workingExperience->workingExperiencePriority = $request->inputWorkingExperiencePriority;
                $workingExperience->save();
            }
        }
        else if($request->removeButton == "removeButton") {
            WorkingExperience::where('workingExperienceID', $request->inputWorkingExperienceID)->delete();
        }

        return redirect()->route('wexperience');
    }
}
