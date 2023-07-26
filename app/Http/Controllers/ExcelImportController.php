<?php

// app/Http/Controllers/ExcelImportController.php
// app/Http/Controllers/ExcelImportController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\EstudiantesImport;
use App\Models\Estudiante;

class ExcelImportController extends Controller
{
    public function showForm()
    {
        return view('upload');
    }

    public function import(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|mimes:xls,xlsx'
        ]);

        $file = $request->file('excel_file');

        Excel::import(new EstudiantesImport, $file);

        return redirect()->route('data.show');
    }

    public function showData()
    {
        $data = Estudiante::all();

        return view('show_data', compact('data'));
    }
}
