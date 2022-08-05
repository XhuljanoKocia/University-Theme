<?php get_header(); ?>

<?php
    while(have_posts()){
        the_post(); 
        pageBanner(array(
            'title' => 'Hello there this is the title',
            'subtitle' => 'Hi, this is the subtitle',
            'photo' => 'https://images.unsplash.com/photo-1659560555507-f103e2a7c656?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1975&q=80'
          ));
        ?>

        <div class="container container--narrow page-section">

            <div class="generic-content">
                <div class="row group">
                    <div class="one-third">
                        <?php the_post_thumbnail('professorPortrait'); ?>
                    </div>
                    <div class="two-thirds">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>

            <?php
                $relatedPrograms = get_field('related_programs');

                if($relatedPrograms){
                    echo '<hr class="section-break">';
                    echo '<h2 class="headline headline--medium">Subject(s) Taught</h2>';
                    echo '<ul class="link-list min-list">';
                    foreach($relatedPrograms as $program){ ?>
                        <li><a href="<?php echo get_the_permalink($program); ?>"><?php echo get_the_title($program); ?></a></li>
                <?php }
                    echo '</ul>';
                }
            ?>

        </div>
        
    <?php } ?>

<?php get_footer(); ?>