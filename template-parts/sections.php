<?php

// Check value exists.
if( have_rows('page_engine') ):

    // Loop through rows.
    while ( have_rows('page_engine') ) : the_row();

        // Case: Hero layout.
        if( get_row_layout() == 'hero' ):
            get_template_part('template-parts/sections/hero');

        // Case: Spacer layout.
        elseif( get_row_layout() == 'spacer' ):
            get_template_part('template-parts/sections/spacer');
        // Do something...

        // Case: Blog Posts layout.
        elseif( get_row_layout() == 'popular_rooms' ):
            get_template_part('template-parts/sections/popular-rooms');
        // Do something...

        // Case: Service layout.
        elseif( get_row_layout() == 'features' ):
            get_template_part('template-parts/sections/features');
            // Do something...

        // Case: Team layout.
        elseif( get_row_layout() == 'gallery' ):
            get_template_part('template-parts/sections/gallery');
            // Do something...

        // Case: Team layout.
        elseif( get_row_layout() == 'rooms' ):
            get_template_part('template-parts/sections/rooms');
            // Do something...



        endif;

        // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;


