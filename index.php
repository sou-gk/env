<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認君Next</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css" />
  </head>
  <body>
    <section class="hero">
    <div class="hero-body">
      <div class="container">
    <h1 class="title">確認君Next</h1>
    <h2 class="subtitle">IPやブラウザの情報などを簡単に確認できるサービスです。</h2>
      </div>
    </div>
    </section>
    <hr>
    <section class="hero">
    <div class="hero-body">
      <div class="container">
    <h2 class="title">アクセス日時</h2>
    <script>
      const date = new Date(); //現在時刻の取得
      const y = date.getFullYear(), //西暦年
            m = date.getMonth() + 1, //月　
            d = date.getDate(), //日
            H = date.getHours(), //時
            M = date.getMinutes(), //分
            S = date.getSeconds(); //秒
      document.write(y + "/" + m + "/" + d + "/" + "&nbsp" + H + ":" + M + ":" + S); 
    </script>
    <h2 class="title">IP</h2>
    <?php
    echo $_SERVER['HTTP_X_FORWARDED_FOR']
    ?>
    <h2 class="title">ホスト名</h2>
    <?php 
    echo gethostbyaddr( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ;
    ?>
    <h2 class="title">OS</h2>
    <script>
      const ua = window.navigator.userAgent.toLowerCase();
      if (ua.indexOf("windows nt") !== -1) {
        document.write("Windows");
      } else if (ua.indexOf("android") !== -1) {
  document.write("Android");
} else if (ua.indexOf("iphone") !== -1 || ua.indexOf("ipad") !== -1) {
  document.write("iPhone");
} else if (ua.indexOf("mac os x") !== -1) {
  document.write("macOS");
} else {
  document.write("判別できませんでした。他をあたってください。")
}
    </script>
    <h2 class="title">ブラウザ</h2>
    <script>
      const ua2 = window.navigator.userAgent.toLowerCase();

if(ua2.indexOf("edge") !== -1 || ua2.indexOf("edga") !== -1 || ua2.indexOf("edgios") !== -1) {
  document.write("Edge");
} else if (ua2.indexOf("opera") !== -1 || ua2.indexOf("opr") !== -1) {
  document.write("Opera");
} else if (ua2.indexOf("samsungbrowser") !== -1) {
  document.write("Samsung Internet Browser");
} else if (ua2.indexOf("ucbrowser") !== -1) {
  document.write("UC Browser");
} else if(ua2.indexOf("chrome") !== -1 || ua2.indexOf("crios") !== -1) {
  document.write("Chrome");
} else if(ua2.indexOf("firefox") !== -1 || ua2.indexOf("fxios") !== -1) {
  document.write("Firefox");
} else if(ua2.indexOf("safari") !== -1) {
  document.write("Safari");
} else {
  document.write("判別できませんでした。他をあたってください。")
}
    </script>
        <h2 class="title">UA</h2>
        <span id="userAgent"></span>
        <script>
          document.write(window.navigator.userAgent.toLowerCase())
        </script>
      </div>
    </div>
    </section>
    <footer class="footer">(c)2022 sou-gk | 確認君Next</footer>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  </body>
</html>