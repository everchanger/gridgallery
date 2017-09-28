<?php 
$repeat = 4;
for($i=0; $i<$repeat; $i++)
    foreach($photos as $photo): ?> 
        <div class="photo">
            <img src="<?=$directory . '\\' .$photo?>">
            <p class="photo-desc">Photo of something cool!</p> 
        </div>
    <?php endforeach; ?>

