<?php

namespace App\Http\Controllers;

use App\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidates = Candidate::all();
        return view('candidates.index', ['candidates'=> $candidates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('candidates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->name);
        //mudar para email
        //  $verification = $request->email;
        //  $email = Candidate::where('email', '=', $verification)->first();
        //  //dd($email);
        //  if($verification == $email->email){
        //  }else{
           Candidate::Create([
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
            'president_name' => $request->president_name,
            'vice_president_name' => $request->vice_president_name,
                
            ]);

            return redirect()->route('chapas.index');
          //  }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $candidate = Candidate::findOrFail($id);
        // return view('candidate.info', ['candidate' => $candidate]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $candidate = Candidate::findOrFail($id);
        return view('candidates.edit', ['candidates' => $candidate]);
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $candidate = Candidate::findOrFail($id);
        
        $candidate->update([
            'name' => $request->name,
            'email' => $request->email,
            'president_name' => $request->president_name,
            'vice_president_name' => $request->vice_president_name,
            'description' => $request->description,

        ]);

        return redirect()->route('chapas.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $candidate = Candidate::findOrFail($id);
         $candidate->delete();
         return redirect()->route('chapas.index');
    }
    
    public function delete($id)
    {
        
        
    }

}
