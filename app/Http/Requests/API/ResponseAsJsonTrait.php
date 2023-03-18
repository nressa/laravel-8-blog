<?php
namespace App\Http\Requests\API;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

trait ResponseAsJsonTrait
{
    /**
     * catch validation failed.
     *
     * @param Validator $validator
     * 
     * @throws HttpResponseException
     * @return void
     */
    protected function failedValidation(Validator $validator) 
    {
        throw new HttpResponseException(response()->json([
            'errors'        => $validator->errors(), 
            'error_code'    => 'UNPROCCESSABLE_ENTITY'
        ], 422));
    }
}