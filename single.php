
<?php get_header(); ?>
<main class="wrap">
    <div class="elementor-element elementor-custom-grid e-con e-grid e-con-boxed e-parent e-lazyloaded">
        <div class="e-con-inner">
            <div class="elementor-element e-con e-child">
                <div class="i2g-blog-post">
                    <?php
                        $latest_post = get_post_complete(1, get_the_ID(), null, 'i2g-post-header-default-size');
                    ?>
                    <img src="<?=$latest_post[0]['image'];?>"/>

                    <div class="content">
                        <p class="reading-time">Lesezeit: <?=$latest_post[0]['reading_time'];?> Min</p>
                        <h1><?=$latest_post[0]['post']->post_title;?></h1>
                        <?php
                            if($latest_post[0]['post']->post_type === 'i2c_reference') {
                                ?>
                                <div class="i2c-meta-info mb-4">
                                    <div class="row">
                                        <div class="col-6">
                                            <strong>Kunde:</strong>&nbsp;<?=$latest_post[0]['meta']['referenz_kunde'][0];?><br/>
                                            <strong>Zeitraum:</strong>&nbsp;<?=$latest_post[0]['meta']['referenz_zeitraum'][0];?>
                                        </div>
                                        <div class="col-6">
                                            <strong>Projekttyp:</strong>&nbsp;<?=$latest_post[0]['meta']['referenz_projekttyp'][0];?><br/>
                                            <strong>Branche:</strong>&nbsp;<?=$latest_post[0]['meta']['referenz_branche'][0];?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        ?>
                        <div class="post-content">
                            <?=$latest_post[0]['post']->post_content;?>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="e-con-inner">
            <div class="elementor-element e-con e-child">
                <div class="elementor-content-blog-widget">
                    <div class="i2g-block-abstract">
                        <div class="content content-center">
                            <?php
                            if($latest_post[0]['post']->post_type === 'i2c_reference') {
                                ?>
                                <h1 class="text-center">weitere Projekte / Referenzen</h1>
                                <div class="i2g-blog-post-tiles cols-50">
                                    <?php
                                    $posts = get_post_complete(2, 0, get_the_ID(), 'i2g-post-tile-big-size', 'i2c_reference');
                                    foreach($posts as $post) {
                                        ?>
                                        <div class="i2g-blog-post-tile" style="background-image: url(<?=$post['image'];?>)">
                                            <a href="<?=$post['post']->guid;?>">
                                                <div class="content">
                                                    <p class="reading-time">Lesezeit: <?=$post['reading_time'];?> Min</p>
                                                    <h2><?=$post['post']->post_title;?></h2>
                                                    <p><?=$post['excerpt'];?></p>
                                                    <p class="tile-link">
                                                        <a href="<?=$post['post']->guid;?>">
                                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M8.25 4.23999C8.25 3.97477 8.14464 3.72042 7.95711 3.53288C7.76957 3.34535 7.51522 3.23999 7.25 3.23999H3.75C2.95435 3.23999 2.19129 3.55606 1.62868 4.11867C1.06607 4.68128 0.75 5.44434 0.75 6.23999V14.24C0.75 15.0356 1.06607 15.7987 1.62868 16.3613C2.19129 16.9239 2.95435 17.24 3.75 17.24H11.75C12.5456 17.24 13.3087 16.9239 13.8713 16.3613C14.4339 15.7987 14.75 15.0356 14.75 14.24V11.74C14.75 11.4748 14.6446 11.2204 14.4571 11.0329C14.2696 10.8453 14.0152 10.74 13.75 10.74C13.4848 10.74 13.2304 10.8453 13.0429 11.0329C12.8554 11.2204 12.75 11.4748 12.75 11.74V14.24C12.75 14.5052 12.6446 14.7596 12.4571 14.9471C12.2696 15.1346 12.0152 15.24 11.75 15.24H3.75C3.48478 15.24 3.23043 15.1346 3.04289 14.9471C2.85536 14.7596 2.75 14.5052 2.75 14.24V6.23999C2.75 5.97477 2.85536 5.72042 3.04289 5.53288C3.23043 5.34535 3.48478 5.23999 3.75 5.23999H7.25C7.51522 5.23999 7.76957 5.13463 7.95711 4.9471C8.14464 4.75956 8.25 4.50521 8.25 4.23999Z" fill="#4E87C4"/>
                                                                <path d="M6.75005 12.74C6.94722 12.7415 7.14266 12.7034 7.32477 12.6278C7.50687 12.5522 7.67191 12.4407 7.81005 12.3L14.2801 5.85005C14.3025 5.82613 14.3296 5.80707 14.3597 5.79404C14.3898 5.78101 14.4223 5.77429 14.4551 5.77429C14.4879 5.77429 14.5203 5.78101 14.5504 5.79404C14.5805 5.80707 14.6076 5.82613 14.6301 5.85005L16.4001 7.61005C16.4447 7.65809 16.4989 7.69625 16.5592 7.72208C16.6195 7.74792 16.6845 7.76085 16.7501 7.76005C16.8126 7.77422 16.8775 7.77422 16.9401 7.76005C17.0314 7.72254 17.1095 7.65884 17.1647 7.57698C17.2199 7.49512 17.2496 7.39876 17.2501 7.30005V1.30005C17.2501 1.16744 17.1974 1.04026 17.1036 0.946496C17.0098 0.852727 16.8827 0.800049 16.7501 0.800049H10.7501C10.6513 0.800542 10.555 0.830243 10.4731 0.885409C10.3913 0.940576 10.3276 1.01874 10.2901 1.11005C10.2507 1.20046 10.2402 1.30079 10.2598 1.39741C10.2795 1.49402 10.3285 1.58224 10.4001 1.65005L12.1601 3.41005C12.2033 3.46029 12.228 3.52381 12.2301 3.59005C12.2265 3.65597 12.202 3.71903 12.1601 3.77005L5.69005 10.18C5.54976 10.3186 5.43838 10.4837 5.36236 10.6657C5.28634 10.8476 5.24719 11.0428 5.24719 11.24C5.24719 11.4372 5.28634 11.6325 5.36236 11.8144C5.43838 11.9964 5.54976 12.1615 5.69005 12.3C5.8282 12.4407 5.99324 12.5522 6.17534 12.6278C6.35744 12.7034 6.55289 12.7415 6.75005 12.74Z" fill="#4E87C4"/>
                                                            </svg>
                                                            <span>mehr erfahren</span>
                                                        </a>

                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                <?php
                            }
                            else {
                                ?>
                                <h1 class="text-center">Ähnliche Artikel</h1>
                                <div class="i2g-blog-post-tiles cols-50">
                                    <?php
                                    $posts = get_post_complete(2, 0, get_the_ID(), 'i2g-post-tile-big-size');
                                    foreach($posts as $post) {
                                        ?>
                                        <div class="i2g-blog-post-tile" style="background-image: url(<?=$post['image'];?>)">
                                            <a href="<?=$post['post']->guid;?>">
                                                <div class="content">
                                                    <p class="reading-time">Lesezeit: <?=$post['reading_time'];?> Min</p>
                                                    <h2><?=$post['post']->post_title;?></h2>
                                                    <p><?=$post['excerpt'];?></p>
                                                    <p class="tile-link">
                                                        <a href="<?=$post['post']->guid;?>">
                                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M8.25 4.23999C8.25 3.97477 8.14464 3.72042 7.95711 3.53288C7.76957 3.34535 7.51522 3.23999 7.25 3.23999H3.75C2.95435 3.23999 2.19129 3.55606 1.62868 4.11867C1.06607 4.68128 0.75 5.44434 0.75 6.23999V14.24C0.75 15.0356 1.06607 15.7987 1.62868 16.3613C2.19129 16.9239 2.95435 17.24 3.75 17.24H11.75C12.5456 17.24 13.3087 16.9239 13.8713 16.3613C14.4339 15.7987 14.75 15.0356 14.75 14.24V11.74C14.75 11.4748 14.6446 11.2204 14.4571 11.0329C14.2696 10.8453 14.0152 10.74 13.75 10.74C13.4848 10.74 13.2304 10.8453 13.0429 11.0329C12.8554 11.2204 12.75 11.4748 12.75 11.74V14.24C12.75 14.5052 12.6446 14.7596 12.4571 14.9471C12.2696 15.1346 12.0152 15.24 11.75 15.24H3.75C3.48478 15.24 3.23043 15.1346 3.04289 14.9471C2.85536 14.7596 2.75 14.5052 2.75 14.24V6.23999C2.75 5.97477 2.85536 5.72042 3.04289 5.53288C3.23043 5.34535 3.48478 5.23999 3.75 5.23999H7.25C7.51522 5.23999 7.76957 5.13463 7.95711 4.9471C8.14464 4.75956 8.25 4.50521 8.25 4.23999Z" fill="#4E87C4"/>
                                                                <path d="M6.75005 12.74C6.94722 12.7415 7.14266 12.7034 7.32477 12.6278C7.50687 12.5522 7.67191 12.4407 7.81005 12.3L14.2801 5.85005C14.3025 5.82613 14.3296 5.80707 14.3597 5.79404C14.3898 5.78101 14.4223 5.77429 14.4551 5.77429C14.4879 5.77429 14.5203 5.78101 14.5504 5.79404C14.5805 5.80707 14.6076 5.82613 14.6301 5.85005L16.4001 7.61005C16.4447 7.65809 16.4989 7.69625 16.5592 7.72208C16.6195 7.74792 16.6845 7.76085 16.7501 7.76005C16.8126 7.77422 16.8775 7.77422 16.9401 7.76005C17.0314 7.72254 17.1095 7.65884 17.1647 7.57698C17.2199 7.49512 17.2496 7.39876 17.2501 7.30005V1.30005C17.2501 1.16744 17.1974 1.04026 17.1036 0.946496C17.0098 0.852727 16.8827 0.800049 16.7501 0.800049H10.7501C10.6513 0.800542 10.555 0.830243 10.4731 0.885409C10.3913 0.940576 10.3276 1.01874 10.2901 1.11005C10.2507 1.20046 10.2402 1.30079 10.2598 1.39741C10.2795 1.49402 10.3285 1.58224 10.4001 1.65005L12.1601 3.41005C12.2033 3.46029 12.228 3.52381 12.2301 3.59005C12.2265 3.65597 12.202 3.71903 12.1601 3.77005L5.69005 10.18C5.54976 10.3186 5.43838 10.4837 5.36236 10.6657C5.28634 10.8476 5.24719 11.0428 5.24719 11.24C5.24719 11.4372 5.28634 11.6325 5.36236 11.8144C5.43838 11.9964 5.54976 12.1615 5.69005 12.3C5.8282 12.4407 5.99324 12.5522 6.17534 12.6278C6.35744 12.7034 6.55289 12.7415 6.75005 12.74Z" fill="#4E87C4"/>
                                                            </svg>
                                                            <span>mehr erfahren</span>
                                                        </a>

                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                <?php
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
<?php
function get_post_complete($option=1, $post_id=0, $exclude_id=null, $media_size='i2g-post-tile-default-size', $post_type='post') {
    $exclude_ids = [];
    if($exclude_id) {
        $exclude_ids[] = $exclude_id;
    }

    $words_per_minute = 238;
    $args = array(
        'numberposts' => $option,
        'category' => 0,
        'orderby' => 'date',
        'exclude' => $exclude_ids,
        'order' => 'DESC',
        'post_type' => $post_type,
        'suppress_filters' => true,
    );

    $default_image = "/wp-content/themes/spdwp/assets/images/news_default.jpg";
    if($post_id > 0) {
        $posts[] = get_post($post_id);
    } else {
        $posts = get_posts($args);
    }

    $out = [];
    foreach($posts as $post) {
        $n_post = ['post' => [],'image' => []];
        $n_post['post'] = $post;

        $attached_media = get_attached_media('image', $post->ID);
        if(count($attached_media) > 0) {
            foreach ($attached_media as $media) {
                $n_post['image'] = wp_get_attachment_image_url($media->ID, $media_size);
            }
        } else {
            preg_match("/<!-- wp:image {\"id\":(\d+),.*} -->/is", $post->post_content, $matches);
            if(count($matches) > 0) {
                $post->post_content = preg_replace('/<!-- wp:image .* -->.*<!-- \/wp:image -->/is','', $post->post_content);
                $n_post['image'] = wp_get_attachment_image_url($matches[1], $media_size);
            } else {
                preg_match("/<a.*rel=\"attachment wp-att-(\d+)\">.*<\/a>/is", $post->post_content, $matches_alt);
                if(count($matches_alt) > 0) {
                    $post->post_content = preg_replace('/<a.*rel=\"attachment wp-att-\d+\">.*<\/a>/is','', $post->post_content);
                    $n_post['image'] = wp_get_attachment_image_url($matches_alt[1], $media_size);
                } else {
                    $n_post['image'] = $default_image;
                }
            }
        }

        //get metadata
        $n_post['meta'] = [];
        if($post->post_type === 'i2c_reference') {
            $meta = get_post_meta($post->ID);
            $n_post['meta'] = $meta;
        }

        $bare_text = strip_tags($post->post_content);
        $wordlist = explode(" ", $bare_text);
        $sentences = explode('.', $bare_text);
        $excerpt = strlen($sentences[0]) < 140 ? $sentences[0]."." : substr($sentences[0], 0, 140)."...";
        $reading_time = ceil(count($wordlist) / $words_per_minute);
        $n_post['reading_time'] = $reading_time;
        $n_post['excerpt'] = $excerpt;
        $out[] = $n_post;
    }
    return $out;
}
?>
<?php
var_dump("1");
var_dump(get_query_var('name'), get_query_var('lang'), get_the_ID());
#exit;
?>
