<?php

namespace App\Http\Controllers;

use App\Models\DocumentoTeste;
use App\Models\Pagina;
use Illuminate\Http\Request;

class DocumentoTesteController extends Controller
{
    public function index()
    {
        $paginas = Pagina::all();

        return view('admin.documento.index', compact('paginas'));
    }

    public function inserirTeste(Request $request)
    {
        $documentoTeste = new DocumentoTeste();

        $documentoTeste->create($request->all());

        return redirect()->route('listarTeste')
            ->with('success', 'Inserido com sucesso');

    }

    public function listarTeste()
    {
        $documentos = DocumentoTeste::all();
        return view('admin.documento.lista', compact('documentos'));
    }

    public function deletarDocumento($idTeste, Request $request)
    {

        $teste = DocumentoTeste::findOrFail($idTeste);

        $teste->delete($request->all());

        \Session::flash('mensagem_sucesso', 'Menu do Cabecalho deletado com sucesso!');

        return redirect()->route('listarTeste')
            ->with('sucess_delete', 'Deletado com sucesso');
    }

    public function editarDocumento($idDocumento)
    {

        $documento = DocumentoTeste::findOrFail($idDocumento);

        $paginas = Pagina::all();

        return view('admin.documento.index', ['documento' => $documento], compact('paginas'));

    }

    public function atualizar($idDocumento, Request $request)
    {

        $documento = DocumentoTeste::findOrFail($idDocumento);

        $documento->update($request->all());

        return redirect()->route('listarTeste')
            ->with('success', 'Alterado com sucesso');

    }
}
