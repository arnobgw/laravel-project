<?php

namespace App\Http\Controllers;

use App\WorkingDaysHolidays;
use Illuminate\Http\Request;

class WorkingDaysHolidaysController extends Controller
{
    public function setupWorkingDaysHolidays(Request $request)
    {
        if ($request->ajax()) {
            $workingDaysHolidays = WorkingDaysHolidays::where('monthYear', $request->n)->first();

            if ($workingDaysHolidays) {
                $data = array(
                    'a' => $workingDaysHolidays->ID,
                    'b' => $workingDaysHolidays->monthYear,
                    'c' => $workingDaysHolidays->totalFridays,
                    'd' => $workingDaysHolidays->totalGHDays,
                    'e' => $workingDaysHolidays->totalAdjustDays,
                    'f' => $workingDaysHolidays->totalHolidays,
                    'g' => $workingDaysHolidays->totalWorkingDays,
                    'h' => $workingDaysHolidays->totalMonthDays,
                );
                return $data;
            }
            else
                return null;            
        }
        $workingDaysHolidays = WorkingDaysHolidays::orderBy('ID')->get();
        return view('/pages/setup/working-days-holidays')->with('workingDaysHolidays', $workingDaysHolidays);
    }

    public function setupWorkingDaysHolidaysStore(Request $request)
    {
        if ($request->submitButton == "submitButton") {
            $workingDaysHolidays = WorkingDaysHolidays::orderBy('ID')->get();
            $check = false;

            foreach ($workingDaysHolidays as $_workingDaysHolidays) {
                if ($_workingDaysHolidays->ID == $request->inputID) {
                    WorkingDaysHolidays::where('ID', $request->inputID)->update(['monthYear' => $request->inputMonthYear, 'totalFridays' => $request->inputTotalFridays, 'totalGHDays' => $request->inputTotalGHDays, 'totalAdjustDays' => $request->inputTotalAdjustDays, 'totalHolidays' => $request->inputTotalHolidays, 'totalWorkingDays' => $request->inputTotalWorkingDays, 'totalMonthDays' => $request->inputTotalMonthDays]);
                    $check = true;
                }
            }

            if (!$check) {
                $workingDaysHolidays = new WorkingDaysHolidays;
                $workingDaysHolidays->monthYear = $request->inputMonthYear;
                $workingDaysHolidays->totalFridays = $request->inputTotalFridays;
                $workingDaysHolidays->totalGHDays = $request->inputTotalGHDays;
                $workingDaysHolidays->totalAdjustDays = $request->inputTotalAdjustDays;
                $workingDaysHolidays->totalHolidays = $request->inputTotalHolidays;
                $workingDaysHolidays->totalWorkingDays = $request->inputTotalWorkingDays;
                $workingDaysHolidays->totalMonthDays = $request->inputTotalMonthDays;
                $workingDaysHolidays->save();
            }
        } else if ($request->removeButton == "removeButton") {
            WorkingDaysHolidays::where('ID', $request->inputID)->delete();
        }

        return redirect()->route('wdaysholidays');
    }
}
