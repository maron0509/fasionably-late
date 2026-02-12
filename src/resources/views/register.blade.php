<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FasionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
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
    <div class="register-container">
      <div class="register-form__heading">
        <h2>Register</h2>
      </div>
      <form class="register-form">
        <div class="form-group">
          <label for="name">お名前</label>
          <div class="input-wrapper">
            <input type="text" id="name" name="name" placeholder="例：山田太郎" required >
          </div>
          <div class="field-message" id="nameMessage"></div>
        </div>

        <div class="form-group">
            <label for="mail">メールアドレス</label>
            <div class="input-wrapper">
                <input type="mail" id="mail" name="mail" placeholder="例：text@example.com" required >
            </div>
            <div class="field-message" id="mailMessage"></div>
        </div>

        <div class="form-group">
            <label for="password">パスワード</label>
            <div class="input-wrapper">
                <input type="password" id="password" name="password" placeholder="例：coachtech1106" required >
            </div>
        </div>

        <div class="form-group">
            <button class="form__button-submit" type="submit">登録</button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>