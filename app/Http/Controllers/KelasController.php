<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
    $kelass = Kelas::all();

    return response()->json([
      'success' => true,
      'message' => 'grabbed all kelas',
      'kelas' => $kelass
    ], 200);
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
   * @param  \App\Models\Kelas  $kelas
   * @return \Illuminate\Http\Response
   */
  public function show(Kelas $kelas)
  {
    return response()->json([
      'success' => true,
      'message' => 'Grabbed kelas by id',
      'kelas' => $kelas->kelas,
    ], 200);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Kelas  $kelas
   * @return \Illuminate\Http\Response
   */
  public function edit(Kelas $kelas)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Kelas  $kelas
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Kelas $kelas)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Kelas  $kelas
   * @return \Illuminate\Http\Response
   */
  public function destroy(Kelas $kelas)
  {
    //
  }
}
