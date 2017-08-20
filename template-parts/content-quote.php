<?php
/**
 * Template part for displaying quote posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package abstract
 */
?>

<article class="brick entry format-quote animate-this" >
    <div class="entry-thumb">                  
        <blockquote>
          <?php the_excerpt(); ?>
          <cite>Dieter Rams</cite> 
        </blockquote>	          
    </div>   
</article>
