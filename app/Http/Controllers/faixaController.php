<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\faixaModel;

class faixaController extends Controller
{
    public function faixa()
    {
        return response()->json(faixaModel::get(), 200);
    }

    public function faixaById($id)
    {
        return response()->json(faixaModel::find($id), 200);
    }

    public function faixaSave(Request $request){
        $faixa = faixaModel::create($request->all());
        return response()->json($faixa, 200);
    }

    public function faixaUpdate(Request $request, faixaModel $faixa)
    {
        $faixa->update($request->all());
        return response()->json($faixa, 200);
    }

    public function faixaDelete(Request $request, faixaModel $faixa)
    {
        $faixa->delete();
        return response()->json(null, 204);
    }
}
