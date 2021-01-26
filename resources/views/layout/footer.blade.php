@section('footer')
<footer class="footer">
    <h1 class="footer-umashi">RamenUmashi</h1>
    <nav class="footer-nav-list">
      <ul class="footer-nav">
        <li>
          <a class="footer-link1-1" href="{{ url('/contact') }}">
            お問い合わせ
          </a>
        </li>
        <li>
          <a class="footer-link1-1" href="{{ url('/role') }}">サービス利用規約</a>
        </li>
        <li>
          <a class="footer-link1-1" href="{{ url('/privacy') }}">個人情報保護方針</a>
        </li>
        <li>
          <a class="footer-link1-1" href="{{ url('/privacy3') }}">個人情報だの第三者提供方針</a>
        </li>
        <li>
          <a class="footer-link1-1" href="{{ url('/help') }}">ヘルプ</a>
        </li>
        <li>
          <a class="footer-link1-1" href="{{ url('/cancellation') }}">解約</a>
        </li>
      </ul>
    </nav>
    <nav class="footer-nav-list-1">
      <ul class="footer-nav-1">
        <li>
          <a class="footer-link2-1" href="https://twitter.com">
            <i class="fab fa-twitter-square fa-6x"></i>
          </a>
          <p>Twitter</p>
        </li>
        <li>
          <a class="footer-link1-1" href="https://www.instagram.com/?hl=ja"><i class="fab fa-instagram fa-6x"></i></a>
          <p>instagram</p>
        </li>
        <li>
          <a class="footer-link1-1" href="https://ja-jp.facebook.com"><i class="fab fa-facebook-f fa-6x"></i></a>
          <p>FaceBook</p>
        </li>
      </ul>
    </nav>
    <div class="footer-cp">
      <small class="footer-umashi-1">© 2020 RamenCP UmashiGP Inc.
      </small>
    </div>
</footer>
<div id="page_top"><a href="#"></a></div>
</div>
<script type="text/javascript" src="check.js"></script>
@endsection