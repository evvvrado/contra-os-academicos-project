<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogVisu;
use Carbon\Carbon;

class BlogVisusController extends Controller
{
    //
    public function visualizar(BlogVisu $blog)
    {
        // Force locale
        date_default_timezone_set('America/Sao_Paulo');
        setlocale(LC_ALL, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
        setlocale(LC_TIME, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');

        // Create Carbon date
        $dt = Carbon::now();
        $mes = $blog->created_at->formatLocalized('%B');

        return view("site.blog_detalhe", ["blog" => $blog, "mes" => $mes]);
    }
}
