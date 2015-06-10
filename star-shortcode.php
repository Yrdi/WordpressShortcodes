<?php
/*Star rating shortcode*/
/*By Thomas Moores*/
add_shortcode('feedback', 'feedback_shortcode');

function feedback_shortcode($atts, $content=null){
    extract(shortcode_atts(array( 
		'rating' => '',
        'class' => 'Defaults-star',
        'class2' => 'Defaults-star-empty',
		'id' => 'yellow',
        'id2' => 'black',
    ), $atts));

    
    if($rating == '5') {
	    $rating = '<i id='.$id.' class='.$class.'></i><i id='.$id.' class='.$class.'></i><i id='.$id.' class='.$class.'></i><i id='.$id.' class='.$class.'></i><i id='.$id.' class='.$class.'></i>';
    }
	if($rating == '4') {
	    $rating = '<i id='.$id.' class='.$class.'></i><i id='.$id.' class='.$class.'></i><i id='.$id.' class='.$class.'></i><i id='.$id.' class='.$class.'></i><i id='.$id2.' class='.$class2.'></i>';
    }
	if($rating == '3') {
	    $rating = '<i id='.$id.' class='.$class.'></i><i id='.$id.' class='.$class.'></i><i id='.$id.' class='.$class.'></i><i id='.$id2.' class='.$class2.'></i><i id='.$id2.' class='.$class2.'></i>';
    }
	if($rating == '2') {
	    $rating = '<i id='.$id.' class='.$class.'></i><i id='.$id.' class='.$class.'></i><i id='.$id2.' class='.$class2.'></i><i id='.$id2.' class='.$class2.'></i><i id='.$id2.' class='.$class2.'></i>';
    }
	if($rating == '1') {
	    $rating = '<i id='.$id.' class='.$class.'></i><i id='.$id2.' class='.$class2.'></i><i id='.$id2.' class='.$class2.'></i><i id='.$id2.' class='.$class2.'></i><i id='.$id2.' class='.$class2.'></i>';
    }
    
    return '<div class="feedback">'. $rating .'</div>';

}
?>