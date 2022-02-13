<article class="bgrid">

    <h5><?php the_date() ?></h5>
    <h3><a href=<?php the_permalink() ?>"><?php the_title() ?></a></h3>
    <h5><?= get_post_format() ?></h5>
    <?php the_post_thumbnail('puremedia-thumb') ?>

    <?php if (get_post_format() != 'image' && get_post_format() != 'gallery') : ?>
        <p>
            <?php the_excerpt() ?>
        </p>
    <?php endif; ?>
</article>