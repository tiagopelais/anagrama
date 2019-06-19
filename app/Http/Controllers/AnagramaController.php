<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnagramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $letter = preg_split("//", $request->input('anagrama'), -1, PREG_SPLIT_NO_EMPTY);        
        $current_set = array('');
        
        for ($i = 0; $i <sizeof($letter); $i++) {
            $tmp_set = array();
            foreach ($current_set as $curr_elem){
                foreach ($letter as $new_elem) {
                    //if(substr($curr_elem,-1) != $new_elem){
                        $pos = strpos($curr_elem,$new_elem);
                        if($pos == true){
                            //Just continue                            
                        }else{
                            if(substr($curr_elem,-1) != $new_elem){                                
                            $tmp_set[] = $curr_elem . $new_elem;                            
                        }
                    }
                }
            }
            $current_set = $tmp_set;
        }        
        return view('return', ['current_set'=> $current_set]);       
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
        //
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
}
