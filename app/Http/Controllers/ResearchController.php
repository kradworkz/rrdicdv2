<?php

namespace App\Http\Controllers;

use App\Models\File as F;
use App\Models\Research;
use Illuminate\Http\Request;
use App\Http\Resources\DefaultResource;
use App\Http\Resources\ResearchResource;

class ResearchController extends Controller
{
    public function index(){
        return view('user_researcher.researches');
    }

    public function add(){
        return view('user_researcher.research-add');
    }

    public function view(){
        return view('user_researcher.research-view');
    }

    public function research($id){
        $data =  Research::with('user','user.profile')->with('status')->with('iprstatus')->with('classification')
        ->where('id',$id)
        ->first();
        
        return new ResearchResource($data);
    }

    public function lists($keyword){
       

        // ($keyword == '-') ? $keyword = '' : $keyword;
        // $data =  Research::with('status')->with('iprstatus')->with('classification')
        // ->where('title','LIKE', '%'.$keyword.'%')
        // ->where('user_id',$id)
        // ->paginate(10);

        ($keyword == '-') ? $keyword = '' : $keyword;
        $query = Research::query();
        $query->with('status')->with('iprstatus')->with('classification');
        $query->where('title','LIKE', '%'.$keyword.'%');
        (\Auth::user()->type == "Researcher") ? $query->where('user_id',\Auth::user()->id)  : '';
        $data = $query->paginate(10);

        return ResearchResource::collection($data);
    }

    public function store(Request $request){
        \DB::transaction(function () use ($request){
            $data = ($request->input('editable')) ? Research::findOrFail($request->input('id')) : new Research;
            $data->title = $request->input('title');
            $data->content = $request->input('content');
            ($request->input('editable')) ? '' : $data->status_id = 4;
            ($request->input('editable')) ? '' : $data->iprstatus_id = 1;
            ($request->input('editable')) ? '' : $data->classification_id = $request->input('classification') ;
            ($request->input('editable')) ? '' : $data->user_id = \Auth::user()->id;
            $data->save();

            return new DefaultResource($data);
        });
    }
}
