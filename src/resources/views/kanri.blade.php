<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanri System</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/kanri.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/kanri">
                Management System
            </a>
        </div>
    </header>

    <main>
        <div class="kanri-system__content">
            <div class="kanri-form__heading">
                <h2>管理システム</h2>
            </div>
            <form class="search-form" action="/contacts/search" method="get">
                @csrf
                <div class="form__group--top">
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">お名前</span>
                        </div>
                        <div class="form__group-content">
                            <div class="form__input--text">
                                <input type="text" name="searchWord">
                            </div>
                        </div>
                    </div>
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">性別</span>
                        </div>
                        <div class="form__group-content">
                            <div class="form__radio--sex">
                                <input type="radio" id="g_all" name="gender" value="全て" checked />
                                <label for="g_all">全て</label>
                                <input type="radio" id="r_male" name="gender" value="男性" />
                                <label for="r_male">男性</label>
                                <input type="radio" id="r_female" name="gender" value="女性" />
                                <label for="r_female">女性</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form__group--register">
                    <div class="form__group-title">
                        <span class="form__label--item">登録日</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input-register--text">
                            <input type="text" name="register__s" />～
                            <input type="text" name="register__e" />
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" />
                        </div>
                    </div>
                </div>
                <div class="search-form__button">
                    <button class="search-form__button-submit" type="submit">検索</button>
                </div>
                <div class="reset__link"><a href="/">リセット</a></div>
            </form>
            
            <div class="kanri-table">
                <table class="kanri-table__inner">
                    <tr class="kanri-table__row">
                        <th class="kanri-table__header">
                            <span class="kanri-table__header-span">ID</span>
                            <span class="kanri-table__header-span">お名前</span>
                            <span class="kanri-table__header-span">性別</span>
                            <span class="kanri-table__header-span">メールアドレス</span>
                            <span class="kanri-table__header-span">ご意見</span>
                        </th>
                    </tr>

                    <tr class="kanri-table__row">
                        <td class="kanri-table__item">
                            <form class="delete-form" action="/todos/delete" method="post">
                                @method('DELETE') @csrf
                                <div class="delete-form__button">
                                    <button class="delete-form__button-submit" type="submit">
                                        削除
                                    </button>
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