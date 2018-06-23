<?php
/**
 * Template Name: Custom RSS Template - Events This Week
 */

$postCount = 10; // The number of posts to show in the feed
//$posts = query_posts('showposts=' . $postCount);
header('Content-Type: '.feed_content_type('rss-http').'; charset='.get_option('blog_charset'), true);
echo '<?xml version="1.0" encoding="'.get_option('blog_charset').'"?'.'>';
?>
<rss version="2.0"
        xmlns:content="http://purl.org/rss/1.0/modules/content/"
        xmlns:wfw="http://wellformedweb.org/CommentAPI/"
        xmlns:dc="http://purl.org/dc/elements/1.1/"
        xmlns:atom="http://www.w3.org/2005/Atom"
        xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
        xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
        <?php do_action('rss2_ns'); ?>>
<channel>
        <title><?php bloginfo_rss('name'); ?> - Events This Week Feed</title>
        <atom:link href="<?php self_link(); ?>" rel="self" type="application/rss+xml" />
        <link><?php bloginfo_rss('url') ?></link>
        <description><?php bloginfo_rss('description') ?></description>
        <lastBuildDate><?php echo mysql2date('D, d M Y H:i:s +0000', get_lastpostmodified('GMT'), false); ?></lastBuildDate>
        <language><?php echo get_option('rss_language'); ?></language>
        <sy:updatePeriod><?php echo apply_filters( 'rss_update_period', 'hourly' ); ?></sy:updatePeriod>
        <sy:updateFrequency><?php echo apply_filters( 'rss_update_frequency', '1' ); ?></sy:updateFrequency>
        <?php do_action('rss2_head'); ?>

        <?php
                $params = array(
                        'where'=>'event_date.meta_value > NOW() AND event_date.meta_value <= NOW() + INTERVAL 7 DAY',
                        'limit'=>10,
                        'orderby'=>'event_date.meta_value',
                );
                $eventsThisWeek = pods('event', $params);
                //$z = $eventsThisWeek->display('post_content');
                //$z = '< meep morp robot is not iefficent why do you hate me so much';
                //$z = trim(preg_replace('/ +/', ' ', preg_replace('/[^A-Za-z0-9 ]/', ' ', urldecode(html_entity_decode(strip_tags($z))))));
                //preg_match("/(?:\w+(?:\W+|$)){0,$count}/", $sentence, $matches);
                echo content_to_excerpt_strip_html($z);
                //echo content_to_excerpt($z);
                while ($eventsThisWeek->fetch() ){
                        ?>
<item>
        <title><?php echo $eventsThisWeek->field('event_name'); ?></title>
        <link><?php echo $eventsThisWeek->display('permalink'); ?></link>
        <pubDate><?php echo mysql2date('D, d M Y', $eventsThisWeek->field('event_date'), false); ?></pubDate>
        <dc:creator><?php echo $eventsThisWeek->field('organiser.host_name'); ?></dc:creator>
        <guid isPermaLink="false"><?php echo $eventsThisWeek->display('permalink'); ?></guid>
        <description><?php echo content_to_excerpt_strip_html($eventsThisWeek->display('post_content')); ?></description>
        <content:encoded><?php echo content_to_excerpt_strip_html($eventsThisWeek->display('post_content')); ?></content:encoded>
        <media:content url="<?php $postID = $eventsThisWeek->id(); $thumbID = get_post_thumbnail_id($postID); echo wp_get_attachment_image_src($thumbID,'thumbnail-size', true)[0];?>" />
        <?php rss_enclosure(); ?>
        <?php do_action('rss2_item'); ?></item>
<?php }; ?>
      
 

</channel>
</rss>