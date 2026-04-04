<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('css/delete.css') }}">
</head>
<body>

<header class="header">
    <div class="header__inner">
        <h1 class="header__logo">FashionablyLate</h1>
        <button class="logout-btn">logout</button>
    </div>
</header>

<main class="admin">
    <h2 class="admin__title">Admin</h2>

    <!-- 検索フォーム -->
    <div class="search">
        <input type="text" placeholder="名前やメールアドレスを入力してください">

        <select>
            <option>性別</option>
        </select>

        <select>
            <option>お問い合わせの種類</option>
        </select>

        <input type="date">

        <button class="btn search-btn">検索</button>
        <button class="btn reset-btn">リセット</button>
    </div>

    <button class="export-btn">エクスポート</button>

    <div class="pagination">
        <span>&lt;</span>
        <span class="active">1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span>5</span>
        <span>&gt;</span>
    </div>

    <!-- テーブル -->
    <table class="table">
        <thead>
            <tr>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>お問い合わせの種類</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < 7; $i++)
            <tr>
                <td>{{$contact->last_name}} {{$contact->first_name}}</td>
                <td>{{$contact->gender}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->inquiry_type}}</td>
                <form action="/delete" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$contact->id}}">
                    <td><button class="detail-btn">詳細</button></td>
                </form>
            </tr>
            @endfor
        </tbody>
    </table>

</main>

</body>
</html>