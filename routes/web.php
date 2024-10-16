<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('welcome');
});

// Serve: php -S localhost:8000 -t public

Route::get('/transactions', [TransactionController::class, 'getAllTransactions'])->name('getAllTransactions');

Route::get('/transactions/create', [TransactionController::class, 'createTransaction'])->name('createTransaction');

Route::post('/transactions/store', [TransactionController::class, 'storeTransaction'])->name('storeTransaction');

Route::get('/transactions/{id}', [TransactionController::class, 'viewTransaction'])->name('viewTransaction');

Route::get('/transactions/{id}/edit', [TransactionController::class, 'editTransaction'])->name('editTransaction');

Route::put('/transactions/{id}/update', [TransactionController::class, 'updateTransaction'])->name('updateTransaction');

Route::delete('/transactions/{id}/delete', [TransactionController::class, 'deleteTransaction'])->name('deleteTransaction');