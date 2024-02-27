<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;

class AssetController extends Controller
{
    public function index() {
        $assets = Asset::all();
        return view('assets.index', ['assets' => $assets]);
    }

    public function create() {
        return view('assets.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'employee_id' => 'required',
            'item' => 'required',
            'model' => 'required',
            'serial' => 'required'
        ]);

        $newAsset = Asset::create($data);

        return redirect(route('asset.index'));
    }


    public function edit(Asset $asset) {
        return view('assets.edit', ['asset' => $asset]);
    }


    public function update(Asset $asset, Request $request) {
            $data = $request->validate([
                'item' => 'required',
                'model' => 'required',
                'serial' => 'required'
        ]);

        $asset->update($data);

        return redirect(route('asset.index'))->with('success', 'Product Updated Successfully');
    }

    public function delete(Asset $asset) {
        $asset->delete();

        return redirect(route('asset.index'))->with('success', 'Product Deleted Successfully');
    }
}
