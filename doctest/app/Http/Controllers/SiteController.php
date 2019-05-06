<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagina;
use App\Models\DocumentoTeste;

class SiteController extends Controller
{
    public function index(){
        return view('site.home.index');
    }

    public function retornarDocumento($id)
    {
        $documentos = DocumentoTeste::findOrFail($id);

        return view('site.home.documentos', compact('documentos'));
    }
}
