<?php

// app/Imports/EstudiantesImport.php
namespace App\Imports;

use App\Models\Estudiante;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EstudiantesImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // Asegurarnos de que existan las columnas requeridas
        if (isset($row['Código']) && isset($row['Nombres']) && isset($row['Contacto'])) {
            return new Estudiante([
                'codigo' => $row['Código'],
                'nombres' => $row['Nombres'],
                'contacto' => $row['Contacto'],
            ]);
        }

        // Si alguna columna requerida no existe en el archivo, retornamos null
        return null;
    }
}
