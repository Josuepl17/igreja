<?php

namespace App\Http\Controllers;


use App\Models\caixas;
use App\Models\despesas;
use App\Models\ofertas;
use App\Models\usuarios;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\dizimos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use GuzzleHttp\Promise\Create;

class MembrosController extends Controller
{
    /*Usuarios*/

    public function index()
    {   $index = usuarios::all();
        $paginaConteudo = view('pagina.principal')->render();
       
        
        $respostaJson = response()->json($paginaConteudo);
    
        return view('pagina.index')->with('index', $index);
        
    }


    public function principal(){
        $index = usuarios::all();
        $view = view('pagina.principal', compact('index'))->render();
        return response()->json($view);
    }





    public function barra()
    {
       
    

        $paginaPrincipal = view('pagina.index');
    
       
        $respostaJson = response()->json([
            'conteudo_especifico' => view('pagina.principal')->render()
        ]);
    
      
        return $paginaPrincipal->with('respostaJson', $respostaJson);
    }
    


















    public function cadastro_membro()
    {
        $view = view('pagina.formulario')->render();
        return response()->json($view);
        
    }

    public function botao_inserir_membro(request $request)
    {
        $dados = $request->all();
        $DADOS1 =  array_map('strtoupper', array_map('strval', $dados));
        usuarios::create($DADOS1);
        return redirect('/');
    }


    public function excluir_membro(request $request)
    {
        $destroy = $request->id;
        dizimos::where('user_id', $destroy)->forceDelete();
        usuarios::destroy($destroy);
        return redirect('/');
    }
}
