<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>ログイン</title>
<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
<link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
            Atte
            </a>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>ログイン</h2>
            </div>

            <form class="form" action="/confirm" method="post">
                @csrf

                <div class="form__group">
                    <div class="form__group-content">
                        <div class="form__input--text">
                        <input type="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}" />
                        </div>
                        <div class="form__error">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-content">
                        <div class="form__input--text">
                        <input type="password" name="password" placeholder="パスワード" value="{{ old('password') }}" />
                        </div>
                        <div class="form__error">
                            @error('password')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form__button">
                    <button class="form__button-submit" type="submit">会員登録</button>
                </div>
            </form>
                <div class="beneath">
                    <p>
                        アカウントをお持ちでない方はこちら
                    </p>
                    <a class="beneath__login" href="/">
                        会員登録
                    </a>
                </div>
        </div>
    </main>

    <footer class="footer">
        <div class="footer__inner">
            <a>
            Atte, inc.
            </a>
        </div>
    </footer>
</body>

</html>