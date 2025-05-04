<?php

namespace App\Http\Controllers\Backends;

use App\Http\Controllers\Controller;
use App\Models\Features;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class BackendFeaturesController extends Controller
{
    public function index (){
        $features = Features::get();
        return view('backends.admin',["features" => $features]);
    }
    public function create (){
        return view('backends.create');
    }
    public function edit($id)
    {
        $feature = Features::findOrFail($id);
        return view('backends.edit', compact('feature'));
    }
    
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:30',
            'image_path' => 'required|string',
            'order' => 'required',
        ]);
        Features::where('id',$id)->update($validated);
        return redirect()->route('backends.admin');
    }
    
    public function store (Request $request){
        $validated = $request->validate([
            'title' => 'required|string|max:30',
            'image_path' => 'required|string',
            'order' => 'required',
        ]);
        Features::create($validated);
        return redirect()->route('backends.admin');
    }

    public function delete($id)
    {
        $feature = Features::findOrFail($id);
        $feature->delete();
        return redirect()->route('backends.admin');
    }
}
