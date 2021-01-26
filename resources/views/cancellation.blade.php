@extends('layout.common')
@section('title', '解約')
<body>
  <!-- ラッピングにて -->
  <div class="wrapper-header">
    <header>
      <!-- 修正箇所 -->
      <!-- 背景画像読込=home -->
      <div id="ramen-home" class="big-bg">
        <div class="page-header wrapper">
          <a class="logo-flex" href="{{ url('/') }}">
            <img id="ramen-logo" src="img/logo/ramen-log.png" alt="">
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
                <a class="header-link1-1" href="{{ url('/login') }}">Login</a>
              </li>
              <li>
                <a class="header-link1-1" href="{{ url('/register') }}">Register</a>
              </li>
              <li>
                <a class="header-link1-1" href="{{ url('/umashi') }}">RamenUmashiについて</a>
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
                  @guest
                  <li class="hamburger-item">
                    <a href="{{ url('/register') }}">新規登録</a>
                  </li><!-- /.hamburger-item -->
                  <li class="hamburger-item">
                    <a href="{{ url('/login') }}">ログイン</a>
                  </li><!-- /.hamburger-item -->
                  @endguest
                  @auth
                  <li class="hamburger-item">
                    <a href="{{ url('/logout') }}">ログアウト</a>
                  </li><!-- /.hamburger-item -->
                  <li class="hamburger-item">
                    <a href="{{ url('/mypage') }}">マイページ</a>
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
    <main>
      <main>
        <h1 id="wrapper-main-cancellation">お客様解約</h1>
        <div class="wrapper-cancellation">
          <!--  グリッド-->
          <form class="reig-center" action="{{action('CancelController@userCancel')}}" method="POST">
            @csrf
            <div class="main-cancellation-grid">
              <div class="main-cancellation-item">
                <label class="required">
                  メールアドレス：
                </label>
                @error('email')
                <div class="alert">{{ $message }}</div>
                @enderror
              </div>
              <div class="main-cancellation-item">
                <input type="text" name="email" value="">
              </div>
            </div>
            <div class="main-cancellation-grid">
              <div class="main-cancellation-item">
                <label class="required">
                  パスワード：
                </label>
                @error('password')
                  <div class="alert">{{ $message }}</div>
                @enderror
              </div>
              <div class="main-cancellation-item">
                <input type="password" name="password" value="" >
              </div>
            </div>
            <div class="cancellation-submit">
              <input type="submit" name="submit" value="解約"  class="button">
            </div>
          </form>
        </div>
      </main>
@include('layout.footer')