@extends('layout.common-1')
@section('title', 'お気に入り店詳細')
<body>
  <div class="wrapper-header">
    <header>
      <!-- 修正箇所 -->
      <!-- 背景画像読込=home -->
      <div id="ramen-home" class="big-bg">
        <div class="page-header wrapper">
          <a class="logo-flex" href="{{ url('/') }}">
            <img class="fade-main" id="ramen-logo" src="../img/logo/ramen-log.png" alt="">
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
    <main class="wrapper-mypage">
      <h1 class="mypage-head">お店情報</h1>
      <form class="reig-center" action="{{action('MypageController@okiDelete')}}" method="get">
        @csrf
        <input type="hidden" name="okini_id" value="{{$okinis->okini_id}}">
        <div class="main-regi-grid">
          <div class="main-regi-item">
            <label>
              店名：
            </label>
          </div>
          <div class="main-regi-item">
            <p>{{$okinis->shop_name}}</p>
          </div>
        </div>
        <div class="main-regi-grid">
          <div class="main-regi-item">
            <label>
              電話番号：
            </label>
          </div>
          <div class="main-regi-item">
            <p>{{$okinis->shop_tel}}</p>
          </div>
        </div>
        <div class="main-regi-grid">
          <div class="main-regi-item">
           <label>
              アクセス：
            </label>
          </div>
          <div class="main-regi-item">
            <p>{{$okinis->shop_address}}</p>
          </div>
        </div>
        <div class="regi-submit">
          <input type="submit" name="submit" value="お気に入り解除" class="button">
        </div>
      </form>
    </div>
    </main>
    @include('layout.footer')