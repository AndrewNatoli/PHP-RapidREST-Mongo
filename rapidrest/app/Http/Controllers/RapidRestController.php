<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RapidRestController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
  }

  public function index ($collection)
  {
    return DB::collection($collection)->get();
  }

  public function show ($collection, $id)
  {
    return DB::collection($collection)->where('_id', '=', $id)->get();
  }

  public function store ($collection, Request $request)
  {
    $ok = DB::collection($collection)
      ->insert($request->json()->all());
    return ['ok' => $ok];
  }

  public function update ($collection, $id, Request $request)
  {
    $ok = DB::collection($collection)->where('_id', '=', $id)->update($request->json()->all());
    return ['ok' => 1];
  }

  public function delete ($collection, $id)
  {
    $ok = DB::collection($collection)->where('_id', '=', $id)->delete();
    return ['ok' => $ok];
  }

}
