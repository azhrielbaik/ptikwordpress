<?php 
/**
Template Name: Frontpage
*/

get_header();

// get_template_part('template-parts/sections/section','profile');
get_template_part('template-parts/sections/section','banner');
get_template_part('template-parts/sections/section','education');
get_template_part('template-parts/sections/section','experience');
get_template_part('template-parts/sections/section','aboutus');

get_footer(); ?>