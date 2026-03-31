<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
    <div class="container">
        <h1>FashionablyLate</h1>
        <h2>Contact</h2>

        <form action="{{ route('contact.confirm') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>お名前 <span class="required">※</span></label>
                <input type="text" name="last_name" placeholder="例: 山田" required />
                <input type="text" name="first_name" placeholder="例: 太郎" required />
            </div>

            <div class="form-group gender-group">
                <label>性別 <span class="required">※</span></label>
                <label><input type="radio" name="gender" value="male" checked /> 男性</label>
                <label><input type="radio" name="gender" value="female" /> 女性</label>
                <label><input type="radio" name="gender" value="other" /> その他</label>
            </div>

            <div class="form-group">
                <label>メールアドレス <span class="required">※</span></label>
                <input type="email" name="email" placeholder="例: test@example.com" required />
            </div>

            <div class="form-group phone-group">
                <label>電話番号 <span class="required">※</span></label>
                <input type="tel" name="phone1" pattern="\d{2,4}" maxlength="4" placeholder="080" required /> -
                <input type="tel" name="phone2" pattern="\d{3,4}" maxlength="4" placeholder="1234" required /> -
                <input type="tel" name="phone3" pattern="\d{3,4}" maxlength="4" placeholder="5678" required />
            </div>

            <div class="form-group">
                <label>住所 <span class="required">※</span></label>
                <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" required />
            </div>

            <div class="form-group">
                <label>建物名</label>
                <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" />
            </div>

            <div class="form-group">
                <label>お問い合わせの種類 <span class="required">※</span></label>
                <select name="inquiry_type" required>
                    <option value="">選択してください</option>
                    <option value="product">商品について</option>
                    <option value="order">注文について</option>
                    <option value="other">その他</option>
                </select>
            </div>

            <div class="form-group">
                <label>お問い合わせ内容 <span class="required">※</span></label>
                <textarea name="inquiry_content" rows="5" placeholder="お問い合わせ内容をご記載ください" required></textarea>
            </div>

            <button type="submit" class="submit-btn">確認画面</button>
        </form>
    </div>
</body>
</html>