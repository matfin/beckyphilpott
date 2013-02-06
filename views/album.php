<section class="content" id="album">
    <h3>
        <?php perch_content('Title'); ?>
    </h3>
    <?php perch_content('Description'); ?>
</section>
<section class="photos">
    <?php
        $photos_region = perch_content('Photos', true);
        $opts = array(
            'skip-template' => true
        );
        $photos = perch_content_custom('Photos', $opts); 
        $photo_count = count($photos);
        $display_photo_index = $photo_index > count($photos) ? 0:$photo_index;
        $photo = $photos[$photo_index];         
    ?>
    <article>
        <h4>
            <?= isset($photo['photo_title']) ? $photo['photo_title']:''; ?>
        </h4>
        <h5>
            <?= isset($photo['photo_client']) && strlen($photo['photo_client']) > 1 ? 'Client:' . $photo['photo_client']:''; ?>
        </h5>
        <?= isset($photo['content']) ? $photo['content']:''; ?>
    </article>
    <ol>
        <?php
            if($display_photo_index > 0)
            {
        ?>
        <li>
            <a href="<?=base_href.'album/'.$album.'/photo/'.($display_photo_index - 1);?>.html" title="Prev photo">
                Prev
            </a>
        </li>
        <?php
            }
        ?>
         <?php
            if($display_photo_index < ($photo_count -1))
            {
        ?>
        <li>
            <a href="<?=base_href.'album/'.$album.'/photo/'.($display_photo_index + 1);?>.html" title="Next photo">
                Next
            </a>
        </li>
        <?php
            }
        ?>
    </ol>
    <img src="<?= base_href.$photo['photo'];?>" alt="<?= isset($photo['photo_title']) ? $photo['photo_title']:'';?>" />
</section>