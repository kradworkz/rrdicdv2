<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use Illuminate\Http\Request;
use App\Services\StoreImage;
use App\Http\Resources\DefaultResource;

class InstitutionController extends Controller
{
    public function index(){
        return view('user_admin.institution');
    }

    public function store(StoreImage $strmg, Request $request)
    {
        $data = ($request->input('editable')) ? Institution::findOrFail($request->input('id')) : new Institution;
        $data->name  = ucwords(strtolower($request->input('name')));
        $data->acronym =($request->acronym == '') ? 'n/a' : strtoupper($request->input('acronym'));
        if($data->save()){
            $name = strtolower($request->input('acronym')).'-'.$data->id;
            if($request->input('avatar') != ''){
                $imageName = $strmg->strmg($request->input('avatar'),$name);
            }else{
                ($request->input('editable')) ? $imageName = $data->avatar : $imageName = 'school.jpg';
            }
            $data->avatar = $imageName;
            $data->save();
        }
        return new DefaultResource($data);
    }

    public function list($keyword)
    {
        ($keyword == '-') ? $keyword = '' : $keyword;
        $data = Institution::where('name','LIKE','%'.$keyword.'%')->orderBy('created_at','DESC')->paginate(10);
        return DefaultResource::collection($data);
    }

    public function lists()
    {
        $data =  Institution::get();
        return DefaultResource::collection($data);
    }
}
