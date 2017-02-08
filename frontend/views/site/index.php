<?php

/* @var $this yii\web\View */
$this->title = 'Barcode DEJ/TNF';
?>

<?php
$route1 =  yii::$app->urlManager->createUrl('lotdetail-search/index');
?>
<p><a class="btn btn-lg btn-success" href="<?=$route1?>">Table Lot Details</a></p>

<?php
$route2 =  yii::$app->urlManager->createUrl('machine-search/index');
?>
<p><a class="btn btn-lg btn-success" href="<?=$route2?>">Table Machine</a></p>

<?php
$route3 =  yii::$app->urlManager->createUrl('toola-search/index');
?>
<p><a class="btn btn-lg btn-success" href="<?=$route3?>">Table Tool A ID number</a></p>

<?php
$route4 =  yii::$app->urlManager->createUrl('toolb-search/index');
?>
<p><a class="btn btn-lg btn-success" href="<?=$route4?>">Table Tool B ID number</a></p>

<?php
$route5 =  yii::$app->urlManager->createUrl('toolc-search/index');
?>
<p><a class="btn btn-lg btn-success" href="<?=$route5?>">Table Tool C ID number</a></p>

<?php
$route6 =  yii::$app->urlManager->createUrl('toollife-setvalue-search/index');
?>
<p><a class="btn btn-lg btn-success" href="<?=$route6?>">Table Counter Toollife Set Value</a></p>

<?php
$route7 =  yii::$app->urlManager->createUrl('toollife-value-search/index');
?>
<p><a class="btn btn-lg btn-success" href="<?=$route7?>">Table Counter Toollife Value</a></p>

<?php
$route8 =  yii::$app->urlManager->createUrl('toollife-tor-search/index');
?>
<p><a class="btn btn-lg btn-success" href="<?=$route8?>">Table Counter Toollife Tolerance</a></p>

<?php
$route9 =  yii::$app->urlManager->createUrl('toollife-sc-search/index');
?>
<p><a class="btn btn-lg btn-success" href="<?=$route9?>">Table Counter Toollife PC</a></p>

