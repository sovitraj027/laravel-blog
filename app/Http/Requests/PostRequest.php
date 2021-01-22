<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'slug' => 'unique:post,slug',
            'description' => 'required',
            'image' => 'image',
        ];
    }

    public function image_upload($post)
    {
        $image = $this->file('image');
        $filename = time() . '.' . $image->GetClientOriginalExtension();
        $location = $this->file('image')->storeAs('public/post_image', $filename);
        $post->image = $filename;
        $post->save();
    }
}
