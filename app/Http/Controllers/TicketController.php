<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Models\TicketCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
        $rules = [
        'category_id' => 'required',
        'date' => 'required|date',
        'title' => 'required',
        'description' => 'required',
        'status' => 'required',
        ];

        $messages = [
            'category_id.required' => 'Please select a category.',
            'date.required' => 'Please select a date.',
            'date.date' => 'Date must be a valid date format.',
            'title.required' => 'Please enter a title.',
            'description.required' => 'Please enter a description.',
            'status.required' => 'Please select a status.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json(['status' => 303, 'message' => $validator->errors()->first()]);
        }

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

        $rules = [
        'category_id' => 'required',
        'date' => 'required|date',
        'title' => 'required',
        'description' => 'required',
        'status' => 'required|in:1,2,3', // Assuming status can only be 1, 2, or 3
        ];

        $messages = [
        'category_id.required' => 'Please select a category.',
        'date.required' => 'Please select a date.',
        'date.date' => 'Invalid date format.',
        'title.required' => 'Please provide a title.',
        'description.required' => 'Please provide a description.',
        'status.required' => 'Please select a status.',
        'status.in' => 'Invalid status value.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
        return response()->json(['status' => 303, 'message' => $validator->errors()->first()]);
        }

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
