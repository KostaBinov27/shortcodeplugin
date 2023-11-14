<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://codesubmit.io
 * @since      1.0.0
 *
 * @package    Codesubmit_Schedule_Demo
 * @subpackage Codesubmit_Schedule_Demo/public/partials
 */

$timeavaliablehoursfrom   = get_option('timeavaliablehoursfrom');
$timeavaliableminutesfrom = get_option('timeavaliableminutesfrom');
$ampmfrom 				  = get_option('ampmfrom');
$ampmtoo 				  = get_option('ampmtoo');
$timeavaliablehoursto     = get_option('timeavaliablehoursto');
$timeavaliableminutesto   = get_option('timeavaliableminutesto');
$phoneNumber 			  = get_option('phoneNumber');
$days        			  = get_option('days');

$flag = 0;

$todaysDay = date("l");
$hourNow = date('h');
$minutesNow = date('i');

$dateFrom = $timeavaliablehoursfrom.':'.$timeavaliableminutesfrom.' '.$ampmfrom; 
$dateFormP = strtotime($dateFrom);

$dateTo = $timeavaliablehoursto.':'.$timeavaliableminutesto.' '.$ampmtoo; 
$dateToP = strtotime($dateTo);

if (array_search($todaysDay, $days) !== false ) {
    if(time() >= $dateFormP && time() <= $dateToP) {
        $flag = 1;
    }
}

$currentIndex = array_search($todaysDay, $days);

if ($currentIndex !== false) {
    $nextIndex = ($currentIndex + 1) % count($days);
    $nextDay = $days[$nextIndex];
} else {
    $nextDay = $days[0];
}

$nextDay;

?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary_c" data-bs-toggle="modal" data-bs-target="#exampleModal">
  SCHEDULE A DEMO
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <?php if ($flag == 1){ ?>
            <h4>Call us now!</h4>
            <a href="tel:<?php echo $phoneNumber; ?>"><button type="button" class="btn btn-primary_c"><?php echo $phoneNumber; ?></button></a>
        <?php } else { ?>
            <p>Next available demo will be on <?php echo $nextDay; ?> at <?php echo $timeavaliablehoursfrom.':'.$timeavaliableminutesfrom.' '.$ampmfrom; ?></p>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
