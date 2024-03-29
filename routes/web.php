<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketCategoryController;



Route::get('/', [HomeController::class, 'home'])->name('home');

//Ticket Crud
Route::get('/tickets', [TicketController::class, 'ticketIndex'])->name('ticketIndex');
Route::post('/tickets', [TicketController::class, 'ticketStore']);
Route::get('/tickets/{id}/edit', [TicketController::class, 'ticketEdit']);
Route::post('/tickets/update', [TicketController::class, 'ticketUpdate']);
Route::get('/tickets/{id}', [TicketController::class, 'ticketDelete']);

//Ticket Category Crud
Route::get('/ticket-categories', [TicketCategoryController::class, 'ticketCategoryIndex'])->name('ticketCategoryIndex');
Route::post('/ticket-categories', [TicketCategoryController::class, 'ticketCategoryStore']);
Route::get('/ticket-categories/{id}/edit', [TicketCategoryController::class, 'ticketCategoryEdit']);
Route::post('/ticket-categories/update', [TicketCategoryController::class, 'ticketCategoryUpdate']);
Route::get('/ticket-categories/{id}', [TicketCategoryController::class, 'ticketCategoryDelete']);

