<?php

namespace App\Http\Controllers;

use App\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Html\HtmlFacade;


class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evenement = Evenement::all();

        return View::make("index") -> with("evenement", $evenement);


    }

    public function create() {
        return View::make("create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array (
            "name" => "required",
            "beginDatum" => "required|date",
            "eindDatum" => "required|date",
            "klantId" => "required|numeric",
            "prijs" => "required|numeric"
        );

        $validator = Validator::make(Input::all(),$rules);

        if ($validator->fails()) {
            return redirect::to("create")
                ->withErrors($validator)
                ->withInput(Input::except("password"));
        } else {
            $evenement = new Evenement;
            $evenement->naam = Input::get("naam");
            $evenement->beginDatum = Input::get("beginDatum");
            $evenement->eindDatum = Input::get("eindDatum");
            $evenement->klantId = Input::get("klantId");
            $evenement->prijs = Input::get("prijs");
            $evenement.save();

            Session::flash("message", "Successfully created evenement");
            return Redirect::to("evenement");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evenement = Evenement::find($id);

            return View::make("show") ->with("evenement", $evenement);
    }

    public function edit($id) {
        $evenement = Evenement::find($id);

        return View::make("edit")->with("evenement", $evenement);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
