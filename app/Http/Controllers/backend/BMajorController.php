<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Major;
use Illuminate\Http\Request;

class BMajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            $majors = Major::all();
            return view('backend.setting.major.index')->with('majors',$majors);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        {
            return view('backend.setting.major.create');
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $validated = $request->validate([
            'major_type' => 'required|unique:majors,major_type|max:50',
            'description' => 'required',
        ],[
            'major_type.required' => 'សូមបញ្ចូលប្រភេទ Major',
            'description' => 'សូមបញ្ចូលប្រភេទ Description '

        ]);
        $input = $request -> all();
        Major::create($input,$validated,);
        return redirect('/major') -> with('flash_message','Your Major Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $majors = Major::find($id);
        return view('backend.setting.major.edit')->with('majors',$majors);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'major_type' => 'required|unique:majors,major_type,'.$id.'|max:50',
            'description' => 'required',
        ], [
            'major_type.required' => 'សូមបញ្ចូលប្រភេទ Major',
            'description.required' => 'សូមបញ្ចូលប្រភេទ Description'
        ]);

        $majors = Major::findOrFail($id);
        $majors->update($validated);

        return redirect('/major')->with('info', 'Your Major Updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $major = Major::findOrFail($id);
        $major->delete();

        return redirect('/major')->with('danger', 'Your Major has been deleted!');
    }


}
