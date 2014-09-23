<?php
try {
		$q = $db->prepare('INSERT into contacts (id, phone, name) values (:id, :phone, :name)');
		$q->bindValue(':id', hash('sha256', $_POST['phone']));
		$q->bindValue(':phone', $_POST['phone']);
		$q->bindValue(':name', $_POST['name']);
		$q->execute();
	} catch (Exception $e) {
		die($e->getMessage());
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
<input type="text" />
<label>لقب</label>
<input type="text" />
<label>رقم الهاتف الجوال</label>
<input type="text" />
<br />
<button class="btn btn-large">بيع</button>
</form>
<p class="hero-unit">
سجل معطياتك، بش نعرضو صوتك للبيع. الشاري بش يكلمك يقول لك لشكون تعطي صوتك و يبعثلك دينار لايت. إكتب اسمك صحيح، اللقب مش إجباري.
</p>
</div>
</body>
</html>
