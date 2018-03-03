<?php
/*********************************************************************************
 * WP Ultimate CSV Importer is a Tool for importing CSV for the Wordpress
 * plugin developed by Smackcoders. Copyright (C) 2016 Smackcoders.
 *
 * WP Ultimate CSV Importer is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Affero General Public License version 3
 * as published by the Free Software Foundation with the addition of the
 * following permission added to Section 15 as permitted in Section 7(a): FOR
 * ANY PART OF THE COVERED WORK IN WHICH THE COPYRIGHT IS OWNED BY WP Ultimate
 * CSV Importer, WP Ultimate CSV Importer DISCLAIMS THE WARRANTY OF NON
 * INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * WP Ultimate CSV Importer is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
 * or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public
 * License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program; if not, see http://www.gnu.org/licenses or write
 * to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor,
 * Boston, MA 02110-1301 USA.
 *
 * You can contact Smackcoders at email address info@smackcoders.com.
 *
 * The interactive user interfaces in original and modified versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License
 * version 3, these Appropriate Legal Notices must retain the display of the
 * WP Ultimate CSV Importer copyright notice. If the display of the logo is
 * not reasonably feasible for technical reasons, the Appropriate Legal
 * Notices must display the words
 * "Copyright Smackcoders. 2016. All rights reserved".
 ********************************************************************************/
if ( ! defined( 'ABSPATH' ) )
    exit; // Exit if accessed directly
?>

<div class="list-inline pull-right mb10 wp_ultimate_csv_importer_pro">
    <div class="col-md-6 mt10"><a href="https://goo.gl/jdPMW8" target="_blank">Documentation</a></div>
    <div class="col-md-6 mt10"><a href="https://goo.gl/fKvDxH" target="_blank">Sample CSV</a></div>
</div>
<div class="wp_ultimate_csv_importer_pro panel col-md-12" style="font-size:14px; height: 650px;width:99%;">
    <div class="col-md-10" style="text-align:center;width:99%;font-size:15px;margin-top:20px;">If you love WP Ultimate CSV Importer show us your care with a 5-star review on <a style="font-size:15px;" target="_blank"  href ="https://wordpress.org/support/plugin/wp-ultimate-csv-importer/reviews/?rate=5#new-post">wordpress.org!</a></div>
     <div class="col-md-12">
        <div class="col-md-6 col-sm-6 mt40 mb40" style="">
            <fieldset class="scheduler-border"> <legend class="scheduler-border" style="margin-top:15px;">Enquiry form</legend>
                <form class="support-form" type="post" style="margin-top:10px;" action="">
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" id="email" class="form-control" value="" type="text">
                    </div>
                    <div class="form-group">
                        <label>Enquiry type</label>
                        <select name="" id="query" class="selectpicker form-control" data-live-search="false">
                            <option value="Bug Reporting">Bug Reporting</option>
                            <option value="Pre-Sale Enquiry">Pre-Sale Enquiry</option>
                            <option value="Feature Enhancement">Feature Enhancement</option>
                        </select></div>
                    <div class="form-group">
                        <label for="comment">Message</label>
                        <textarea class="form-control" style="height:200px;" rows="5" name="message" id="message"></textarea>
                    </div>
                    <div id="loading" style="opacity:0.7;background-color: #fff;z-index: 99;text-align: center;">
                        <img class="col-md-offset-10 col-sm-offset-9 col-xs-offset-4 mb10" id="loading-image" src="<?php echo plugins_url().'/'.SM_UCI_SLUG ;?>/assets/images/loading.gif" width="24" height="24" alt="Loading" style="display: none;margin-left: 110px;position: absolute;margin-top: 14px;" />
                    </div>

                    <div class="col-md-offset-10 col-sm-offset-9 col-xs-offset-4 mb10">
                        <input name="" id="send" class="smack-btn smack-btn-primary btn-radius" value="Send" onclick="send_support_email();" type="button" style="margin-top:5px;">
                    </div>
                </form>
            </fieldset>
        </div>
        <div class="col-md-6 col-sm-6 mt40 mb40">
            <fieldset class="scheduler-border"> <legend class="scheduler-border" style="margin-top:20px;">News Letter Subscription</legend>
                <div class="form-group">
                    <label>Email</label>
                    <input name="subscribe_email" id="subscribe_email" class="form-control" value="" type="text">
                </div>
                <div id="loading" style="opacity:0.7;background-color: #fff;z-index: 99;text-align: center;">
                    <img class="col-md-offset-10 col-sm-offset-9 col-xs-offset-4 mb10" id="loading-img-subs" src="<?php echo plugins_url().'/'.SM_UCI_SLUG ;?>/assets/images/loading.gif" width="24" height="24" alt="Loading" style="display: none;margin-left: 65px;position: absolute;margin-top: 9px;" />
                </div>
                <div class="col-md-12">
                    <div class="col-md-offset-9 col-sm-offset-7 col-xs-offset-2 mb10">
                        <input name="" id="" class="smack-btn smack-btn-primary btn-radius" value="Subscribe" onclick="send_subscribe_email();" type="button">
                    </div>
                </div>
            </fieldset>
        </div>
        <div style="font-size:15px;" class="col-md-6 col-sm-6 mt40 mb40">
            <div><b>Note</b></div>
            <div class="mt20"><i class="icon-news-paper" style="color:#178D7C;"></i>&nbsp; Subscribe to Smackcoders Mailing list (a few messages a year)</div>
            <div class="mt20"><i class="icon-mail" style="color:#178D7C;"></i>&nbsp;Please draft a mail to support@smackcoders.com. If you doesn't get any acknowledgement within an hour!</div>
        </div>
    </div>
</div>
</div>
