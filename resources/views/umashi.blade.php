@extends('layout.common')
@section('title', 'うましについて')
<body class="fade-main">
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
              @guest
                <li>
                  <a class="header-link1-1" href="{{ url('/login') }}">Login</a>
                </li>
                <li>
                  <a class="header-link1-1" href="{{ url('/register') }}">Register</a>
                </li>
              @endguest
              @auth
                <li>
                    <a class="header-link1-1" href="{{ url('/mypage') }}">マイページ</a>
                </li>
                <li>
                  <a class="header-link1-1" href="{{ url('/logout') }}">
                    ログアウト
                  </a>
                </li>
              @endauth
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
                    <a href="{{ url('/role') }}">利用規約</a>
                  </li><!-- /.hamburger-item -->
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
    <main class="wrapper-umashi">
     <h1 class="main-umashi-center">RamenUmashiとは</h1>
      <section class="umashi-flex">
       <div class="umashi-special">
          <p id="umashi-item" >Umashiのここがすごい</p>
          <img class="fade-main" id="umashi-item2" src="img/main/ramen-list.jpg" alt="sample_img">
        </div>
        <article>
          <p id="umashi-text">
            この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！
          </p>
        </article>
      </section>
      <section class="umashi-flex">
       <div class="umashi-special">
          <p id="umashi-item3">Umashiのここがすごい</p>
          <img class="fade-main1" id="umashi-item4" src="img/main/ramen-list.jpg" alt="sample_img">
        </div>
        <article>
          <h1>
            
          </h1>
          <p id="umashi-text">
            この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！
          </p>
        </article>
      </section>
      <section class="umashi-flex">
       <div class="umashi-special">
          <p id="umashi-item5">Umashiのここがすごい</p>
          <img class="fade-main1" id="umashi-item6" src="img/main/ramen-list.jpg" alt="sample_img">
        </div>
        <article>
          <h1>
            
          </h1>
          <p id="umashi-text">
            この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！
          </p>
        </article>
      </section>
    </main>
    @include('layout.footer')