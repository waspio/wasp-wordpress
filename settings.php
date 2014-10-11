<?php
/**
 * settings.php
 *
 * @author Wasp.io
 * @version 2.1.6
 * @date 03-Oct-2014
 * @package Wasp for Wordpress
 **/
?>
<div class="wrap">

    <h2><img src="<?php echo WASP_LOGO; ?>" /> Wasp.io Settings</h2>
    
    <p>Wasp.io automatically tracks errors generated by your applications, intelligently notifies your team, and provides realtime data feeds of errors and activity for all of your websites.</p>
    
    <p></p>

    <form method="post" action="options.php">
        <table class="form-table">
        <?php
        $checkkey = get_option( 'wasp_api_key' );
        if( empty( $checkkey ) || isset( $_GET['changekey'] ) )
        {
            settings_fields( 'wasp-install-group' );
            do_settings_sections( 'wasp-install-group' );
        ?>

            <tr valign="top">
                <th scope="row">Project API Key</th>
                <td>
                    <input type="text" name="wasp_api_key" value="<?php echo get_option( 'wasp_api_key' ); ?>" autofocus="autofocus" />
                    <br />
                    <p class="description">Enter your project API key found in your <a href="https://wasp.io/dashboard/">Wasp project settings</a></p>
                </td>
            </tr>

        <?php
        }
        else
        {

            settings_fields( 'wasp-settings-group' );
            do_settings_sections( 'wasp-settings-group' );
        ?>

            <tr valign="top">
                <th scope="row">
                    <label>Activate Wasp Logging</label>
                </th>
                <td>
                    <select name="wasp_active_status">
                        <option value="0"<?php echo get_option( 'wasp_active_status' ) == 0 ? ' selected="selected"' : ''; ?>>No</option>
                        <option value="1"<?php echo get_option( 'wasp_active_status' ) == 1 ? ' selected="selected"' : ''; ?>>Yes</option>
                    </select>
                    <br />
                    <p class="description"><a href="admin.php?page=wasp-settings&changekey=true">You may change your API key here</a></p>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">Project Environment</th>
                <td>
                    <input type="text" name="wasp_project_environment" value="<?php echo get_option( 'wasp_project_environment' ); ?>" placeholder="Production" />
                    <br />
                    <p class="description">Your user defined environment for this project</p>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">Hosts to Ignore</th>
                <td>
                    <input type="text" name="wasp_ignored_domains" value="<?php echo get_option( 'wasp_ignored_domains' ); ?>" placeholder="localhost, dev.yoursite" />
                    <br />
                    <p class="description">A comma separated list of domains to ignore (without http/s or www)</p>
                </td>
            </tr>
            
            <tr valign="top">
                <th scope="row">Data to Filter</th>
                <td>
                    <input type="text" name="wasp_filters" value="<?php echo get_option( 'wasp_filters' ); ?>" placeholder="creditcard, private_info, etc..." />
                    <br />
                    <p class="description">A comma separated list of $_SESSION or $_POST variables to strip.  Useful for credit card processing, or other sensitive data.  This is for the input name, or key, and will retain the key while removing the value.</p>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">Track Logged In Users</th>
                <td>
                    <select name="wasp_track_users">
                        <option value="0"<?php echo get_option( 'wasp_track_users' ) == 0 ? ' selected="selected"' : ''; ?>>No</option>
                        <option value="1"<?php echo get_option( 'wasp_track_users' ) == 1 ? ' selected="selected"' : ''; ?>>Yes</option>
                    </select>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">Track 404 Errors</th>
                <td>
                    <select name="wasp_track_404">
                        <option value="0"<?php echo get_option( 'wasp_track_404' ) == 0 ? ' selected="selected"' : ''; ?>>No</option>
                        <option value="1"<?php echo get_option( 'wasp_track_404' ) == 1 ? ' selected="selected"' : ''; ?>>Yes</option>
                    </select>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">Track JavaScript Errors</th>
                <td>
                    <select name="wasp_track_js">
                        <option value="0"<?php echo get_option( 'wasp_track_js' ) == 0 ? ' selected="selected"' : ''; ?>>No</option>
                        <option value="1"<?php echo get_option( 'wasp_track_js' ) == 1 ? ' selected="selected"' : ''; ?>>Yes</option>
                    </select>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">Track Ajax Errors</th>
                <td>
                    <select name="wasp_track_ajax">
                        <option value="0"<?php echo get_option( 'wasp_track_ajax' ) == 0 ? ' selected="selected"' : ''; ?>>No</option>
                        <option value="1"<?php echo get_option( 'wasp_track_ajax' ) == 1 ? ' selected="selected"' : ''; ?>>Yes</option>
                    </select>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">Error Types to <strong>Ignore</strong></th>
                <td>
                <div style="height: 200px; overflow: auto;">
                    <?php
                    $ignored = get_option( 'wasp_ignored_levels' );
                    global $wasp_levels;
                    foreach( $wasp_levels as $label => $level )
                    {
                        $sel = '';
                        if( is_array( $ignored ) && in_array( $level, $ignored ) )
                        {
                            $sel = ' checked="checked"';
                        }
                        echo '<input type="checkbox" name="wasp_ignored_levels[]" value="'.$level.'" id="wasplevel_'.$level.'"'.$sel.'> <label for="wasplevel_'.$level.'">'.$label.'</label><br />';
                    }
                    ?>
                </div>
                </td>
            </tr>

        <?php
        }
        ?>

        </table>

        <?php submit_button(); ?>

    </form>
</div>