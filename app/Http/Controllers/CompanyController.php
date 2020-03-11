<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function setupCompany(Request $request)
    {
        if ($request->ajax()) {
            $company = Company::where('companyName', $request->n)->first();
            $data = array(
                'a' => $company->companyID,
                'b' => $company->companyName,
                'c' => $company->companyAddress,
                'd' => $company->companyPhone,
                'e' => $company->companyManpower,
                'f' => $company->companyPriority,
            );
            return $data;
        }
        $companies = Company::orderBy('companyID')->get();
        return view('/pages/setup/company')->with('companies', $companies);
    }

    public function setupCompanyStore(Request $request)
    {
        if ($request->submitButton == "submitButton") {
            $companies = Company::orderBy('companyID')->get();
            $check = false;

            foreach ($companies as $company) {
                if ($company->companyID == $request->inputCompanyID) {
                    Company::where('companyID', $request->inputCompanyID)->update(['companyName' => $request->inputCompanyName, 'companyAddress' => $request->inputCompanyAddress, 'companyPhone' => $request->inputCompanyPhone, 'companyManpower' => $request->inputCompanyManpower, 'companyPriority' => $request->inputCompanyPriority]);
                    $check = true;
                }
            }

            if (!$check) {
                $company = new Company;
                $company->companyName = $request->inputCompanyName;
                $company->companyAddress = $request->inputCompanyAddress;
                $company->companyPhone = $request->inputCompanyPhone;
                $company->companyManpower = $request->inputCompanyManpower;
                $company->companyPriority = $request->inputCompanyPriority;
                $company->save();
            }
        } else if ($request->removeButton == "removeButton") {
            Company::where('companyID', $request->inputCompanyID)->delete();
        }

        return redirect()->route('company');
    }
}
