<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repo;

class Repo15Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Repo::all();
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $request->validate([
        'nome' => 'required|max:255|min:4',
        'eta' => 'required|numeric|min:2',
        'description' => 'required|min:5|max:200'
        ]);
        //validiamo
        // if(empty($data['nome'])||empty($data['eta'])){
        //     return back()->withInput();
        // }
        $repoNew = new Repo;
        // $repoNew->nome = $data['nome'];
        // $repoNew->eta = $data['eta'];
        // $repoNew->description = $data['description'];
        $repoNew->fill($data);
        $saved = $repoNew->save();
        if($saved) {
            return redirect()->route('repos.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    // public function show($id)
    // {
    //     $repo = Repos::find($id);
    //     return view('show', compact('repo'));
    // }

    public function show(Repo $repo)
    {
        return view('show', compact('repo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Repo $repo)
    {
        return view('create', compact('repo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Repo $repo)
    {
        $data = $request->all();
        $repo->update($data);

        return view('show', compact('repo'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Repo $repo)
    {
        $repo->delete();
        return redirect()->route('repos.index');
    }
}
