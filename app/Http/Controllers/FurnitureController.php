<?php

namespace App\Http\Controllers;

use App\Http\Requests\FurnitureRequest;
use App\Models\Furniture;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class FurnitureController extends Controller
{
    public function welcome()
    {
        return view ('welcome');
    }  

    public function index(Request $request){
        //index = manggil semua data
        //untuk menampilkan data dari suatu model atau resource

        if ($request->search) {
            $furnitures = Furniture::where('furnitures', 'LIKE', "%$request->search%")
            ->paginate(4);

            return view('index', [
            'data' => $furnitures
        ]);
        }

        $furnitures = Furniture::paginate(4);
        return view('index', [
            'data' => $furnitures
        ]);
    }


    public function store(FurnitureRequest $request){

        // $request->validate([
        //     'tasks' => ['required'],
        //     'user'  => ['required']
        // ]);


    Furniture::create([
        'name_furnitures'=> $request->name_furniture,
        'price'=> $request->price,
        'stock'=> $request->stock,
        'total_order'=> $request->total_order
    ]);


    return redirect('/furnitures');
    }

    public function show($id){
       //manggil data per id

       $furnitures = Furniture::find($id);
       return $furnitures;
    }

    public function update(FurnitureRequest $request, $id ){
        $furnitures = Furniture::find($id);

        $furnitures->update([
            'name_furnitures'=> $request->name_furniture,
            'price'=> $request->price,
            'stock'=> $request->stock,
            'total_order'=> $request->total_order
        ]);

        return redirect('/furnitures');
    }

    public function destroy($id){
        $furnitures = Furniture::find($id);
        $furnitures->delete();

        return redirect('/furnitures');
    }

    public function create()
{
    return view('create');

}

    public function edit($id)
    {
        $furnitures = Furniture::find($id);
        return view('edit', compact('furnitures'));
    }
}

