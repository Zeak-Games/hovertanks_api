<?php

namespace App\Http\Controllers;

use App\Models\GameVersion;
use Illuminate\Http\Request;

class GameVersionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $versions = GameVersion::latest()->paginate();
        return $versions;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newVersion = GameVersion::create($request->all());
        return response()->json($newVersion, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GameVersion  $gameVersion
     * @return \Illuminate\Http\Response
     */
    public function show(GameVersion $gameVersion)
    {
        return $gameVersion;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GameVersion  $gameVersion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GameVersion $gameVersion)
    {
        $gameVersion->update($request->all());
        return $gameVersion;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GameVersion  $gameVersion
     * @return \Illuminate\Http\Response
     */
    public function destroy(GameVersion $gameVersion)
    {
        $gameVersion->delete();
        return response()->json(null, 204);
    }
}
