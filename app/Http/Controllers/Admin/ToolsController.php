<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fields;
use App\Models\Tools;
use Illuminate\Http\Request;
use function view;

class ToolsController extends Controller
{
    public function index(){
        $list = Tools::all();
        return view('admin.tools', compact('list'));
    }


    /*public function toolInfo(){
        $listTool = Tools::all();
        return view('front.tool-info', compact('listTool'));
    }


    public function tool(){
        $list = Fields::where('status', '1')->get();
        $listTool = Tools::all();
        return view('front.tool', compact('list', 'listTool'));
    }*/

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
