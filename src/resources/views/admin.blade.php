<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FasionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
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
    <div class="form__button">
      <button class="form__button-submit" type="submit">logout</button>
    </div>
  </header>

  <main>
      <div>
        <h2>Admin</h2>
      </div>
    </div>
    <form id="searchForm">
      <div class="search-grid">
        <div class="form-group">
          <input type="text" id="name" placeholder="名前やメールアドレスを入力してください">
        </div>

        <div class="form-group">
          <select id="gender">
            <option value="male">男性</option>
            <option value="female">女性</option>
            <option value="other">その他</option>
          </select>
        </div>

        <div class="form-group">
          <select name="contact">
            <option value="">お問い合わせの種類</option>
            <option value="delivery">商品のお届けについて</option>
            <option value="goods">商品の交換について</option>
            <option value="trouble">商品トラブル</option>
            <option value="contact">ショップへのお問い合わせ</option>
            <option value="others">その他</option>
          </select>
        </div>

        <div class="form-group">
          <input type="date" id="date">
        </div>

      </div>

      <div class="button-group">
        <button type="submit" class="btn-search">検索</button>
        <button type="button" class="btn-reset" onclick="resetForm()">リセット</button>
      </div>
    </form> 

    <div>
      <div>
        <button class="form__button-submit" type="submit">エクスポート</button>
      </div>
      <div>
        
      </div>
    </div>

    <div class="results-panel">
      <div id="resultsContainer">
        <table>
          <tr>
              <th>名前</th>
              <th>性別</th>
              <th>メールアドレス</th>
              <th>お問い合わせの種類</th>
          </tr>

          <tr class="todo-table__row">
            <td class="todo-table__item">
              <form class="update-form">
                <div class="update-form__item">
                  <input class="update-form__item-input" type="text" name="name" value="test">
                  <input class="update-form__item-input" type="text" name="gender" value="test">
                  <input class="update-form__item-input" type="text" name="email" value="test"><input class="update-form__item-input" type="text" name="contact" value="test">
                </div>
                <div class="update-form__button">
                  <button class="update-form__button-submit" type="submit">詳細</button>
                </div>
              </form>
            </td>
          </tr>

        </table>
      </div>
    </div>
  </main>
</body>
</html>