<article class="entry">

    <header class="entry-header">

        <h1 class="entry-title">
            <a title="" href="<?php the_permalink() ?>"><?php the_title() ?></a>
        </h1>

        <div class="entry-meta">
            <ul>
                <li><?php the_date() ?></li>
                <span class="meta-sep">•</span>
                <li><a rel="category tag" title="" href="<?php the_permalink() ?>"><?php the_category(' ') ?></a></li>
                <span class="meta-sep">•</span>
                <li><?php the_author_posts_link() ?></li>
            </ul>
        </div>

    </header>

    <div class="entry-content">
        <p><?php the_excerpt() ?></p>
    </div>

</article>