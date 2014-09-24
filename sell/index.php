<?php
	require "../ini.php";

if ($_POST["phone"]) {
	try {
		$q = $db->prepare('INSERT into contacts (id, phone, name) values (:id, :phone, :name)');
		$q->bindValue(':id', hash('sha256', $_POST['phone']));
		$q->bindValue(':phone', $_POST['phone']);
		$q->bindValue(':name', $_POST['name']);
		$q->execute();
	} catch (Exception $e) {
		fatal_error($e->getMessage());
	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>VOX - بيع صوتك</title>
  <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet">
<style>
@font-face {
  font-family:'Droid';
  src:url('http://fkr.pirate.tn/DroidKufi-Regular.ttf');
}
body { font-family: Droid; text-align: center}
.btn {font-family: Droid;}
.footer { color:#fff100; background-color:black; }
</style>
  </head>

<body dir="rtl">
<div class="container">
<h1>بيع صوتك</h1>
<form method="post" action=".">
<label>أسم</label>
<input type="text" name="name" />
<label>لقب</label>
<input type="text" name="family" />
<label>رقم الهاتف الجوال</label>
<input type="text" name="phone" />
<br />
<button class="btn btn-large btn-success">بيع</button>
<a href=".." class="btn">بطلت، ما عادش بائع </a>
</form>
<p class="hero-unit">
سجل معطياتك، بش نعرضو صوتك للبيع. الشاري بش يكلمك يقول لك لشكون تعطي صوتك و يبعثلك دينار لايت. إكتب اسمك صحيح، اللقب مش إجباري.
</p>
</div>
</body>
</html>
