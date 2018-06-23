<?php
   /*
   Plugin Name: PerthPoint ShortCodes
   Plugin URI: http://www.perthpoint.com.au
   description: Some shortcodes and other functions that makes the PerthPoint site more dynamic
   Version: 1.0
   Author: Shashi Ponraja
   Author URI: http://www.perthpoint.com
   License: GPL2
   */

   function eventsByCategory($atts){
 
   	
   	$variables = shortcode_atts( array (
   		'category_slug'=>'None sent',
   		'noeventblurb' => 'No events found',
   	), $atts );
	

   	//echo 'The category sent was ' . $variables['category_slug'] . '<br>';
   	//echo 'The no event blurb was ' . $variables['noeventblurb'] . '<br>';

	   $params = array(
	   		'where'=> "category.slug = '" . $variables['category_slug'] . "' AND final_date.meta_value >= NOW() - INTERVAL 1 DAY",
            'limit'=>10,
            'pagination'=>'true',
            'orderby'=>'event_date.meta_value',

	   );
	   $events = pods('event',$params);

      $signUpText = 'Promote your event with us! <br> <a class="memberButton" style="color: #fff" href="../host-signup"> SIGN UP </a> or <a style="color: #fff" class="memberButton" href="mailto:admin@perthpoint.com.au">E-MAIL</a> us today!';

      $eventsFound = $events->total();
      if ($eventsFound == 0){
         //$text = '<div class="mh-content">';
         $text = $text . $signUpText;


         $params = array(
               'where'=> "category.slug = '" . $variables['category_slug'] . "' AND final_date.meta_value < NOW() - INTERVAL 1 DAY",
               'limit'=>5,
               'orderby'=>'event_date.meta_value DESC',
               'pagination'=>'true',

         );
         $eventsPast = pods('event',$params);
         if ($eventsPast->total() > 0){
            $text = $text . '<br><br><h1>Past events</h1>';
            $text = $text . $eventsPast->template('event-multi');
            $text = $text . $eventsPast->pagination();
         }


      }
      if ( ($eventsFound > 0) && ($eventsFound < 5) ){
         $text = $text . $events->template('event-multi');
         $text = $text . $signUpText;
         $params = array(
               'where'=> "category.slug = '" . $variables['category_slug'] . "' AND final_date.meta_value < NOW() - INTERVAL 1 DAY",
               'orderby'=>'event_date.meta_value',
               'limit'=>5,
               'pagination'=>'true',

         );
         $eventsPast = pods('event',$params);
         if ($eventsPast->total() > 0){
            $text = $text . '<br><br><h1>Past events</h1>';
            $text = $text . $eventsPast->template('event-multi');
            $text = $text . $eventsPast->pagination();
         }

      }

      if ( ($eventsFound >= 5)  ){
         $text = $text . $events->template('event-multi');
         $text = $text . $events->pagination() . '<br>';
         $text = $text . $signUpText;

      }      
      //$text = $text . '</div>';
      return $text;
	   //echo '<br>' . $events->total() . ' events found';

	   //echo '<br>' . $variables['noeventblurb'];
   }

add_shortcode( 'events_list_by_category', 'eventsByCategory' );

add_action('init', 'customRSS');

function customRSS(){
   add_feed('weeklyevents', 'eventsThisWeekFunc');
}

function eventsThisWeekFunc(){
   get_template_part('rss', 'eventsthisweek');
   //echo 'ducks';
}

function content_to_excerpt_strip_html($contentString){
   $z = trim(preg_replace('/ +/', ' ', preg_replace('/[^A-Za-z0-9 ]/', ' ', urldecode(html_entity_decode(strip_tags($contentString))))));
   $count = 10;
   preg_match("/(?:\w+(?:\W+|$)){0,$count}/", $z, $matches);
   return $matches[0];
}

?>
