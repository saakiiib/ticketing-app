<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Models\TicketCategory;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function ticketIndex()
    {
        $tickets = Ticket::orderby('id','DESC')->get();
        $categories = TicketCategory::orderby('id','DESC')->get();
        return view('tickets.index', compact('tickets','categories'));
    }

    public function ticketStore(Request $request)
    {
        $newTicket = new Ticket;
        $newTicket->category_id = $request->category_id; 
        $newTicket->date = $request->date;
        $newTicket->title = $request->title;
        $newTicket->description = $request->description;
        $newTicket->status = $request->status;

        if ($newTicket->save()) {
            $message = "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Data Created Successfully.</b></div>";
            return response()->json(['status' => 300, 'message' => $message]);
        }else{
            return response()->json(['status'=> 303,'message'=>'Server Error!!']);
        }
    }

    public function ticketEdit($id)
    {
        $where = [
            'id'=>$id
        ];
        $info = Ticket::where($where)->get()->first();
        return response()->json($info);
    }

    public function ticketUpdate(Request $request)
    {
        $newTicket = Ticket::find($request->codeid);
        $newTicket->category_id = $request->category_id; 
        $newTicket->date = $request->date;
        $newTicket->title = $request->title;
        $newTicket->description = $request->description;
        $newTicket->status = $request->status;
        if ($newTicket->save()) {
            $message ="<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Data Updated Successfully.</b></div>";
            return response()->json(['status'=> 300,'message'=>$message]);
        }
        else{
            return response()->json(['status'=> 303,'message'=>'Server Error!!']);
        } 

    }

    public function ticketDelete($id)
    {
        if(Ticket::destroy($id)){
            return response()->json(['success'=>true,'message'=>'Data has been deleted successfully']);
        }else{
            return response()->json(['success'=>false,'message'=>'Delete Failed']);
        }
    }
}
