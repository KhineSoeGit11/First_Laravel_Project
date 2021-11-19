<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;

class DailyReportController extends Controller
{
    public function index(){
        $reports=Report::latest()->paginate(3);
        return view('admin-panel.DailyReport',compact('reports'));
    }
    public function delete($id){
        Report::find($id)->delete();
        return redirect('/daily_reports')->with('successMsg','Successfully Deleted!');
    }
    public function search(Request $request){
        //$reports=Report::all();
        $searchData=$request->search_data;
        $reports=Report::where('title','like','%'.$searchData.'%')
        ->orWhere('description','like','%'.$searchData.'%')
        ->paginate(3);
        return view('admin-panel.DailyReport',compact('reports'));
    }
}
