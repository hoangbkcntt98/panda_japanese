<?php

namespace App\Http\Controllers;

use App\Imports\ImportUsers;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportExcelTest extends Controller
{
    public function import(Request $req) {
        $sheets = [];
        $sheets = Excel::toArray([], $req->file('file'));
        dump($sheets);
        dd();
    }
}
