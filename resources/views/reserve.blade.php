@extends('layout.common')
@section('title', '予約')
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
                  <li class="hamburger-item">
                    <a href="{{ url('/register') }}">新規登録</a>
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
    <main class="main-width">
      <div class="wrapper-reve">
        <h1 id="wrapper-main-reve">お店予約</h1>
        <!--  グリッド-->
        <!--実際はポスト-->
        <form action="{{action('ReserveController@reserveResult')}}" method="post">
          @csrf
          <input type="hidden" name="shop_id" value="{{$user_id}}">
          <div class="main-reve-grid">
            <div id="main-reve-item">
              人数：
            </div>
            <div id="main-reve-item1">
              <input type="text" name="number">
            </div>
          </div>
          <div class="main-reve-grid">
            <div id="main-reve-item2">
              日：
            </div>
            <div id="main-reve-item3">
              <input type="date" name="date" value="" required>
            </div>
          </div>
          <div class="main-reve-grid">
            <div id="main-reve-item2">
              時間：
            </div>
            <div id="main-reve-item4">
              <select name="time">
              <option class="items" value="10:00">10:00</option>
              <option value="11:00">11:00</option>
              <option value="12:00">12:00</option>
              <option value="13:00">13:00</option>
              <option value="14:00">14:00</option>
              <option value="15:00">15:00</option>
              <option value="16:00">16:00</option>
              <option value="17:00">17:00</option>
              <option value="18:00">18:00</option>
              <option value="19:00">19:00</option>
              <option value="20:00">20:00</option>
              <option value="21:00">21:00</option>
              <option value="22:00">22:00</option>
              <option value="23:00">23:00</option>
              <option value="24:00">24:00</option>
            </select>
            </div>
          </div>
          <div class="reve-submit">
            <input type="submit" name="submit" class="button" value="予約">
          </div>
        </form>
      </div>
    </main>
    @include('layout.footer')