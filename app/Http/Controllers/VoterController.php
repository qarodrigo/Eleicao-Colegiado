<?php

namespace App\Http\Controllers;

use App\Voter;
use App\Candidate;
use Illuminate\Http\Request;

class VoterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('voting.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        
        if($request->name == null || $request->email == null){
            return redirect()->route('form')->with('error', "Verifique se você preencheu todos os campos!");
        }else{
        
            $verification = $request->email;
            $email = Voter::where('email', '=', $verification)->first();
            if($email){
                $candidates = Candidate::all();
                return view('voting.poll', ['email' => $verification], ['candidates' => $candidates]);
            }else{
                return redirect()->route('form')->with('error', "A sua matricula não está cadastrada.");
            }

        }

        // if($verification == $registration->registration)
        //     return redirect()->route('eleicao.create')->with('error', "Você ja votou");
        // else
        //     return view('voting.voting');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function show(Voter $voter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function edit(Voter $voter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voter $voter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voter $voter)
    {
        //
    }
}
