<?php
/* Template name : qqch*/
get_header();
?>

<div class="publications-category-page">
    <h1>Publications</h1>
    <?php
    // Arguments pour la requête WP_Query
    $args = array(
        'post_type' => 'publication',
        'posts_per_page' => 10, // Ajustez selon vos besoins
        'category_name' => 'non-classe', // Remplacez par le slug de la catégorie
    );

    // La boucle WP_Query
    $publications_query = new WP_Query($args);

    if ($publications_query->have_posts()) :
        while ($publications_query->have_posts()) : $publications_query->the_post();
            // Récupérer les champs personnalisés
            $sujet_publication = get_field('sujet_publication');
            $date_de_larticle = get_field('date_de_larticle');
            $image_publication = get_field('image_publication');
            $commentaire_publication = get_field('commentaire_publication');
            $image_seconde = get_field('image_seconde');
            $commentaire_seconde_publication = get_field('commentaire_seconde_publication');
            ?>
            <div class="publication">
                <h2><?php echo esc_html(get_field('Titre_publication')); ?></h2>
                <p><strong>Sujet:</strong> <?php echo esc_html($sujet_publication); ?></p>
                <p><strong>Date de l'article:</strong> <?php echo esc_html($date_de_larticle); ?></p>
                
                <div class="publication-content">
                    <?php the_content(); ?>
                </div>
                
                <?php if ($image_publication) : ?>
                    <div class="publication-thumbnail">
                        <img src="<?php echo esc_url($image_publication['url']); ?>" alt="<?php echo esc_attr($image_publication['alt']); ?>" />
                    </div>
                <?php endif; ?>

                <p><strong>Commentaire:</strong> <?php echo esc_html($commentaire_publication); ?></p>

                <?php if ($image_seconde) : ?>
                    <div class="publication-extra-image">
                        <img src="<?php echo esc_url($image_seconde['url']); ?>" alt="<?php echo esc_attr($image_seconde['alt']); ?>" />
                    </div>
                <?php endif; ?>

                <p><strong>Second Commentaire:</strong> <?php echo esc_html($commentaire_seconde_publication); ?></p>
            </div>
            <?php
        endwhile;

        // Pagination
        the_posts_pagination();

        wp_reset_postdata();
    else :
        ?>
        <p>Aucune publication trouvée.</p>
        <?php
    endif;
    ?>
</div>

<?php
get_footer();