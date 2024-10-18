<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'products' => 'required|array|min:1',
            'products.*.name' => 'required|string',
            'products.*.amount' => 'required|integer|min:1',
            'products.*.price' => 'required|integer|min:1',
        ];
    }

    public function messages(): array
    {
        return [
            'products.required' => 'Массив продуктов не может быть пустым',
            'products.array' => 'Продукты должны быть массивом',
            'products.min' => 'Минимальное количество продуктов: :min',
            'products.*.name.required' => 'Название продукта является обязательным полем',
            'products.*.name.string' => 'Название продукта должно быть строкой',
            'products.*.amount.required' => 'Кол-во продукта является обязательным полем',
            'products.*.amount.integer' => 'Кол-во продукта должно быть числом',
            'products.*.amount.min' => 'Минимальное количество продукта: :min',
            'products.*.price.required' => 'Цена продукта является обязательным полем',
            'products.*.price.integer' => 'Цена продукта должна быть числом',
            'products.*.price.min' => 'Минимальная цена продукта: :min',
        ];
    }
}
