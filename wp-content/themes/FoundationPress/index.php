
            <?php get_header(); ?>

            <section class="medium-8 columns">

                <?php if ( have_posts() ) : ?>

            		<?php do_action( 'foundationpress_before_content' ); ?>

            		<?php while ( have_posts() ) : the_post(); ?>
            			<?php get_template_part( 'content', get_post_format() ); ?>
            		<?php endwhile; ?>

            		<?php else : ?>
            			<?php get_template_part( 'content', 'none' ); ?>

            		<?php do_action( 'foundationpress_before_pagination' ); ?>

            	<?php endif;?>

                <ul class="pagination">
                      <li class="arrow unavailable"><a href="">&laquo;</a></li>
                      <li class="current"><a href="">1</a></li>
                      <li><a href="">2</a></li>
                      <li><a href="">3</a></li>
                      <li><a href="">4</a></li>
                      <li class="unavailable"><a href="">&hellip;</a></li>
                      <li><a href="">12</a></li>
                      <li><a href="">13</a></li>
                      <li class="arrow"><a href="">&raquo;</a></li>
                </ul>
            </section>
            <aside class="medium-4 columns end">
                <div class="widget">
                    <h1>Le cours des trophées de l'eau c'est quoi ?</h1>
                    <p>
                        Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié.
                    </p>
                    <img src="http://placehold.it/285x45">
                </div>
                <div class="widget">
                    <input type="text" placeholder="Recherche">
                </div>
                <div class="widget">
                    <h1>Calendrier</h1>
                    <ul class="calendrier">
                        <li>Appel à la candidature</li>
                        <li>Réunion du jury</li>
                        <li>Vote du comité</li>
                        <li>Vote des internautes</li>
                    </ul>
                </div>
                <div class="widget">
                    <img src="http://placehold.it/280x65">
                </div>
                <div class="widget">
                    <h1>L'agence de l'eau Rhin-Meuse</h1>
                    <p>
                        Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié.
                    </p>
                </div>
                <div class="widget">
                    <img src="http://placehold.it/280x180">
                </div>
                <div class="widget">
                    <img src="http://placehold.it/285x45">
                </div>
                <div class="widget">
                    <ul>
                        <li>Catégorie 1</li>
                        <li>Catégorie 3</li>
                    </ul>
                </div>
                <div class="widget">
                    <h1>Archives</h1>
                    <ul class="archives">
                        <li>Juillet 2012</li>
                        <li>Juillet 2012</li>
                        <li>Juillet 2012</li>
                        <li>Juillet 2012</li>
                        <li>Juillet 2012</li>
                    </ul>
                </div>
            </aside>
    <?php get_footer(); ?>
