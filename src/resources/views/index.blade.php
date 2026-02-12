<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FasionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        FasionablyLate
      </a>
    </div>
  </header>

  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="/contacts/confirm" method="post">
      @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">  
              <input type="text" name="last_name" placeholder="例：山田" value="{{ old('last_name') }}" />
              <input type="text" name="first_name" 
              placeholder="例：太郎" value="{{ old('first_name') }}" />
            </div>
            <div class="form__error">
               @error('last_name')
               {{ $message }}
               @enderror
              </div>
            <div class="form__error">
               @error('first_name')
               {{ $message }}
               @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span>性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div>
            <input type="radio" name="gender" value="{{ old('男性') }}" />
            <span>男性</span>
            <input type="radio" name="gender" value="{{ old('女性') }}" />
            <span>女性</span>
            <input type="radio" name="gender" value="{{ old('その他') }}" />
            <span>その他</span>
          </div>
          <div class="form__error">
            @error('gender')
            {{ $message }}
            @enderror
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span>メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div>
            <input type="text" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
          </div>
          <div class="form__error">
            @error('email')
              {{ $message }}
            @enderror
          </div>
        </div>
        <div class="form__group">
          <divclass="form__group-title">
            <span>電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div>
            <input type="tel" name="tel" placeholder="080" value="{{ old('tel') }}" />
            <span>-</span>
            <input type="tel" name="tel" placeholder="1234" value="{{ old('tel') }}" />
            <span>-</span>
            <input type="tel" name="tel" placeholder="5678" value="{{ old('tel') }}" />
          </div>
          <div class="form__error">
            @error('tel')
              {{ $message }}
            @enderror
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span>住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div>
            <input type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
          </div>
          <div class="form__error">
            @error('address')
              {{ $message }}
            @enderror
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span>建物名</span>
          </div>
          <div>
            <input type="text" name="building" placeholder="例：千駄ヶ谷マンション101" value="{{ old('building') }}" />
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span>お問い合わせの種類</span>
            <span class="form__label--required">※</span>
          </div>
          <div>
            <select name="content" >
              <option value="選択してください" >選択してください</option>
              <option value="商品のお届けについて">商品のお届けについて</option>
              <option value="商品の交換について">商品の交換について</option>
              <option value="商品トラブル">商品トラブル</option>
              <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
              <option value="その他">その他</option>
            </select>
          </div>
          <div class="form__error">
            @error('content')
              {{ $message }}
            @enderror
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span>お問い合わせ内容</span>
            <span class="form__label--required">※</span>
          </div>
          <div>
            <textarea name="detail" cols="30" rows="4" placeholder="お問い合わせ内容をご記載ください" value="{{ old('detail') }}" /></textarea>
          </div>
          <div class="form__error">
            @error('detail')
              {{ $message }}
            @enderror
          </div>
        </div>
        <div class="form__button">
          <button class=form__button-submit" type="submit">確認画面</button>
        </div>
        
      </form>
    </div>
  </main>

</body>
</html>