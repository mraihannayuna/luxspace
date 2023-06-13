<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request()->ajax()) {

            $query = User::query();

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                return
                '
                <a href="' . route('dashboard.user.edit', $item->id) .'" class="bg-blue-500 hover:bg-blue-700 text-white font-bol py-2 px-4 row rounded shadow-lg">Edit</a>
                <form class="inline-block" method="POST" action="' . route('dashboard.user.destroy', $item->id) . '">' . method_field('delete') . csrf_field() . ' <button class="bg-red-500 hover:bg-red-700 text-white font-bold mx-3 py-1.5 px-3 rounded shadow-lg type="submit">DELETE</button>
                </form>';
                })
            ->rawColumns(['action'])
            ->make();
        }
        return view('page.dashboard.user.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('page.dashboard.user.edit' , compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        $data = $request->all();

        $user->update($data);

        return redirect()->route('dashboard.user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
