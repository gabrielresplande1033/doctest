<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagina;
use Illuminate\Support\Facades\Redirect;

class CabecalhoController extends Controller
{

    public function index(){
        return view('admin.cabecalho.index');
    }

    public function listar(){
        $menus = Pagina::get();
        return view('admin.cabecalho.lista', ['menus' => $menus]);
    }

    public function retornarCabecalho(){
        $menus = Pagina::get();

        return $menus;
    }

    public function inserirCabecalho(Request $request){
        $pagina = new Pagina();

        $pagina->create($request->all());

        return redirect()->route('listar')
            ->with('success', 'Inserido com sucesso');

    }

    public function editarCabecalho($idMenu){

        $menu = Pagina::findOrFail($idMenu);

        return view('admin.cabecalho.index', ['menu'=>$menu]);

    }

    public function atualizar($idMenu, Request $request){

        $menu = Pagina::findOrFail($idMenu);

        $menu->update($request->all());

        return redirect()->route('listar')
            ->with('success', 'Alterado com sucesso');

     }

    public function deletarCabecalho($idMenu, Request $request){

        $menu = Pagina::findOrFail($idMenu);

        $menu->delete($request->all());

        return redirect()->route('listar')
            ->with('sucess_delete', 'Deletado com sucesso');
    }

}
