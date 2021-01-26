@extends('layout.common')
@section('title', 'プライバシー第三者')
<body class="fade-main">
  <!-- ラッピングにて -->
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
    <main class="wrapper-privacy3">
      <h1 class="mainTitle">第三者企業へのお客様情報の送信について</h1>
      <p>
          当社は、当社が提供するウェブサイト内において、広告主または広告配信会社等による広告配信およびその効果測定等の目的や、調査・分析会社等による当社サイトの利用状況の調査等を目的として、それらの第三者企業が提供するサービスを導入している場合があります。それにより、カスタマーの端末から、それらの第三者企業独自のクッキーやWebビーコン等を介して情報が送信される場合があります。　なお、送信される情報にはカスタマー個人を特定する情報は含まれておりません。
      </p>
      <br>
      <br>

      <h2 class="ttl">当社が導入しているサービスおよび第三者企業に送信される情報は以下のとおりです</h2>
      <h3 class="ttl">Google広告/グーグル株式会社</h3>
      <p>
          送信情報 : お客様のサービス閲覧履歴（閲覧日時・URL）等<br>
          送信目的 : 最適な広告配信のため<br>
          送信先 : Google, Inc.<br>
          オプトアウト : <a href="https://policies.google.com/technologies/ads?hl=ja" target="_blank">https://policies.google.com/technologies/ads?hl=ja</a><br>
      </p>
      <h3 class="ttl">GoogleAnalytics/グーグル株式会社</h3>
      <p>
          送信情報 : お客様のサービス閲覧履歴（閲覧日時・URL）等<br>
          送信目的 : サービスの利用状況解析のため<br>
          送信先 : Google, Inc.<br>
          オプトアウト : <a href="https://support.google.com/analytics/answer/181881?hl=ja" target="_blank">https://support.google.com/analytics/answer/181881?hl=ja</a><br>
      </p>
    </main>
    @include('layout.footer')