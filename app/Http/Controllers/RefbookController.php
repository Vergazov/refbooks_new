<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RefbookStoreRequest;
use App\Models\Refbook;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RefbookController extends Controller
{
    public function index(): View|Factory|Application
    {
        $refbooks = Refbook::all();

        return view('index',compact('refbooks'));
    }

    public function create(): View|Factory|Application
    {
        return view('create');
    }

    public function store(RefbookStoreRequest $request): RedirectResponse
    {
        Refbook::create($request->validated());

        return redirect()->route('refbooks.index');
    }
}
