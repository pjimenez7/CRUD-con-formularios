<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
   

    

    public function rules()
    {
        return [
            'NombreArticulo' => [
                'required',
                'min:2',
                'string'
            ] ,
            'Seccion' => [
                'required',
                
            ] ,
            'Precio' => [
                'required',
                
            ] ,
            'Fecha' => [
                'required',
                'date'
                
            ] ,
            'PaisOrigen' => [
                'required',
                
            ] 
        ];
    }
}
