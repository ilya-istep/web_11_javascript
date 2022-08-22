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
                                                        'name.required' => 'Поле "Название" обязательное для заполнения',
                                                        'name.max' => 'Превышена максимальная длина поля "названия". Она должна быть не больше 150 символов включая пробелы и спец символы',
                                                        'name.min' => 'Минимальная длина названия 2 символа',
                                                        'description.max' => 'Максимальная длина описания 255 символов'
                                                    ]);
        }


        static function deleteValidator($request){
            return Validator::make($request->all(), [
                                                        'id_category' => 'required'
                                                    ],
                                                    [
                                                        'id_category.required' => 'Ошибка',
                                                    ]);
        }

    }
?>