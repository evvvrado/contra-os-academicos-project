<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListaVisu;
use Carbon\Carbon;

class ListaVisusController extends Controller
{
    //
    public function visualizar(ListaVisu $lista)
    {
        // Force locale
        date_default_timezone_set('America/Sao_Paulo');
        setlocale(LC_ALL, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
        setlocale(LC_TIME, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');

        // Create Carbon date
        $dt = Carbon::now();
        $mes = $lista->created_at->formatLocalized('%B');

        return view("site.lista_detalhe_visu", ["lista" => $lista, "mes" => $mes]);
    }
}
