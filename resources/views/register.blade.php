@extends('layout.common')
@section('title', '会員登録')
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
      <h1 id="wrapper-main-regi">新規登録</h1>
      <div class="wrapper-regi">
        <!--  グリッド-->
        <form class="reig-center" action="{{action('RegisterController@userRegister')}}" method="POST">
          @csrf
          <div class="main-regi-grid">
            <div class="main-regi-item">
              <label class="required">
                ユーザーID：
              </label>
              <p class="alert">※16文字以内で記入して下さい。</p>
            </div>
            <div class="main-regi-item">
              <input type="text" name="user_id" value="{{ old('user_id') }}">
              @error('user_id')
              <div class="alert">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="main-regi-grid">
            <div class="main-regi-item">
              <label class="required">
                ユーザー名：
              </label>
              <p class="alert">※16文字以内で記入して下さい。</p>
            </div>
            <div class="main-regi-item">
              <input type="text" name="user_name" value="{{ old('user_name') }}" >
              @error('user_name')
              <div class="alert">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="main-regi-grid">
            <div class="main-regi-item">
              <label class="required">
                パスワード：
              </label>
              <p class="alert">※8文字から32文字以内で(@_!)いずれか2種類以上を入力して下さい。</p>
            </div>
            <div class="main-regi-item">
              <input type="password" id="password" name="password" value="{{ old('password') }}" >
              @error('password')
              <div class="alert">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="main-regi-grid">
            <div class="main-regi-item">
              <label class="required1">
                パスワードの確認：
              </label>
            </div>
            <div class="main-regi-item">
              <input type="password" id="confirm_password" name="confirm_password" >
              <p class="alert" id="error_msg"></p>
            </div>
          </div>
          <div class="main-regi-grid">
            <div class="main-regi-item">
              <label class="required">
                メールアドレス：
              </label>
            </div>
            <div class="main-regi-item">
              <input type="email" name="email" value="{{ old('email') }}" >
              @error('email')
              <div class="alert">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="main-regi-grid">
            <div class="main-regi-item">
             <label class="optional">
                電話番号：
              </label>
            </div>
            <div class="main-regi-item">
              <input type="tel" name="tel" value="{{ old('tel') }}" >
              @error('tel')
              <div class="alert">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="main-regi-grid">
            <div class="main-regi-item">
              <label class="optional">
                年齢：
              </label>
            </div>
            <div class="main-regi-item" >
              <input type="age" name="age" value="{{ old('age') }}" >
              @error('age')
              <div class="alert">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="main-regi-grid">
            <div class="main-regi-item">
                性別：
            </div>
            <div class="main-regi-item" id="main-regi-sex">
              <input type="radio" name="sex" value="3" checked>その他
              <input type="radio" name="sex" value="2">女性
              <input type="radio" name="sex" value="1">男性
            </div>
          </div>
          <div class="regi-submit">
            <input type="submit" name="submit" value="新規登録" onclick="return confirmPassword();"  class="button">
          </div>
        </form>
      </div>
    </main>
    @include('layout.footer')