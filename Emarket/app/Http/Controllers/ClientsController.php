<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prodbio;
use App\Catbio;
use Intervention\Image\Facades\Image;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function accueil()
    {
        $catbio = Catbio::all();

        $prodbio = Prodbio::all();
        return view('/welcome',compact('prodbio','catbio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = request('img')->store('upload', 'public');
        $nomprod = request('nomprod');
        $catid = request('cat_id');
        $detail = request('detail');
        
        $produit = new Prodbio();

        $produit -> nomprod=$nomprod;
        $produit -> cat_id=$catid;
        $produit -> img=$img;
        $produit -> detail=$detail;

        $produit -> save();

    
        return redirect('admin')->with('confirm','Nouveau produit ajouté !');
    }


    public function search(Request $request){

        
        $search = $request->get('search');
        $search = Prodbio::where('nomprod','like','%'.$search.'%')->paginate(20);
         //dd($search);
        return view('/client.search',['prodbio'=>$search]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showcat($id)
    {
        
        $catbio = Prodbio::where('cat_id', $id)->get();
        return view('/client.cat',['catbio'=>$catbio]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Catbio::find($id);
        return view('/admin.editcatbio', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function recep() {
        return request(['nomprod','nomcat','detail','img']);
    }

    public function update(Request $request, $id)
    {
        $produit = Prodbio::find($id);
        $produit->update($this->recep()); 

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
        $categorie = Catbio::find($id);

        $categorie->delete();
        return back();
}
public function contact(){
    return view('/client.contact');
}
}
