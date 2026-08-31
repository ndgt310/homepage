<?php
require_once 'header.php';
?>
<head>
    <style>
        
img:hover {
  transform: scale(1.1);
}
img {
  width: 150px;
  height: auto;
    margin: 10px;
  /* border: 7px solid #373d7cfb; */
}

/* 拡大表示 */
input:checked + img {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) scale(3);
  z-index: 100;
  box-shadow: 0 0 20px black;
  background: white;
}
input {
  display: none;
}

</style>
</head>

  <body>
<h1>ギャラリー</h1>
        <h3>※クリックで拡大します</h3>

    <div class="profile">  
    <!-- <label>
        <input type="checkbox">
        <img src="1.jpg" alt="プロフィール画像">
    </label> -->
    <label>
        <input type="checkbox">
        <img src="2.jpg" alt="プロフィール画像" width="300">
    </label>   
    </style>
     <label>
        <input type="checkbox">
        <img src="3.jpg" alt="プロフィール画像">
    </label>      

    <label>
        <input type="checkbox">
        <img src="4.jpg" alt="プロフィール画像">
    </label>   

    <label>
        <input type="checkbox">
        <img src="5.jpg" alt="プロフィール画像">
    </label>   

    <br>
    <br>
        <h1><a href="gallery1.html">ネコ</a></h1>
        <h1><a href="gallery3.html">炒飯</a></h1>
    <br>
        <h3><a href="gallery2.html">その他➀</a> </h3>
        <h3>その他➁（準備中）</a> </h3>

</div>
    <p>
      <a href="index.php">トップページに戻る</a>
    </p>
  </div>
    © 2026 Kameyama Tamao All Rights Reserved.
</body>
</html>