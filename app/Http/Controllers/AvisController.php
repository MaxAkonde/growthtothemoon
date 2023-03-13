<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use App\Http\Requests\StoreAvisRequest;
use App\Http\Requests\UpdateAvisRequest;

class AvisController extends Controller
{
    private $active;

    public function __construct()
    {
        $this->middleware('auth');
        $this->active = "avis";
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avis = Avis::latest()->paginate(10);
        return view('admin.avis.index', [
            'avis' => $avis,
            'active' => $this->active,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.avis.create', [
            'active' => $this->active,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAvisRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAvisRequest $request)
    {
        $avis = new Avis();
        $avis->name = $request->name;
        $avis->description = $request->description;

        $avis->save();

        return redirect()->route('avis.index')->with('status', $request->name . ' a été enregistrer avec succes !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Avis  $avis
     * @return \Illuminate\Http\Response
     */
    public function show(Avis $avis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Avis  $avis
     * @return \Illuminate\Http\Response
     */
    public function edit(Avis $avi)
    {
        return view('admin.avis.edit', [
            'avi' => $avi,
            'active' => $this->active
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAvisRequest  $request
     * @param  \App\Models\Avis  $avis
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAvisRequest $request, Avis $avi)
    {
        $avi->name = $request->name;
        $avi->description = $request->description;

        $avi->save();

        return redirect()->route('avis.index')->with('status', $request->name . ' a été modifier avec success !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avis  $avis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avis $avi)
    {
        $name = $avi->name;

        $avi->delete();

        return redirect()->route('avis.index')->with('status', "L'avis " . $name . " vient d'être supprimer !");
    }
}
