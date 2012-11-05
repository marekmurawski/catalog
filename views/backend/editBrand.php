<?php
if (!defined('IN_CMS')) { exit(); }

/**
 * Catalog
 * 
 * @author Nic Wortel <nd.wortel@gmail.com>
 * 
 * @file        /views/backend/editBrand.php
 * @date        17/09/2012
 */
?>
<h1><?php echo __(ucfirst($action).' brand'); ?></h1>

<form method="post" action="<?php if ($action == 'add') echo get_url('plugin/catalog/brand/add'); else echo get_url('plugin/catalog/brand/edit/' . $brand->id); ?>">
    <table border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td class="label"><label for="brand_name"><?php echo __('Name'); ?></label></td>
                <td class="field"><input class="textbox" type="text" name="brand[name]" id="brand_name" value="<?php echo $brand->name; ?>" /></td>
            </tr>
            <tr>
                <td class="label"><label for="brand_description"><?php echo __('Description'); ?></label></td>
                <td class="field">
                    <textarea class="textarea" name="brand[description]" id="brand_description"><?php echo $brand->description; ?></textarea>
                </td>
            </tr>
            <tr>
                <td class="label"><label for="brand_website"><?php echo __('Website URL'); ?></label></td>
                <td class="field"><input class="textbox" type="text" name="brand[website]" id="brand_website" value="<?php echo $brand->website; ?>" /></td>
            </tr>
        </tbody>
    </table>
    
    <p class="buttons">
        <input class="button" name="commit" type="submit" accesskey="s" value="<?php echo __('Save and Close'); ?>" />
        <input class="button" name="continue" type="submit" accesskey="e" value="<?php echo __('Save and Continue Editing'); ?>" />
        <?php echo __('or'); ?> <a href="<?php echo get_url('plugin/catalog/brands'); ?>"><?php echo __('Cancel'); ?></a>
    </p>
</form>