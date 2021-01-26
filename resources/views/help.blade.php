@extends('layout.common')
@section('title', 'ヘルプ')
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
    <main class="wrapper-help">
      <h1 class="help-center">ヘルプ</h1>
      <div class="help_qa">
        <input id="help_conttab1" type="radio" name="tabs" checked>
        <label for="help_conttab1" class="help_tabitem">ログインの仕方</label>
        <input id="help_conttab2" type="radio" name="tabs">
        <label for="help_conttab2" class="help_tabitem">新規登録の仕方</label>
        <input id="help_conttab3" type="radio" name="tabs">
        <label for="help_conttab3" class="help_tabitem">RamenUmashiとは</label>
        <input id="help_conttab4" type="radio" name="tabs">
        <label for="help_conttab4" class="help_tabitem">店舗情報確認方法</label>
        <div id="help_content1">
          <div class="help_qain">
            <div class="help_actab">
              <input id="help_tabfour051" type="checkbox" name="tabs">
              <div class="help_plus">+</div>
              <label for="help_tabfour051">ログイン方法</label>
              <div class="help_actab-content">答えテキスト</div>
            </div>
            <div class="help_actab">
              <input id="help_tabfour052" type="checkbox" name="tabs">
              <div class="help_plus">+</div>
              <label for="help_tabfour052">質問テキスト 質問テキスト</label>
              <div class="help_actab-content">答えテキスト</div>
            </div>
            <div class="help_actab">
              <input id="help_tabfour053" type="checkbox" name="tabs">
              <div class="help_plus">+</div>
              <label for="help_tabfour053">解約方法</label>
              <div class="help_actab-content">答えテキスト</div>
            </div>
          </div>
        </div>
        <div id="help_content2">
          <div class="help_qain">
            <div class="help_actab">
              <input id="help_tabfour054" type="checkbox" name="tabs">
              <div class="help_plus">+</div>
              <label for="help_tabfour054">登録方法</label>
              <div class="help_actab-content">答えテキスト</div>
            </div>
            <div class="help_actab">
              <input id="help_tabfour055" type="checkbox" name="tabs">
              <div class="help_plus">+</div>
              <label for="help_tabfour055">ログイン情報の確認</label>
              <div class="help_actab-content">答えテキスト</div>
            </div>
          </div>
        </div>
        <div id="help_content3">
          <div class="help_qain">
            <div class="help_actab">
              <input id="help_tabfour056" type="checkbox" name="tabs">
              <div class="help_plus">+</div>
              <label for="help_tabfour056">一体Umashiって何？</label>
              <div class="help_actab-content">答えテキスト</div>
            </div>
          </div>
        </div>
        <div id="help_content4">
          <div class="help_qain">
            <div class="help_actab">
              <input id="help_tabfour058" type="checkbox" name="tabs">
              <div class="help_plus">+</div>
              <label for="help_tabfour058">お店情報の検索方法は？</label>
              <div class="help_actab-content">答えテキスト</div>
            </div>
            <div class="help_actab">
              <input id="help_tabfour059" type="checkbox" name="tabs">
              <div class="help_plus">+</div>
              <label for="help_tabfour059">何店舗登録してあるの？</label>
              <div class="help_actab-content">答えテキスト</div>
            </div>
            <div class="help_actab">
              <input id="help_tabfour060" type="checkbox" name="tabs">
              <div class="help_plus">+</div>
              <label for="help_tabfour060">店舗を登録したい</label>
              <div class="help_actab-content">答えテキスト</div>
            </div>
          </div>
        </div>
      </div>
    </main>
@include('layout.footer')