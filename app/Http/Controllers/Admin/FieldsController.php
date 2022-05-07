<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fields;
use App\Models\Tools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function redirect;
use function response;
use function toast;
use function view;

class FieldsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Fields::all();
        $listTool = Tools::all();
        //return view('admin.fields_list', compact('list', 'listTool'));
        return view('admin.fields_list', compact('list', 'listTool'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tool_id = $request->tools;
        $name = $request->name;
        $status = $request->status;
        $user = Auth::user();
        $slug = $request->slug;

        $data = [
            'tool_id' => $tool_id,
            'name' => $name,
            'user_id' => $user->id,
            'status' =>$status ? 1 : 0,
            'slug' =>$slug
        ];
        Fields::create($data);

        toast('Alan eklendi.','success')->autoClose(5000);

        return redirect()->route("fields.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public function edit($id)
    {
        $fields = Fields::find($id);
        return response()->json([
           'fields' => $fields
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fields = Fields::find($id);
        $fields->tool_id = $request-> toolsEdit;
        $fields->name = $request->nameEdit;
        $fields->status = $request->statusEdit;
        $status = $fields->status;
        $fields->slug = $request->slugEdit;

        if($status)
        {
            $status = 1;
            $newStatus = 'Aktif';
        }
        else{
            $status = 0;
            $newStatus = 'Pasif';

        }
        $fields->status=$status;
        $fields->save();
        toast('Başarıyla Güncellendi.','success')->autoClose(5000);
        return redirect()->route('fields.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->fieldId;
        Fields::where('id', $id)->delete();
        return response()->json(['message' => 'Başarılı'], 200);
    }

    public function changeStatus(Request $request){
        $id = $request->fieldId;
        $newStatus = null;
        $findField = Fields::find($id);
        $status = $findField->status;
        if($status)
        {
            $status = 0;
            $newStatus = 'Pasif';
        }
        else{
            $status = 1;
            $newStatus = 'Aktif';
        }
        $findField->status=$status;
        $findField->save();
        return response()->json([
            'newStatus' => $newStatus,
            'fieldId' => $id,
            'status' => $status
        ]);
    }

}
