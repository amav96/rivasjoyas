<?php

namespace App\Http\Controllers\Quote;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Quote;
use Validator;

class QuoteController extends Controller
{
    public function Quote(Request $request){

        $rules = [
            'name' => ['required','string'],
            'email' => ['required','email'],
            'phone_number' => ['required','integer']
        ];
       
        $messages = [
            'name.required' => 'Debes ingresar tu nombre',
            'name.string' => 'El nombre solo debe contener letras',
            'email.required' => 'Debes ingresar un email',
            'email.email' => 'El formato de email es incorrecto',
            'phone_number.required' => 'Debes ingresar un número de telefono',
            'phone_number.integer' => 'El número de telefono debe ser solo números'
        ];

        $validator =  Validator::make($request->all(),$rules,$messages);

        if($validator->fails()):
            
            $response = $validator->messages();

        else:
            $quote = new Quote;
            $quote->name = $request->input('name');
            $quote->email = $request->input('email');
            $quote->phone_number = $request->input('phone_number');
            $quote->comment = $request->input('comment');

            if($quote->save()){

                $response = [
                    'success' => 'Cotización enviada correctamente'
                  ];

            }
            

        endif;

        return response()->json([

            $response
        ]);


    }
}
