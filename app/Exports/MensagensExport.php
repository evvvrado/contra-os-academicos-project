<?php

namespace App\Exports;

use App\Models\Mensagem;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

class MensagensExport implements FromCollection
{
    public function collection()
    {
        return DB::table('mensagems')->select("nome", "email", "telefone", "cidade", "mensagem", DB::raw("DATE_FORMAT(created_at, '%d/%m/%Y - %H:%i:%s') as data"))->get();
    }
}

?>