<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'min:10', 'max:255', 'unique:articles,title'],
            'content' => ['required', 'string', 'min:10', 'max:5000'],
            'category' => ['required', 'string', 'min:3', 'max:255'],
            'image' => ['nullable', 'url'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'The title is required.',
            'title.string' => 'The title must be a string.',
            'title.min' => 'The title must be at least :min characters.',
            'title.max' => 'The title must not be greater than :max characters.',
            'title.unique' => 'An article with that title already exists.',

            'content.required' => 'The content is required.',
            'content.string' => 'The content must be a string.',
            'content.min' => 'The content must be at least :min characters.',
            'content.max' => 'The content must not be greater than :max characters.',

            'category.required' => 'The category is required.',
            'category.string' => 'The category must be a string.',
            'category.min' => 'The category must be at least :min characters.',
            'category.max' => 'The category must not be greater than :max characters.',

            'image.url' => 'The image must be a valid URL.',
        ];
    }
}
