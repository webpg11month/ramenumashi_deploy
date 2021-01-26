@extends('layout.common')
@section('title', 'お店一覧')
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
    <main class="main-width">
    </form>
    @foreach ($shops as $shop)
      <section id="location">
        <div class="wrapper">
          <div class="location-map">
            <h2>店舗画像</h2>
            <img class="fade-main" src="{{asset('storage/image/'.$shop->img)}}" alt="ラーメン画像">
          </div>
          <div class="location-info">
              <table id="shop-table" border="5px">
                <h1 id="shop-info">店舗情報</h1>
                <tr>
                  <td class="shop-table-td">店舗名</td>
                  <td class="shop-table-td">{{ $shop->shop_name }}</td>
                </tr>
                <tr>
                  <td class="shop-table-td">残座席数</td>
                  <td class="shop-table-td">{{ $shop->seat }}席</td>
                </tr>
                <tr>
                  <td class="shop-table-td">平均価格</td>
                  <td class="shop-table-td">{{ $shop->avarage_price }}</td>
                </tr>
              </table>
            <div class="main-reserve">
              <form action="{{action('ReserveController@reserve')}}" method="GET">
                <input type="hidden" name="shop_id" value={{ $shop->shop_id }}>
                <input  class="button" id="rese" type="submit" value="予約">
              </form>
              @guest
              @endguest
              @auth
              <form action="{{action('MypageController@okini')}}" method="GET">
                <input type="hidden" name="shop_id" value={{ $shop->shop_id }}>
                <input  class="button" id="rese" type="submit" value="お気に入り">
              </form>
              @endauth
            </div>
          </div>
        </div>
        <div class="wrapper">
          <div class="location-map">
            <h1>住所</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.904429485663!2d135.49409751487664!3d34.70759039035754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e68fe86b593f%3A0x8d2c6ab0eb3b0ba!2z44CSNTMwLTAwMTIg5aSn6Ziq5bqc5aSn6Ziq5biC5YyX5Yy66Iqd55Sw77yS5LiB55uu77yZ4oiS77yS77yQIOWtpuWckuODk-ODqw!5e0!3m2!1sja!2sjp!4v1608088086312!5m2!1sja!2sjp" width="800" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
          <div class="location-info">
            <form action="#">
              <table id="shop-table-1" border="5px">
                <h1>アクセス情報</h1>
                <tr>
                  <td class="shop-table-td">住所</td>
                  <td class="shop-table-td">{{ $shop->shop_address }}</td>
                </tr>
                <tr>
                  <td class="shop-table-td">決済</td>
                  <td class="shop-table-td">JCBオンリー～！！現金不可！！！</td>
                </tr>
                <tr>
                  <td class="shop-table-td">営業時間</td>
                  <td class="shop-table-td">月・火・水・木・金休み～月・火・水・木・金休み～月・火・水・木・金休み～月・火・水・木・金休み～月・火・水・木・金休み～月・火・水・木・金休み～月・火・水・木・金休み～</td>
                </tr>
                <tr>
                  <td class="shop-table-td">電話番号</td>
                  <td class="shop-table-td">090-1111-1111</td>
                </tr>
              </table>
            </form>
          </div>
        </div>
        <hr style="width: 1200px; margin: 0 auto;">
        @endforeach
        <div class="pager-links">
          {{$shops->appends(request()->input())->render()}}

        </div>
      </section>
    </main>
    @include('layout.footer')