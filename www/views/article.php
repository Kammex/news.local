<?php foreach ($item as $news): ?>

<h3 align="center"><?php echo $news['title'];?></h3>
<p><?php echo $news['text'];?></p>
<br>
<p align="center"><?php echo $news['art_time_add'];?></p>
<?php endforeach;?>

