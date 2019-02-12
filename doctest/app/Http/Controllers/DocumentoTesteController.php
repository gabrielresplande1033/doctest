<?php

namespace App\Http\Controllers;

use App\Models\DocumentoTeste;
use App\Models\Pagina;
use Illuminate\Http\Request;

class DocumentoTesteController extends Controller
{
    public function index(){

        $paginas = Pagina::all();

        return view('admin.documento.index', compact('paginas'));
    }

    public function inserirTeste(Request $request){
        $documentoTeste = new DocumentoTeste();

        $documentoTeste->create($request->all());

        \Session::flash('mensagem_sucesso', 'Documento de teste inserido com sucesso!');

        return redirect()->back();

    }

    public function listarTeste(){

        $documentos = DocumentoTeste::all();
        return view('admin.documento.lista', compact('documentos'));
    }

    public function deletarDocumento($idTeste, Request $request){

        $teste = DocumentoTeste::findOrFail($idTeste);

        $teste->delete($request->all());

        \Session::flash('mensagem_sucesso', 'Menu do Cabecalho deletado com sucesso!');

        return redirect()->back();
    }

    public function editarDocumento($idDocumento){

        $documento = DocumentoTeste::findOrFail($idDocumento);

        $paginas = Pagina::all();

        return view('admin.documento.index', ['documento'=>$documento], compact('paginas'));

    }
}
