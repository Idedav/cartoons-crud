<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cartoon;
use App\Http\Requests\CartoonRequest;

class CartoonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartoons = Cartoon::orderBy("id", "desc")->paginate(10);
        return view("cartoons.index", compact("cartoons"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("cartoons.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CartoonRequest $request)
    {
        $form_data = $request->all();

        $new_cartoon = new Cartoon();
        $form_data['slug'] = Cartoon::generateSlug($form_data['title']);
        $new_cartoon->fill($form_data);
        $new_cartoon->save();

        return redirect()->route("cartoons.show", $new_cartoon);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cartoon $cartoon)
    {
        return view("cartoons.show", compact("cartoon"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cartoon $cartoon)
    {
        return view("cartoons.edit", compact("cartoon"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CartoonRequest $request, Cartoon $cartoon)
    {
        $form_data = $request->all();
        if ($cartoon->title == $form_data['title']) {
            $form_data['slug'] = $cartoon->slug;
        } else {
            $form_data['slug'] = Cartoon::generateSlug($form_data['title']);
        }
        $cartoon->update($form_data);
        return redirect()->route("cartoons.show", $cartoon);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cartoon $cartoon)
    {
        $cartoon->delete();
        return redirect()->route("cartoons.index");
    }
}
