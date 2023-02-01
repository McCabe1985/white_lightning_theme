<?php
$count  = 1;

$teamMemberData = new WP_Query(array(
    "posts_per_page" => 1,
    "post_type" => "team_member"
));

while ($teamMemberData->have_posts()) {
    $teamMemberData->the_post();
?>

    <aricle class="home-about-us-team-member-wrapper">
        <div class="team-member-portrait-wrapper">

            <button class="team-member-left-button"><img src="<?php echo get_theme_file_uri("/assets/images/svg/arrow-left.svg"); ?>" alt="left button" class="button-icon">
            </button>

            <img src="<?php the_field("employee_portrait"); ?>" alt="" class="team-member-image">
            <button class="team-member-right-button"><img src="<?php echo get_theme_file_uri("/assets/images/svg/arrow-right.svg"); ?>" alt="right button" class="button-icon"></button>
        </div>

        <div class="team-member-text-wrapper">
            <p class="team-member-name">
                <?php the_field("employee_name"); ?>
            </p>
            <p class="team-member-title"><?php echo the_field("job_title"); ?></p>

            <a href="<?php the_permalink(); ?>" class="team-member-link">details</a>
        </div>

    </aricle>

<?php } ?>


<!--
    the_field("job_title");
-->