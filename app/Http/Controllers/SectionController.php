<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;

class SectionController extends Controller
{
    public function setupSection(Request $request)
    {
        if ($request->ajax()) {
            $section = Section::where('sectionName', $request->n)->first();
            $data = array(
                'a' => $section->sectionID,
                'b' => $section->sectionName,
                'c' => $section->sectionNameBangla,
                'd' => $section->sectionPriority,
            );
            return $data;
        }        
        $sections = Section::orderBy('sectionName')->get();
        return view('/pages/setup/section')->with('sections', $sections);
    }

    public function setupSectionStore(Request $request)
    {
        if ($request->submitButton == "submitButton") {
            $sections = Section::orderBy('sectionID')->get();
            $check = false;

            foreach ($sections as $section) {
                if ($section->sectionID == $request->inputSectionID) {
                    Section::where('sectionID', $request->inputSectionID)->update(['sectionName' => $request->inputSectionName, 'sectionNameBangla' => $request->inputSectionNameBangla, 'sectionPriority' => $request->inputSectionPriority]);
                    $check = true;
                }
            }

            if (!$check) {
                $section = new Section;
                $section->sectionName = $request->inputSectionName;
                $section->sectionNameBangla = $request->inputSectionNameBangla;
                $section->sectionPriority = $request->inputSectionPriority;
                $section->save();
            }
        }
        else if($request->removeButton == "removeButton") {
            Section::where('sectionID', $request->inputSectionID)->delete();
        }

        return redirect()->route('section');
    }
}
