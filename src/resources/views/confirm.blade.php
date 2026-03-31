<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>
<body>
    <div class="container">
        <h1>FashionablyLate</h1>
        <h2>Confirm</h2>
        <table>
            <tr>
                <th>お名前</th>
                <td>{{ $data['name'] }}</td>
            </tr>
            <tr>
                <th>性別</th>
                <td>{{ $data['gender'] }}</td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>{{ $data['email'] }}</td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>{{ $data['phone'] }}</td>
            </tr>
            <tr>
                <th>住所</th>
                <td>{{ $data['address'] }}</td>
            </tr>
            <tr>
                <th>建物名</th>
                <td>{{ $data['building'] }}</td>
            </tr>
            <tr>
                <th>お問い合わせの種類</th>
                <td>{{ $data['inquiry_type'] }}</td>
            </tr>
            <tr>
                <th>お問い合わせ内容</th>
                <td>{!! nl2br(e($data['inquiry_content'])) !!}</td>
            </tr>
        </table>

        <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            {{-- ここに隠し項目としてデータを送信 --}}
            @foreach ($data as $key => $value)
                <input type="hidden" name="{{ $key }}" value="{{ $value }}">
            @endforeach
            <button type="submit" class="btn-submit">送信</button>
            <a href="{{ route('contact.form') }}" class="btn-edit">修正</a>
        </form>
    </div>
</body>
</html>