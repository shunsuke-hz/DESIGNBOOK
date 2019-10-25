<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
      'photo' => 'nullable|image',
      'brand_name' => 'required',
      'url' => 'nullable|url',
      'email' => 'required|email|unique:brands,mail_address',
      'zip01' => 'nullable|numeric|digits:7',
      'pref01' => 'nullable|required_with:zip01|in:北海道,青森県,岩手県,宮城県,秋田県,山形県,福島県,茨城県,栃木県,群馬県,埼玉県,千葉県,東京都,神奈川県,新潟県,富山県,石川県,福井県,山梨県,長野県,岐阜県,静岡県,愛知県,三重県,滋賀県,京都府,大阪府,兵庫県,奈良県,和歌山県,鳥取県,島根県,岡山県,広島県,山口県,徳島県,香川県,愛媛県,高知県,福岡県,佐賀県,長崎県,熊本県,大分県,宮崎県,鹿児島県,沖縄県',
      'addr01' => 'required_with:pref01',
      'address_line1' => 'required_with:addr01',
      'address_line2' => 'nullable|string',
      'phone_number' => 'nullable|regex:/^[0-9]{2,4}-?[0-9]{3,4}-?[0-9]{3,4}$/',
      'belonging_to' => 'nullable|string|max:9999',
    ];
  }

  public function messages()
  {
    return [
      'pref01.required_with' => '都道府県名は必須です。',
      'pref01.in' => '正しい都道府県名を入力してください。',
      'addr01.required_with' => '市区町村名は必須です。',
      'address_line1.required_with' => '番地等は必須です。',

    ];
  }

  public function attributes()
  {
    return [
      'photo' => '画像',
      'brand_name' => 'ブランド名',
      'zip01' => '郵便番号',
      'pref01' => '都道府県',
      'addr01' => '市区町村',
      'address_line1' => '番地等',
      'address_line2' => '建物名・号室等',
      'tel' => '代表電話番号',
      'belonging_to' => 'About',
    ];
  }
}
