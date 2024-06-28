<?php

use yii\helpers\Url;
?>

<a href="<?php echo Url::to(['test/index']); ?>">Back</a>
<h1><?php echo $item['title'] ?></h1>
<p><?php echo $item['content'] ?></p>
<img src="<?php echo $item['image_path'] ?>" width="500" alt="<?php echo $item['title'] ?>_img">
