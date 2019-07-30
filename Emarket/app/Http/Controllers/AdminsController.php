<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prodbio;
use App\Catbio;
class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catbio = Catbio::all();
        $prodbio = Prodbio::all();
        return view('/admin.index',compact('prodbio','catbio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Catbio::all();
        return view('/admin.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $categorie = request(['nomcat']);
        Catbio::create($categorie);
        return redirect('admin/create')->with('confirm','Nouvelle catégorie ajouté !');

    }


    public function recep() {
        return request(['nomcat']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Prodbio::find($id);

        $categories = Catbio::all();
        return view('/admin.editprodbio', compact('edit','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    // public function update(Request $request, $id)
    // {
    //     $produit = Prodbio::find($id);
    //     $produit->update($this->recep()); 

    //     return redirect('/admin')->with('confirm','Mise à jour ok !');
    // }



    public function update(Request $request, $id)
    {
        $categorie = Catbio::find($id);
        $categorie->update($this->recep()); 

        return redirect('/admin')->with('confirm','Mise à jour ok !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        $produit = Prodbio::find($id);

        $produit->delete();
        return back();
    }
    
    
}
