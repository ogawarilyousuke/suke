<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>
<?php
extract($_POST);
$errors = [];
//名前
if (empty($namae1)) {
  $errors['namae1'] = "名前（姓）が未入力です";
}
if (empty($namae2)) {
  $errors['namae2'] = "名前（名）が未入力です";
}
if (empty($namae3)) {
  $errors['namae3'] = "ふりがな（姓）が未入力です";
}
if (empty($namae4)) {
  $errors['namae4'] = "ふりがな（名）が未入力です";
}
if (empty($address)) {
  $errors['address'] = "住所　が未入力です";
}
if (empty($tel)) {
  $errors['tel'] = "電話番号　が未入力です";
}
if (empty($time)) {
  $errors['time'] = "時間　が未入力です";
}
if (empty($eiga)) {
  $errors['eiga'] = "観覧映画 が未入力です";
}
if (empty($payment)) {
  $errors['payment'] = "支払い方法　が未入力です";
}
?>
<body>
  <div class="container">
    <h1>映画観覧予約フォーム</h1>
    <form action="./konfirn.php" method="post">
      <div class="mb-3 row">
        <label for="last_num" class="col-sm-2 col-form-label">名前(姓)</label>
        <div class="col-sm-10">
          <input type="text" name="last_nnum"
          readonly 
          class="form-control-plaintnext" id="last_num"value="<?php echo $_POST['last_num']; ?>"
          >
        </div>
      </div>
      <div class="mb-3 row">
        <label for="last_num" class="col-sm-2 col-form-label">名前(名)</label>
        <div class="col-sm-10">
          <input type="last_num" class="form-control" id="inputPassword">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="last_num" class="col-sm-2 col-form-label">ふりがな</label>
        <div class="col-sm-10">
          <input type="last_num" class="form-control" id="inputPassword">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="last_num" class="col-sm-2 col-form-label">住所</label>
        <div class="col-sm-10">
          <input type="last_num" class="form-control" id="inputPassword">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="tel" class="col-sm-2 col-form-label">電話番号</label>
        <div class="col-sm-10">
          <input type="tel" class="form-control" id="inputPassword">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="number" class="col-sm-2 col-form-label">席（大人）</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="inputPassword">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="number" class="col-sm-2 col-form-label">席（子ども）</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="inputPassword">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="time" class="col-sm-2 col-form-label">時間</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="time" class="col-sm-2 col-form-label">映画</label>
        <div class="col-sm-10">
          <select class="form-select" name="payment" id="payment">
            <option selected disabled>選択してください</option>
            <option value="ラストサムライ">ラストサムライ</option>
            <option value="ハリーポッター">ハリーポッター</option>
            <option value="ワイルド・スピード">ワイルド・スピード</option>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">支払い方法</label>
        <div class="col-sm-10">
          <select class="form-select" name="payment" id="payment">
            <option selected disabled>選択してください</option>
            <option value="カード">カード</option>
            <option value="現金">現金</option>
            <option value="交通系">交通系</option>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="last_num" class="col-sm-2 col-form-label">会員番号入力</label>
        <div class="col-sm-10">
          <input type="last_num" class="form-control" id="inputPassword">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">職業</label>
        <div class="col-sm-10">
          <div class="form-group">
            <label for="occupation">職業:</label>
            <select class="form-control" id="occupation" name="occupation">
              <option value="学生">学生</option>
              <option value="会社員">会社員</option>
              <option value="自営業">自営業</option>
              <option value="公務員">公務員</option>
              <option value="フリーランス">フリーランス</option>
              <option value="医師">医師</option>
              <option value="看護師">看護師</option>
              <option value="教師">教師</option>
              <option value="エンジニア">エンジニア</option>
              <option value="デザイナー">デザイナー</option>
              <option value="営業">営業</option>
              <option value="アーティスト">アーティスト</option>
              <option value="主婦・主夫">主婦・主夫</option>
              <option value="無職">無職</option>
              <option value="その他">その他</option>
            </select>
          </div>          
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>