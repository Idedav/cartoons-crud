<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cartoon;
<<<<<<< HEAD
use App\Http\Requests\CartoonRequest;
=======
use App\Http\Requests\Cartoonrequest;
>>>>>>> 6d7363966d2f402269186b579631dba990d20d7f

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
<<<<<<< HEAD
        $form_data['slug'] = Cartoon::generateSlug($form_data['title']);
        $new_cartoon->fill($form_data);
=======
        $form_data["slug"] = Cartoon::generateSlug($form_data["title"]);

        $new_cartoon -> fill($form_data);
>>>>>>> 6d7363966d2f402269186b579631dba990d20d7f
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
<<<<<<< HEAD
=======
        $cartoon = Cartoon::find($id);
>>>>>>> 6d7363966d2f402269186b579631dba990d20d7f
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
<<<<<<< HEAD
        $form_data = $request->all();
        if ($cartoon->title == $form_data['title']) {
            $form_data['slug'] = $cartoon->slug;
        } else {
            $form_data['slug'] = Cartoon::generateSlug($form_data['title']);
        }
        $cartoon->update($form_data);
=======
        $form_data = $request->except('_token');

        if($cartoon->title === $form_data["title"]){
            $form_data["slug"] = $cartoon->slug;
        }else{
            $form_data["slug"] = Cartoon::generateSlug($form_data["title"]);
        }

		$cartoon->update($form_data);

>>>>>>> 6d7363966d2f402269186b579631dba990d20d7f
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
<<<<<<< HEAD
        return redirect()->route("cartoons.index");
=======

        return redirect()->route("cartoons.index")->with("deleted", "$cartoon->title è stato eliminato correttamente");
>>>>>>> 6d7363966d2f402269186b579631dba990d20d7f
    }
}
