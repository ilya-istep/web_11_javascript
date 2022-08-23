<?php
    namespace App\Validators;
    use Illuminate\Support\Facades\Validator;

    class CategoryValidator{

        static function addcategoryValidator($request){
            return Validator::make($request->all(), [
                                                        'name' => 'required|max:150|min:2',
                                                        'description' => 'max:255',
                                                    ],
                                                    [
                                                        'name.required' => 'Поле "Название" обязательно для заполнения',
                                                        'name.max' => 'Длина поля "Название" должна составлять не более 150 символов, включая пробелы и спец. знаки',
                                                        'name.min' => 'Минимальная длина поля "Название" 2 символа',
                                                        'description.max' => 'Максимальная длина описания 255 символов',
                                                    ]);
        }

    }
?>