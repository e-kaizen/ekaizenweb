<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">
<title>お問い合わせ - KAIZEN.TECH</title>
<meta name="description" content="">
<?php include_once("./meta_items.inc"); ?>
</head>
<body>

<?php include_once("header.inc"); ?>

<div class="cmn_fv">
  <h1 class="cmn_title">
    <span class="cmn_title_main">CONTACT US</span>
    <span class="cmn_title_sub">お問い合わせ</span>
  </h1>
</div>

<div class="cmn_content_wrap">
<div class="cmn_content_wrap_in">

  <div class="cmn_block">
    <h2 class="cmn_block_title"><span>お問い合わせ</span></h2>
    <div class="cmn_block_desc center">
      <p>些細なことでもお気軽にお問い合わせください。</p>
    </div>
  </div>
  <div class="cmn_block">
    <form action="" method="post" class="contact_form">
      <div class="contact_row">
        <div><span>お名前(またはご担当者名) <span>*</span></span></div>
        <div>
          <input type="text" name="name" value="" placeholder="例) 鈴木太郎">
        </div>
      </div>
      <div class="contact_row">
        <div><span>メールアドレス <span>*</span></span></div>
        <div>
          <input type="email" name="email" value="" placeholder="例) email@example.com">
        </div>
      </div>
      <div class="contact_row">
        <div><span>会社名</span></div>
        <div>
          <input type="text" name="company" value="" placeholder="例) 株式会社カイゼンテック">
        </div>
      </div>
      <div class="contact_row">
        <div><span>電話番号</span></div>
        <div>
          <input type="tel" name="tel" value="" placeholder="03-1234-xxxx">
        </div>
      </div>
      <div class="contact_row">
        <div><span>お問い合わせ内容 <span>*</span></span></div>
        <div>
          <textarea name="message" placeholder=""></textarea>
        </div>
      </div>
      <div class="contact_row">
        <div></div>
        <div class="contact_submit_cel">
          <input type="submit" value="この内容をお問い合わせを送信">
        </div>
      </div>
    </form>
  </div>

</div>
</div>

<?php include_once("footer.inc"); ?>

</body>
</html>


