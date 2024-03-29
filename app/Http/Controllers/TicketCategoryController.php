<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketCategory;
use Illuminate\Support\Facades\Auth;

class TicketCategoryController extends Controller
{
    public function ticketCategoryIndex()
    {
        $ticketCategories = TicketCategory::orderby('id','DESC')->get();
        return view('ticketCategories.index', compact('ticketCategories'));
    }

    public function ticketCategoryStore(Request $request)
    {
        $newCategory = new TicketCategory;
        $newCategory->name = $request->name;
        $newCategory->description = $request->description;
        // $newCategory->created_by = Auth::id();
        
        if ($newCategory->save()) {
            $message ="<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Data Created Successfully.</b></div>";
            return response()->json(['status'=> 300,'message'=>$message]);
        }else{
            return response()->json(['status'=> 303,'message'=>'Server Error!!']);
        }
    }

    public function ticketCategoryEdit($id)
    {
        $where = [
            'id'=>$id
        ];
        $info = TicketCategory::where($where)->get()->first();
        return response()->json($info);
    }

    public function ticketCategoryUpdate(Request $request)
    {
        $newCategory = TicketCategory::find($request->codeid);
        $newCategory->name = $request->name;
        $newCategory->description = $request->description;
        // $newCategory->updated_by = Auth::id();

        if ($newCategory->save()) {
            $message ="<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Data updated Successfully.</b></div>";
            return response()->json(['status'=> 300,'message'=>$message]);
        }else{
            return response()->json(['status'=> 303,'message'=>'Server Error!!']);
        }
    }

    public function ticketCategoryDelete($id)
    {
        if(TicketCategory::destroy($id)){
            return response()->json(['success'=>true,'message'=>'Data has been deleted successfully']);
        }else{
            return response()->json(['success'=>false,'message'=>'Delete Failed']);
        }
    }
}
