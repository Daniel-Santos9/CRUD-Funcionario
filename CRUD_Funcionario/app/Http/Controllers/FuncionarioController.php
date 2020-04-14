<?php

namespace App\Http\Controllers;
use App\Funcionario;
use Illuminate\Http\Request;
use App\Http\Controllers\uncionarioController;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $Funcionarios = Funcionario::all();
        //dd($Funcionarios);
        return view('index', compact('Funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('create');
    }


    public function store(Request $request){

       $mensagens = [
        'name.required' => 'Por favor, preencha o campo nome!',
        'email.required' => 'Por favor, preencha o campo email!',
        'especialidade.required' => 'Por favor, preencha o campo especialidade!',
        'salario.required' => 'Por favor, preencha o campo SALARIO!'
       ];

       $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'especialidade' => 'required',
        'salario' => 'required',
       ], $mensagens );


        $funcionario = new Funcionario();
        $funcionario->name = $request->input('name');
        $funcionario->email = $request->input('email');
        $funcionario->especialidade = $request->input('especialidade');
        $funcionario->salario = $request->input('salario');

        // dd($funcionario);
        if($funcionario){
            $funcionario->save();
            return redirect()->route('index')
            ->withInput()
            ->with(['insert' => true,'name' => $request->name]);
    
        }
        // $funcionario = $request->all();

        // if($funcionario){
        //     Funcionario::create($funcionario);
        // }else{
        //     return false;
        // }
        
        // return redirect()->route('index')
        // ->withInput()
        // ->with(['insert' => true,'name' => $request->name]);

    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $funcionario = Funcionario::findOrFail($id);
        return view('update',compact('funcionario')); 
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){


        $funcionario = $request->all();
        $id = Funcionario::findOrFail($id);
        $id->update($funcionario);

 
        return redirect()->route('index')
            ->withInput()
            ->with(['update' => true,'name' => $request->name]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

        // dd($id);
        $id_funcionario = Funcionario::findOrFail($id);

        if(isset( $id_funcionario)){
            $id_funcionario->delete($id);
            return redirect()->route('index')
                ->withInput()
                ->with(['delete' => true,'name' => $id_funcionario->name]);
        }
    }
}
