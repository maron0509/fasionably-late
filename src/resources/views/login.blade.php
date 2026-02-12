<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FasionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        Login
      </a>
    </div>
  </header>

  <div>
    <div class="error-message" id="errorMessage">
    メールアドレスまたはパスワードが正しくありません
    </div>

    <div class="success-message" id="successMessage">
    ログインに成功しました！
    </div>

    <form id="loginForm">
      <div class="form-group">
        <label for="email">メールアドレス</label>
        <div class="input-wrapper">
          <input type="email" id="email" name="email" placeholder="example@email.com" required="">
        </div>
      </div>

      <div class="form-group">
        <label for="password">パスワード</label>
        <div class="input-wrapper">
          <input type="password" id="password" name="password" placeholder="パスワードを入力" required="">
          <button type="button" class="password-toggle" onclick="togglePassword()" aria-label="パスワードを表示/非表示">
          </button>
        </div>
      </div>

      <div class="checkbox-group">
        <div class="checkbox-wrapper">
          <input type="checkbox" id="remember" name="remember">
          <label for="remember">ログイン状態を保持</label>
        </div>
        <a href="#" class="forgot-password">パスワードを忘れた方</a>
      </div>

      <button type="submit" class="login-button">ログイン</button>
    </form>

    <div class="divider">
      <span>または</span>
    </div>

    <div class="signup-link">
      アカウントをお持ちでない方 <a href="#">新規登録</a>
    </div>
  </div>                  
</body>
</html>