@extends('layout.common-1')
@section('title', 'お店新規登録')
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
                      <a href="{{ url('/umashi') }}">RamenUmashiとは</a>
                    </li><!-- /.hamburger-item -->
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
    <main>
      <div class="wrapper-ramenshop">
        <h1 class="shopregister">お店新規登録</h1>
        <form enctype="multipart/form-data" action="{{action('Shop\ShopRegisterController@shopRegisterResult')}}" method="POST">
          @csrf
          <div class="shopregi-grid">
            <div class="shopregi-item-1">
              <label class="">
                お店ID：
              </label>
              <p class="alert">※16文字以内で記入して下さい。</p>
            </div>
            <div class="shopregi-item">
              <input type="text" name="shop_id" value="{{ old('shop_id') }}" >
              @error('shop_id')
              <div class="alert">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="shopregi-grid">
            <div class="shopregi-item-1">
              <label class="required">
                お店パスワード：
              </label>
              <p class="alert">※8文字から32文字以内で(@_!)いずれか2種類以上を入力して下さい。</p>
            </div>
            <div class="shopregi-item">
              <input type="password" id="shop_pass" name="password" value="{{ old('shop_pass') }}" >
              @error('password')
              <div class="alert">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="shopregi-grid">
            <div class="shopregi-item-1">
              <label class="required">
                email：
              </label>
            </div>
            <div class="shopregi-item">
              <input type="email" id="shop_email" name="shop_email" value="{{ old('shop_email') }}" enctype="multipart/form-data" >
              @error('shop_email')
              <div class="alert">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="shopregi-grid">
            <div class="shopregi-item-1">
              <label class="required">
                連絡先：
              </label>
            </div>
            <div class="shopregi-item">
              <input type="tel" id="shop_tel" name="shop_tel" value="{{ old('shop_tel') }}" enctype="multipart/form-data" >
              @error('shop_tel')
              <div class="alert">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="shopregi-grid">
            <div class="shopregi-item-1">
              <label class="required1">
                店名：
              </label>
            </div>
            <div class="shopregi-item">
              <input type="text" id="shop_name" name="shop_name" >
              @error('shop_name')
              <div class="alert">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="shopregi-grid">
            <div class="shopregi-item-1">
              <label class="required">
                住所：
              </label>
            </div>
            <div class="shopregi-item">
              <input type="text" name="shop_address" value="{{ old('shop_address') }}" >
              @error('shop_address')
              <div class="alert">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="shopregi-grid">
            <div class="shopregi-item-1">
             <label class="required">
                座席数：
              </label>
            </div>
            <div class="shopregi-item">
              <input type="text" name="shop_seat" value="{{ old('shop_seat') }}" >
              @error('shop_seat')
              <div class="alert">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="shopregi-grid">
            <div class="shopregi-item-1">
             <label class="required">
                価格：
              </label>
            </div>
            <div class="shopregi-item">
              <input type="text" name="avarage_price" value="{{ old('avarage_price') }}" >
              @error('avarage_price')
              <div class="alert">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="shopregi-grid">
            <div class="shopregi-item-1">
              <label class="optional">
                店舗画像：
              </label>
            </div>
            <div class="shopregi-item" >
              <input type="file" name="img" value="" >
            </div>
          </div>
          <div class="shopregi-grid">
            <div class="shopregi-item-1">
              <label class="optional">
                一押し商品画像：
              </label>
            </div>
            <div class="shopregi-item" >
              <input type="file" name="img1" value="" >
            </div>
          </div>
          <div class="shopregi-grid">
            <div class="shopregi-item-1">
              <label class="optional">
                一押し商品画像１：
              </label>
            </div>
            <div class="shopregi-item" >
              <input type="file" name="img2" value="" >
            </div>
          </div>
            <div class="shopregi-submit">
              <input type="submit" name="submit" value="新規登録" class="button">
            </div>
          </div>
        </section>
        </div>
      </form>
    </main>
    @include('layout.footer')