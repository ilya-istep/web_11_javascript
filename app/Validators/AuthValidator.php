<?php
    namespace App\Validators;
    use Illuminate\Support\Facades\Validator;

    class AuthValidator{

        static function loginValidator($request)
        { 
            return Validator::make($request->all(), [
                                                'email' => 'required|email:rfc,dns',
                                                'password' => 'required|min:3',
                                            ]);
        }                               

    }
?>