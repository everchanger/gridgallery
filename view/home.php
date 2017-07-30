<?php 
foreach($photos as $photo): ?> 
    <div class="photo">
        <img src="<?=$photo?>">
        <p class="photo-desc">Photo of something cool!</p> 
    </div>
<?php endforeach; ?>

