<?php

namespace App\Http\Controllers;

use App\Models\RevistaVisu;
use Carbon\Carbon;

class RevistaVisusController extends Controller
{
    //
    public function visualizar(RevistaVisu $revista)
    {
        // Force locale
        date_default_timezone_set('America/Sao_Paulo');
        setlocale(LC_ALL, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
        setlocale(LC_TIME, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');

        // Create Carbon date
        $dt = Carbon::now();
        $mes = $revista->created_at->formatLocalized('%B');

        return view("site.revista_detalhe_visu", ["revista" => $revista, "mes" => $mes]);
    }
}
