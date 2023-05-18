<?php

namespace App\Http\Controllers\Generic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title'=>'required|max:80',
            'description'=>'required|max:65535',
            'thumb'=>'required|url',
            'price'=>'required|max:4',
            'series'=>'required|max:80',
            'sale_date'=>'required|max:12',
            'type'=>'required|max:255',
        ],[
            'title.required'=>'Il campo Title non può essere vuoto',
            'description.required'=>'Il campo Description non può essere vuoto',
            'thumb.required'=>'Il campo Thumbnail non può essere vuoto',
            'thumb.url'=>'Il campo non contiene un URL valido',
            'price.required'=>'Il campo Price non può essere vuoto',
            'series.required'=>'Il campo Serie non può essere vuoto',
            'sale_date.required'=>'Il campo Sale Date non può essere vuoto',
            'type.required'=>'Il campo Type non può essere vuoto',

            'title.max'=>'Il campo Title non può essere superiore a 80 caratteri',
            'description.max'=>'Il campo Description non può essere  superiore a 65535 caratteri',
            'price.max'=>'Il campo Price non può essere superiore a 4 caratteri',
            'series.max'=>'Il campo Serie non può essere superiore a 80 caratteri',
            'sale_date.max'=>'Il campo Sale Date non può essere superiore a 12 caratteri',
            'type.max'=>'Il campo Type non può essere superiore a 80 caratteri'
        ]);

        $data = $request->all();

        $newComic = new Comic();
        $newComic->title=$data['title'];
        $newComic->description=$data['description'];
        $newComic->thumb=$data['thumb'];
        $newComic->price = $data['price'];
        $newComic->series=$data['series'];
        $newComic->sale_date=$data['sale_date'];
        $newComic->type=$data['type'];
        $newComic->save();

        return redirect()->route('comics.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // $currentComic = Comic::find($id);
        // return view('comics.show', compact('currentComic'));

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $currentComic = Comic::findOrFail($id);

        return view('comics.edit', ['comic' => $currentComic]);
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

        $request->validate([
            'title'=>'required|max:80',
            'description'=>'required|max:65535',
            'thumb'=>'required|url',
            'price'=>'required|max:4',
            'series'=>'required|max:80',
            'sale_date'=>'required|max:12',
            'type'=>'required|max:80'
        ],[
            'title.required'=>'Il campo Title non può essere vuoto',
            'description.required'=>'Il campo Description non può essere vuoto',
            'thumb.required'=>'Il campo Thumbnail non può essere vuoto',
            'thumb.url'=>'Il campo non contiene un URL valido',
            'price.required'=>'Il campo Price non può essere vuoto',
            'series.required'=>'Il campo Serie non può essere vuoto',
            'sale_date.required'=>'Il campo Sale Date non può essere vuoto',
            'type.required'=>'Il campo Type non può essere vuoto',

            'title.max'=>'Il campo Title non può essere superiore a 80 caratteri',
            'description.max'=>'Il campo Description non può essere  superiore a 65535 caratteri',
            'price.max'=>'Il campo Price non può essere superiore a 4 caratteri',
            'series.max'=>'Il campo Serie non può essere superiore a 80 caratteri',
            'sale_date.max'=>'Il campo Sale Date non può essere superiore a 12 caratteri',
            'type.max'=>'Il campo Type non può essere superiore a 80 caratteri'
        ]);

        $form_data = $request->all();
        $comic = Comic::findOrFail($id);
        $comic->update($form_data);

        return redirect()->route('comics.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Comic::findOrFail($id);
        $data->delete();

        return redirect()->route('comics.index');
    }
}
