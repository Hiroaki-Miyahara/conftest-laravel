@extends('layouts.inquiry-app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/inquiry.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
</div>
<form class="form" action="/confirm" method="post">
    @csrf
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--name">
                <input type="text" name="first_name" placeholder="  例：山田" value="{{ old('name') }}" />
                <input type="text" name="last_name" placeholder="  例：太郎" value="{{ old('name') }}" />
            </div>
            <div class="form__error">
                @error('first_name')
                {{ $message }}
                @enderror
                @error('last_name')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--radio">
                <input type="radio" name="gender" value="" style="display: none">
                <input type="radio" name="gender" value="男性"> 男性
                <input type="radio" name="gender" value="女性"> 女性
                <input type="radio" name="gender" value="その他"> その他
            </div>
            <div class="form__error">
                @error('gender')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="text" name="email" placeholder="  例：test@example.com" value="{{ old('email') }}" />
            </div>
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--tel">
                <input type="text" name="tel1" placeholder="  080" value="{{ old('tel') }}" /> -
                <input type="text" name="tel2" placeholder="  1234" value="{{ old('tel') }}" /> -
                <input type="text" name="tel3" placeholder="  5678" value="{{ old('tel') }}" />
            </div>
            <div class="form__error">
                @error('tel1')
                {{ $message }}
                @enderror
                @error('tel2')
                {{ $message }}
                @enderror
                @error('tel3')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="text" name="address" placeholder="  例：東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
            </div>
            <div class="form__error">
                @error('address')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">建物名</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="text" name="building" placeholder="  例：千駄ヶ谷マンション101" value="{{ old('building') }}" />
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--select">
                <select name="detail">
                    <option class="form__input--select-title" value="" hidden>選択してください</option>
                    <option value="商品のお届けについて">商品のお届けについて</option>
                    <option value="商品の交換について">商品の交換について</option>
                    <option value="商品トラブル">商品トラブル</option>
                    <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                    <option value="その他">その他</option>
                </select>
            </div>
            <div class="form__error">
                @error('detail')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">問い合わせ内容</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--textarea">
                <textarea name="content" placeholder="  お問い合わせ内容をご記載ください"></textarea>
            </div>
            <div class="form__error">
                @error('content')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form__button">
        <button class="form__button-submit" type="submit">確認画面</button>
    </div>
</form>
@endsection