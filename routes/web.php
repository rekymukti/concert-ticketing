Route::get('/book-ticket', [TicketBookingController::class, 'showForm']);
Route::post('/book-ticket', [TicketBookingController::class, 'store']);
