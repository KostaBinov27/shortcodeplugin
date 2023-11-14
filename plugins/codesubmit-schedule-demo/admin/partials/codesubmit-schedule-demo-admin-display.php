<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://codesubmit.io
 * @since      1.0.0
 *
 * @package    Codesubmit_Schedule_Demo
 * @subpackage Codesubmit_Schedule_Demo/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<?php
$days = get_option('days'); 

?>

<div id="wpbody" role="main">
    <div id="wpbody-content">
        <h1>General Settings</h1>
        <form method="post" id="change_settings" enctype="multipart/form-data">
            <h3 class="descriptionString">Please specify your Availabilty</h3>
            <table class="form-table" role="presentation">
                <tbody>
                    <tr>
                        <th scope="row">
                            <label>Availabilty From:</label>
                        </th>
                        <td class="timefrom">
                            <label for="timeavaliablehoursfrom">Hours</label>
                            <input name="timeavaliablehoursfrom" class="timeavaliablehoursfrom" id="timeavaliablehoursfrom" placeholder="8" value="<?php echo get_option('timeavaliablehoursfrom') ?>">:
                            <input name="timeavaliableminutesfrom" class="timeavaliableminutesfrom" placeholder="00" value="<?php echo get_option('timeavaliableminutesfrom') ?>">
                            <select name="ampmfrom" id="ampmfrom">
                                <option <?php if (get_option('ampmfrom') == 'am') { echo 'selected'; } ?> value="am">AM</option>
                                <option <?php if (get_option('ampmfrom') == 'pm') { echo 'selected'; } ?> value="pm">PM</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <label for="time">Availabilty To:</label>
                        </th>
                        <td class="timeto">
                            <label for="timeavaliablehoursto">Hours</label>
                            <input name="timeavaliablehoursto" class="timeavaliablehoursto" placeholder="5" value="<?php echo get_option('timeavaliablehoursto') ?>">:
                            <input name="timeavaliableminutesto" class="timeavaliableminutesto" placeholder="30" value="<?php echo get_option('timeavaliableminutesto') ?>">
                            <select name="ampmtoo" id="ampmtoo">
                                <option value="am" <?php if (get_option('ampmtoo') == 'am') { echo 'selected'; } ?>>AM</option>
                                <option value="pm" <?php if (get_option('ampmtoo') == 'pm') { echo 'selected'; } ?>>PM</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <label for="time">Availabilty Days:</label>
                        </th>
                        <td class="days">
                            <label>Monday</label>
                            <input type='checkbox' name='days[]' value='Monday' <?php if (array_search('Monday', $days) !== false ){ echo 'checked'; } ?>><br>
                            <label>Tuesday</label>
                            <input type='checkbox' name='days[]' value='Tuesday' <?php if (array_search('Tuesday', $days) !== false ){ echo 'checked'; } ?>><br>
                            <label>Wednesday</label>
                            <input type='checkbox' name='days[]' value='Wednesday' <?php if (array_search('Wednesday', $days) !== false){ echo 'checked'; } ?>><br>
                            <label>Thursday</label>
                            <input type='checkbox' name='days[]' value='Thursday' <?php if (array_search('Thursday', $days) !== false){ echo 'checked'; } ?>><br>
                            <label>Friday</label>
                            <input type='checkbox' name='days[]' value='Friday' <?php if (array_search('Friday', $days) !== false){ echo 'checked'; } ?>><br>
                            <label>Saturday</label>
                            <input type='checkbox' name='days[]' value='Saturday' <?php if (array_search('Saturday', $days) !== false){ echo 'checked'; } ?>><br>
                            <label>Sunday</label>
                            <input type='checkbox' name='days[]' value='Sunday' <?php if (array_search('Sunday', $days) !== false){ echo 'checked'; } ?>>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <label>Phone Number</label>
                        </th>
                        <td>
                            <input name="phoneNumber" min="1" class="phonenum" value="<?php echo get_option('phoneNumber') ?>">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <input type="submit" name="saveSchedule" id="saveSchedule" class="button button-primary">
                        </th>
                    </tr>
                </tbody>
            </table>
            <div id="errorMessage" class="d-none"></div>
        </form>
    </div>
</div>
