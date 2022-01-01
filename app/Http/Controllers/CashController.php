<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CashController extends Controller
{
    public function store()
    {
        request()->validate([
            'name' => 'required',
            'amount' => 'required|numeric',
        ]);

        $slug = request('name') . '-' . Str::random(6);
        $when = request('when') ?? now();

        Auth::user()->cashes()->create([
            'name' => request('name'),
            'slug' => Str::slug($slug),
            'description' => request('description'),
            'amount' => request('amount'),
            'when' => $when
        ]);

        return response()->json([
            'message' => 'Transaksi berhasil disimpan.'
        ]);
    }
}
