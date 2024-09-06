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
 

}
