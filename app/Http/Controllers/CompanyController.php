<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    //
    public function getCompanies() {
        $companies = DB::select('SELECT company_nm, tax_cd, company_addr, city, DATE_FORMAT(public_dt, "%Y-%m-%d") AS public_dt, `desc` FROM companies LIMIT 30');
        return view('listcompany', ['companies' => $companies]);
    }
}
