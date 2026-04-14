<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Http\Request;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio');

Route::post('/contact', function (Request $request) {
    $key = 'contact:'.$request->ip();

    // Rate limit: 1 attempt per 10 minutes
    if (RateLimiter::tooManyAttempts($key, 1)) {
        $seconds = RateLimiter::availableIn($key);
        $minutes = ceil($seconds / 60);

        return back()->with('error', "Demasiados intentos. Espera {$minutes} minuto(s) antes de enviar otro mensaje.");
    }

    RateLimiter::hit($key, 600); // 10 minutes in seconds

    // Validate
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|min:10|max:1000',
    ]);

    // Send email
    try {
        \Illuminate\Support\Facades\Mail::html($validated['message'], function ($mail) use ($validated) {
            $mail->to('kevinabelvenegasbermudez@gmail.com')
                ->subject("Nuevo mensaje de contacto de {$validated['name']}")
                ->replyTo($validated['email'], $validated['name']);
        });
    } catch (\Exception $e) {
        \Illuminate\Support\Facades\Log::error('Contact form mail error: '.$e->getMessage());
        RateLimiter::clear($key);
        return back()->with('error', 'Error al enviar el mensaje. Intenta nuevamente.');
    }

    return back()->with('success', true);
})->name('contact.send');
