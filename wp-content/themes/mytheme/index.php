<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matt's Site</title>
    <link rel="stylesheet" href="css/styles.css">
    <?php wp_head() ?>
</head>

<body>
    <nav>
        <ul>
            <li>Home</li>
            <li>Locations</li>
            <li>Menu</li>
        </ul>
    </nav>
    <h1>Your Website</h1>
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
    ?>
            <h4><?php the_title() ?></h4>
            <p><?php the_date() ?></p>
            <p>
                <?php the_author() ?>
            </p>
            <p><?php the_excerpt() ?></p>


    <?php
        endwhile;
    endif;
    ?>
    <?php wp_footer() ?>
</body>

</html>