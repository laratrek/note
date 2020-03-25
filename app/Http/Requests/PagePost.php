<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Page;

class PagePost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $page = Page::find($this->route('page'));
        var_dump($page);
        return $page && $this->user()->can('update', $page);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        	'title' => 'required|max:255',
        	'body'  => 'required',
        ];
    }
}
