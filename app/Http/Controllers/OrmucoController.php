<?php

namespace App\Http\Controllers;

use App\Globals\CodesResponse;
use App\Globals\Utils;
use App\Ormuco;
use Illuminate\Http\Request;

class OrmucoController extends Controller
{

	public function store( Request $request ) {

		$pet = Ormuco::create($request->all());

		return Utils::responseSuccess( "Todos los usuarios del sistema", CodesResponse::CODE_OK, $pet );

    }
}
