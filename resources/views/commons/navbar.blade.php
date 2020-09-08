<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">Task-management</a>
        {{-- ユーザ登録ページへのリンク --}}
         <h1>{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}</h1>
          {{-- ログインページへのリンク --}}
                    <h1 class="nav-item">{!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}</h1>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                {{-- メッセージ作成ページへのリンク --}}
                <li class="nav-item">{!! link_to_route('tasks.create', '新規メッセージの投稿', [], ['class' => 'nav-link']) !!}</li>
                 {{-- ログアウトへのリンク --}}
                            <li class="dropdown-item">{!! link_to_route('logout.get', 'Logout') !!}</li>
                            
            </ul>
        </div>
    </nav>
</header>