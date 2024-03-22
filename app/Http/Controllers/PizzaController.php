<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Menu;
use App\Models\Menup;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //  public static function getdata(){
    //     return [
    //         ['id' =>1, 'naam' => 'hussein']
            
    //     ];
    //  }
    public function index()
    {
        
    $pageTitle = "Menu toevoegen";
    $menus = Menup::all();
    return view('menu', compact('pageTitle', 'menus'));
    }

    public function aanpassen(){
        $pageTitle = "Menu  Aanpassen";
        $menus = Menup::all();
        return view('aanpasenver', compact('pageTitle', 'menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return(view('toevoegen'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $menu = new Menup;
        $menu->naam =  $request->input( 'naamitem' );
        $menu->prijs = $request->input( 'prijs' );
        // $menu->foto = $request->input( 'afbeelding' );
        $menu->save();
        
        return redirect('/dash');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    $pageTitle = "Menu Aanpassen";
    return view('aanpassen', [
        'item' => Menup::findOrFail($id),
        'pageTitle' => $pageTitle
    ]);
}

    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = Menup::findOrFail($id);
        $update->naam = $request->input('naamitem');
        $update->prijs = $request->input('prijs');
        $update->save();
        
        return redirect('/up-date');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Menup::findOrFail($id);
        $delete->delete();

        return redirect('/up-date');
    }
}
