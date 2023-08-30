<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\Response;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return response()->view('form');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return view('form.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // get all the request data
        $resultat = $request->input('nom') . ' ' . $request->input('prenom');
        $request->session()->put('resultat', $resultat);
        return redirect()->route('resultat');
    }

    public function resultat(): View
    {
        $resultat = session('resultat');
        return view('resultat', ['resultat' => $resultat]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        $data = session()->get('data');
        return view('form.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        $data = session()->get('data');
        return view('form.edit', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $data = session()->get('data');
        $data[$id] = $request->all();
        session()->put('data', $data);
        return redirect()->route('form.show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $data = session()->get('data');
        unset($data[$id]);
        session()->put('data', $data);
        return redirect()->route('form.show');
    }
}
