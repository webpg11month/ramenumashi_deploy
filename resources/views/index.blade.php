@extends('layout.common')
@section('title', 'メイン')
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
      <div class="home-content">
        <form action="{{action('SearchController@search')}}" method="get">
          <div class="ramen-search-nav">
            <div class="anxiy-item">
              <input class="ramen-search-size" type="search" name="shop" placeholder="お店名でさがす" value="">
            </div>
            <div class="anxiy-item">
              <input class="ramen-search-size" type="search" name="area" placeholder="地域" value="">
            </div>
            <div class="anxiy-item">
              <input class="ramen-search-size-date" type="date" name="date" value="">
            </div>
            <div class="anxiy-item">
              <input id="ramen-search-submit" type="submit" value="検索">
            </div>
          </div>
        </form>
      </div>
      <div class="home-content-1">
        <form action="{{action('SearchController@search')}}" method="get">

          <table class="search-table-response">
            <th>
              検索
            </th>
            <tr>
              <td>
                <input type="search" name="shop" value="" placeholder="お店名でさがす">
              </td>
            </tr>
            <th>
              地域検索
            </th>
            <tr>
              <td>
                <input type="search" name="area" value="" placeholder="地域">
              </td>
            </tr>
            <th>
              日付検索
            </th>
            <tr>
              <td>
                <input class="date-search-response" type="date" name="date-search" value="2020-12-22" placeholder="日付">
              </td>
            </tr>
            <tr>
              <td>
                <div class="submit-color">
                  <input class="submit-table-response" type="submit" value="検索">
                </div>
              </td>
            </tr>
          </table>
        </form>
      </div>
          <h1 style="color: aliceblue;background-color: black;text-align: center;">注意事項</h1>
          <h3 style="color: aliceblue;background-color: black;text-align: center;">※必ず店名と地域名を入力してください。最大1000件まで表示可能です。地域の書き方は「XX県XX市」でお願いします。</h3>
    </header>
    <main>
      <h1 id="wrapper-main-login">おすすめラーメン</h1>
      <div class="slider">
        <div  class="slider-content">
         <a class="hover-index" href="shop.html"><img src="img/main/ramen-list.jpg" alt="ラーメン１"></a>
        </div>
        <div class="slider-content">
         <a class="hover-index" href="shop.html"><img src="img/main/ramen-list.jpg" alt="ラーメン２"></a>
        </div>
        <div class="slider-content">
         <a class="hover-index" href="shop.html"><img src="img/main/ramen-list.jpg" alt="ラーメン３"></a>
        </div>
      </div>
      <div class="main-header wrapper">
        <h1 class="main-access">
          アクセス数ランキング
        </h1>
        <!--  グリッド-->
        <div class="main-access-rank">
          <div class="main-access-rank">
            <div id="main-access-item1">
                <h1 class="main-rank-item">1位</h1>
              <a class="hover-index" href="{{ url('/shop') }}"><img src="img/main/ramen-list.jpg" alt="ラーメン"></a>
              <p class="main-rank-text">testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest</p>
            </div>
            <div id="main-access-item2">
                <h1 class="main-rank-item">2位</h1>
              <a class="hover-index" href="{{ url('/shop') }}"><img src="img/main/ramen-list.jpg" alt="ラーメン"></a>
              <p class="main-rank-text">testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest</p>
            </div>
            <div id="main-access-item3">
              <h1 class="main-rank-item">3位</h1>
              <a class="hover-index" href="{{ url('/shop') }}"><img src="img/main/ramen-list.jpg" alt="ラーメン"></a>
              <p class="main-rank-text">testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest
              </p>
            </div>
          </div>
        </div>
          <h1 class="main-access">
            お気に入り登録ランキング
          </h1>
          <div class="main-access-rank">
            <div id="main-access-item4">
                <h1 class="main-rank-item">1位</h1>
              <a class="hover-index" href="{{ url('/shop') }}"><img src="{{asset('storage/image/'.$img)}}" alt="ラーメン１"></a>
              <p class="main-rank-text">testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest
              </p>
            </div>
            <div id="main-access-item5">
                <h1 class="main-rank-item">2位</h1>
              <a class="hover-index" href="{{ url('/shop') }}"><img src="{{asset('storage/image/'.$img1)}}" alt="ラーメン２"></a>
              <p class="main-rank-text">testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest
              </p>
            </div>
            <div id="main-access-item6">
                <h1 class="main-rank-item">3位</h1>
              <a class="hover-index" href="{{ url('/shop') }}"><img src="{{asset('storage/image/'.$img2)}}" alt="ラーメン３"></a>
              <p class="main-rank-text">testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest
              </p>
            </div>
          </div>
        </div>
    </main>
    @include('layout.footer')
    <div id="page_top"><a href="#"></a></div>
  </div>
</body>
</html>