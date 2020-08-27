<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\albunModel;

class albunController extends Controller
{
    public function albun()
    {
        return response()->json(albunModel::get(), 200);
    }

    public function albunById($id)
    {
        return response()->json(albunModel::find($id), 200);
    }

    public function albunSave(Request $request){
        $albun = albunModel::create($request->all());
        return response()->json($albun, 200);
    }

    public function albunUpdate(Request $request, albunModel $albun)
    {
        $albun->update($request->all());
        return response()->json($albun, 200);
    }

    public function albunDelete(Request $request, albunModel $albun)
    {
        $albun->delete();
        return response()->json(null, 204);
    }
}
