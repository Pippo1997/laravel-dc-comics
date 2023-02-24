<?php

namespace App\Http\Controllers;

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
        
        // recupero array icone
        $icone = config('IconSocial.icone');
        // recupero array social
        $social = config('IconSocial.social');

        return view('comics.index', compact('comics', 'icone', 'social'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // recupero array icone
        $icone = config('IconSocial.icone');
        // recupero array social
        $social = config('IconSocial.social');

        return view('comics.create', compact( 'icone', 'social'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = $request->all();
        $newComic = new Comic();
        // $newComic->title = $form['title'];
        // $newComic->description = $form['description'];
        // $newComic->thumb = $form['thumb'];
        // $newComic->price = $form['price'];
        // $newComic->series = $form['series'];
        // $newComic->series = $form['sale_date'];
        // $newComic->series = $form['type'];
        $newComic->fill($form);
        $newComic->save();
        
        return redirect()->route('comics.show',['comic' => $newComic-> id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics = Comic::find($id);
        if($comics){
            $single=[
                'single'=> $comics
            ];
        }

        // recupero array icone
        $icone = config('IconSocial.icone');
        // recupero array social
        $social = config('IconSocial.social');

        return view('comics.show', $single, compact('icone', 'social'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
