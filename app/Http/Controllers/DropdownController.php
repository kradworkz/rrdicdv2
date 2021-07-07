<?php

namespace App\Http\Controllers;

use App\Models\Dropdown;
use Illuminate\Http\Request;
use App\Http\Resources\DefaultResource;

class DropdownController extends Controller
{
    public function index(){
        return view('user_admin.dropdown');
    }

    public function list($classification,$type,$keyword){
        ($keyword == '-') ? $keyword = '' : $keyword;
        ($type == '-') ? $type = '' : $type;
        $data = Dropdown::where('name','LIKE','%'.$keyword.'%')->where('type','LIKE','%'.$type.'%')->where('classification',$classification)->orderBy('id','DESC')->paginate(5);
        return DefaultResource::collection($data);
    }

    public function lists($classification,$type)
    {
        $query = Dropdown::query();
        ($type != '-') ? $query->where('type',$type) : '';
        $data = $query->where('classification',$classification)->get();

        return DefaultResource::collection($data);
    }

    public function store(Request $request){
        $data = new Dropdown;
        $data->name =  ucwords(strtolower($request->input('name')));
        $data->type = ($request->input('type')) ? $request->input('type') : 'n/a';
        $data->classification = $request->input('selected');
        ($request->input('selected') == 'Status') ? $data->color = $request->input('color') : '';
        $data->save();

        return new DefaultResource($data);
    }

}
