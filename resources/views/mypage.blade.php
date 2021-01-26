@extends('layout.common')
@section('title', 'マイページ')
<body>
  <div class="wrapper-header">
    <header>
      <!-- 修正箇所 -->
      <!-- 背景画像読込=home -->
      <div id="ramen-home" class="big-bg">
        <div class="page-header wrapper">
          <a class="logo-flex" href="{{ url('/') }}">
            <img class="fade-main" id="ramen-logo" src="img/logo/ramen-log.png" alt="">
          </a>
          <a class="logo-flex" href="{{ url('/') }}">
            <h1  id="logo-font">
              RamenUmashi
            </h1>
          </a>
          <!-- 修正箇所 -->
          <nav class="header-nav-list">
            <ul class="main-nav">
                <li>
                <a class="header-link1-1" href="{{ url('/logout') }}">
                  ログアウト
                </a>
              </li>
              <li>
                <a class="header-link1-1" href="{{ url('/umashi') }}">RamenUmashiについて</a>
              </li>
              <li>
                <a class="header-link1-1" href="{{ url('/') }}">ラーメン検索</a>
              </li>
              <li>
                <a class="header-link1-1" href="{{ url('/shop/shop_info') }}">ラーメン店主様ご利用の場合</a>
              </li>
            </ul>
          </nav>
          <!-- 修正箇所 -->
          <nav class="hamburger-none">
          <!-- 修正箇所 -->
            <input type="checkbox" id="hamburger-check" class="chekc-hidden">
            <!-- ハンバーガーアイコン -->
            <label for="hamburger-check" class="hamburger-open">
              <span></span>
            </label>
            <!-- メニュー -->
            <!-- 追加設定　ハンバーガー -->
            <label for="hamburger-check" class="hamburger-close"></label>
            <nav class="hamburger-content">
              <div id="hamburger-header-contents">
                <h1>Contents</h1>
              </div>
              <div class="hamburger-main-contents">
                <ul class="hamburger-list">
                  <li class="hamburger-item">
                    <a href="{{ url('/contact') }}">問い合わせ</a>
                  </li><!-- /.hamburger-item -->
                  <li class="hamburger-item">
                    <a href="{{ url('/help') }}">ヘルプ</a>
                  </li><!-- /.hamburger-item -->
                  @auth
                  <li class="hamburger-item">
                    <a href="{{ url('/logout') }}">ログアウト</a>
                  </li><!-- /.hamburger-item -->                   
                  @endauth
                  <li class="hamburger-item">
                    <a href="{{ url('/umashi') }}">RamenUmashiとは</a>
                  </li><!-- /.hamburger-item -->
                  <li class="hamburger-item">
                    <a href="{{ url('/role') }}">利用規約</a>
                  </li><!-- /.hamburger-item -->
                  <li class="hamburger-item">
                    <a href="{{ url('/cancellation') }}">ラーメン店主様ご利用の場合</a>
                  </li>
                </ul><!-- /.hamburger-list -->
              </div>
              <div id="hamburger-footer-contents">
                <small>&copy;RamenUmashi</small>
              </div>
            </nav>
          </nav>
        </div>
      </div>
  </header>
  <main class="wrapper-mypage">
    <h1 class="mypage-head">予約一覧</h1>
    <p class="mypage-login">{{$user['user_name']}}様ログイン中</p>
    <div class="wrapper grid">
      @foreach ($reserves as $reserve)
      <div class="item">
        <p>{{ $reserve->shop_name}}</p>
          <a href="{{action('MypageController@detail')}}?reserve_id={{ $reserve->reserve_id}}">
            <img class="hover-index" src="{{asset('storage/image/'.$reserve->img)}}" alt="menu">
          </a>
      </div>
      @endforeach
    </div><!-- /.grid -->
    {{$reserves->appends(request()->input())->render()}}
    <h1 class="mypage-head">お気に入り一覧</h1>
      <h1 class="mypage-head">マイページ</h1>
      <div class="wrapper grid">
        @foreach ($okinis as $okini)
        <div class="item">
          <p>{{ $okini->shop_name}}</p>
          <a class="hover-index" href="{{action('MypageController@okiniDetail')}}?okini_id={{ $okini->okini_id}}"><img src="{{asset('storage/image/'.$okini->img)}}" alt="menu"></a>
        </div>
        @endforeach
      </div><!-- /.grid -->
      {{$okinis->appends(request()->input())->render()}}
    </main>
    @include('layout.footer')