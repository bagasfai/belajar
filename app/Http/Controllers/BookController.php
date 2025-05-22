<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BookController extends Controller
{
    public function index()
    {
        return view('books.index');
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|min:3',
            'pengarang' => 'required|min:3',
            'status' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
        ]);

        try {
            DB::transaction(function () use ($validated) {
                Book::create($validated);
            });

            return redirect()->route('book.index');
        } catch (\Exception $e) {
            Log::error('Error creating books: ' . $e->getMessage());
            return back()->withInput()->with('error', 'errorMessageText');
        }
    }
}
