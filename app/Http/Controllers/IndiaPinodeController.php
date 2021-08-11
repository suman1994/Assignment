<?php
 
namespace App\Http\Controllers;
 
use App\Models\IndiaPinode;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class IndiaPinodeController extends Controller{
  public function index(){
      $res  = IndiaPinode::paginate(15);
      return response()->json($res);
   }
}
?>