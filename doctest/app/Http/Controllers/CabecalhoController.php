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

    public function inserirCabecalho(Request $request){
        $pagina = new Pagina();

        $pagina = $pagina->create($request->all());

        \Session::flash('mensagem_sucesso', 'Menu do Cabecalho cadastrado com sucesso!');

        return Redirect::to('cadastrar');

    }

    public function editarCabecalho($idMenu){

        $menu = Pagina::findOrFail($idMenu);

        return view('admin.cabecalho.index', ['menu'=>$menu]);

    }

    public function atualizar($idMenu, Request $request)
    {

        $menu = Pagina::findOrFail($idMenu);

        $menu->update($request->all());

        \Session::flash('mensagem_sucesso', 'Menu do Cabecalho atualizado com sucesso!');

        return redirect()->back();

     }


    public function deletarCabecalho($idMenu, Request $request){

        $menu = Pagina::findOrFail($idMenu);

        $menu->delete($request->all());

        \Session::flash('mensagem_sucesso', 'Menu do Cabecalho deletado com sucesso!');

        return redirect()->back();
    }






        /*  try {
            $removido = $this->hotelRepository->delete($request->id);
            return response()->json($removido);
        } catch (\Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }*/

}
