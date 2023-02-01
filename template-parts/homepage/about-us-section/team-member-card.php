<aricle class="home-about-us-team-member-wrapper">
    <div class="team-member-portrait-wrapper">

        <button class="team-member-left-button"><img src="<?php echo get_theme_file_uri("/assets/images/svg/arrow-left.svg"); ?>" alt="left button" class="button-icon">
        </button>

        <img src="<?php $teamMemberData->post->image ?>" alt="" class="team-member-image">
        <button class="team-member-right-button"><img src="<?php echo get_theme_file_uri("/assets/images/svg/arrow-right.svg"); ?>" alt="right button" class="button-icon"></button>
    </div>

    <div class="team-member-text-wrapper">
        <p class="team-member-name">
            Jane Doe
        </p>
        <p class="team-member-title">JOB TITLE</p>

        <a href="<?php the_permalink(); ?>" class="team-member-link">details</a>
    </div>

</aricle>