<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {

        return true;
    }

    public function rules()
    {
        $route = Route::current();

        if ($route->getName() == 'register.post') {
            return [
                'name'     => ['required', 'string', 'max:255'],
                //  رو براشون بذاری requiredوقتی در یک اینپوت میخوای هم ایمیل باشه هم شملاره تلفن و هرکدوم وارد شد قبول کنه نباید فیلد
                'email'    => ['nullable', 'email', 'unique:users,email', 'required_without:phone'],
                'phone'    => ['nullable', 'string', 'unique:users,phone', 'required_without:email'],
                'password' => ['required', 'string', 'min:5', 'confirmed'],
            ];
        } elseif ($route->getName() == 'login') {
            return [
                'email'    => ['required_without:phone','nullable','email'],
                'phone'    => ['required_without:email','nullable','string'],
                'password' => ['required','string'],
                'remember' => ['nullable','boolean'],
            ];
        } elseif ($route->getName() == 'profile.update') {
            $userId = $this->user()->id;
            return [
                'name'     => ['sometimes', 'string', 'max:255'],
                'email'    => ["sometimes", "email", "unique:users,email,{$userId}"],
                'phone'    => ["sometimes", "string", "unique:users,phone,{$userId}"],
                'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            ];
        }
        return [];
    }
    protected function prepareForValidation()
    {
        $input = $this->input('email');

        if (is_numeric($input)) {
            $this->merge([
                'phone' => $input,
                'email' => null,
            ]);
        } else {
            $this->merge([
                'email' => $input,
                'phone' => null,
            ]);
        }
    }


    public function messages(): array
    {
        return [
            'name.required'         => 'وارد کردن نام الزامی است.',
            'name.string'           => 'نام باید شامل حروف باشد.',
            'email.email'           => 'ایمیل وارد شده معتبر نیست.',
            'email.unique'          => 'این ایمیل قبلاً ثبت شده است.',
            'phone.unique'          => 'این شماره تلفن قبلاً ثبت شده است.',
            'phone.string'          => 'شماره تلفن باید شامل اعداد باشد.',
            'password.required'     => 'رمز عبور الزامی است.',
            'password.min'          => 'رمز عبور باید حداقل ۵ کاراکتر باشد.',
            'password.confirmed'    => 'تایید رمز عبور مطابقت ندارد.',
        ];
    }
}
