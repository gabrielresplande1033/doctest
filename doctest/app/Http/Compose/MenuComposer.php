<?php


namespace App\Http\Compose;

use App\Models\DocumentoTeste;
use App\Models\Pagina;
use Illuminate\View\View;

class MenuComposer
{

    public function compose(View $view)
    {
        $menus = Pagina::get();
        $documentos = DocumentoTeste::get();

        $view->with(['menus' => $menus, 'documentos' => $documentos]);
    }

}