<?php

namespace App\Http\Controllers;

use App\Service\TarefaService;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    protected $tarefaService;

public function __construct(TarefaService $tarefaService)
{ 
    $this-> tarefaService = $tarefaService;
    
}
    public function store(request $request){
     $tarefa = $this ->tarefaService->create($request->all());
    return response()->json ($tarefa);
    }
 
    public function findByid($id){
       $result = $this -> tarefaService->findById($id);
       return response()->json ($result);

    }

   public function index(){
    $tarefa = $this ->tarefaService->getAll();
    return response()->json ($tarefa);
   }

}

