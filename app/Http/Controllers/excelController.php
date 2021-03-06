<?php

namespace App\Http\Controllers;

use App\Exports\printExport;
use App\Imports\StudentsImport;
use App\Imports\PrintImport;
use App\Imports\PrintsImport;
use App\Models\printCash;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class excelController extends Controller
{
    public function fileImport(Request $request) 
    {
        Excel::import(new StudentsImport, $request->file('file')->store('temp'));
        return back();
    }
    public function importPrint(Request $request) 
    {
        Excel::import(new PrintsImport, $request->file('file')->store('temp'));
        return back();
    }
    
    public function exportPrint()
    {
        return Excel::download(new printExport, 'print-cash.xlsx');
    }

}
