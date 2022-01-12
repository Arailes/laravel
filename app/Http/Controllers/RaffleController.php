<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Models\Raffle;
use App\Traits\FileManager;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Type\Integer;

class RaffleController extends Controller
{

    use FileManager;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.raffles.raffle-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        $dataForm = $request->all();
        $raffle = Raffle::create($dataForm);
        return view('app.raffles.raffle-create-page-2',compact('raffle'));
      
        
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
        //
    }

    public function storeImages(Request $request, $raffleId){
        $files = $request->file();
        $raffle = Raffle::find($raffleId);
        $path =  '/raffles/images/'.$raffle->id;
        $this->createFiles( $files, $raffle->hash_file, $path );
        return redirect()->route('rifas.my');
    
    }

    public function myRaffles(){
        $userId = Auth::user()->id;
        $raffles = Raffle::where('owner_id',$userId)->get();
        return view('app.raffles.my-raffles',compact('raffles'));
    }
}
