<?php

namespace App\Http\Controllers;

use App\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EvenementController extends Controller
{
    public function __construct()
    {
        //$this->>middleware("name");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evenement = DB::table('evenement')->get();

        foreach ($evenement as $row) {
            echo "<p>$row->naam</p>";
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evenement = new Evenement();
        $evenement->id = $request->id;
        $evenement->naam = $request->naam;
        $evenement->beginDatum = $request->beginDatum;
        $evenement->eindDatum = $request->eindDatum;
        $evenement->klantId = $request->klantId;
        $evenement->prijs = $request->prijs;
        $evenement->save();

        return "<p>$evenement->naam</p>";

        //return response()->json(['id' => '3', 'naam' => 'Coyote Ugly', 'beginDatum' => '2017-06-01', 'eindDatum' => '2017-06-02',
            //'klantId' => '1', 'prijs' => '100']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evenement = DB::table('evenement')->where('id', $id)->first();

        return "<h1>$evenement->naam</h1>";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return "It Works";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('evenement')->where('id', $id)->delete();
        return "";
    }
}
