<?php

function cm_admin_add_taxonomy_page( $post_types ) { ?>

    <div class="wrap cm-wrap">
        <div class="icon32" id="icon-edit"><br></div>
        <h2><?php _e('Add Taxonomy', 'custommanager'); ?></h2>
        <form action="" method="post" class="cm-taxonomy">
            <?php wp_nonce_field( 'cm_submit_taxonomy_verify', 'cm_submit_taxonomy_secret' ); ?>
            <input type="hidden" name="cm-admin-add-taxonomy-page" value="" />
            <div class="cm-wrap-left">
                <div class="cm-table-wrap">
                    <div class="cm-arrow"><br></div>
                    <h3 class="cm-toggle"><?php _e('Taxonomy', 'custommanager') ?></h3>
                    <table class="form-table <?php do_action('cm_invalid_field_taxonomy'); ?>">
                        <tr>
                            <th>
                                <label for="post_type"><?php _e('Taxonomy', 'custommanager') ?> <span class="cm-required">( <?php _e('required', 'custommanager'); ?> )</span></label>
                            </th>
                            <td>
                                <input type="text" name="taxonomy" value="<?php echo( $_POST['taxonomy'] ); ?>">
                                <span class="description"><?php _e('The system name of the taxonomy. Alphanumeric characters and underscores only. Min 2 letters. Once added the taxonomy system name cannot be changed.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="cm-table-wrap">
                    <div class="cm-arrow"><br></div>
                    <h3 class="cm-toggle"><?php _e('Post Type', 'custommanager') ?></h3>
                    <table class="form-table <?php do_action('cm_invalid_field_object_type'); ?>">
                        <tr>
                            <th>
                                <label for="object_type"><?php _e('Post Type', 'custommanager') ?> (<span class="cm-required"> required </span>)</label>
                            </th>
                            <td>
                                
                                <select name="object_type[]" multiple="multiple" class="cm-object-type">
                                <?php if ( !empty( $post_types )): ?>
                                    <?php foreach( $post_types as $post_type ): ?>
                                        <option value="<?php echo ( $post_type ); ?>" <?php foreach ( $_POST['object_type'] as $post_value ) { if ( $post_value == $post_type ) echo( 'selected="selected"' ); } ?>><?php echo( $post_type ); ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                </select>
                                
                                <span class="description"><?php _e('Select one or more post types to add this taxonomy to.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="cm-table-wrap">
                    <div class="cm-arrow"><br></div>
                    <h3 class="cm-toggle"><?php _e('Labels', 'custommanager') ?></h3>
                    <table class="form-table">
                        <tr>
                            <th>
                                <label for="name"><?php _e('Name', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="labels[name]" value="<?php echo( $_POST['labels']['name'] ); ?>">
                                <span class="description"><?php _e('General name for the taxonomy, usually plural.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="singular_name"><?php _e('Singular Name', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="labels[singular_name]" value="<?php echo( $_POST['labels']['singular_name'] ); ?>">
                                <span class="description"><?php _e('Name for one object of this taxonomy. Defaults to value of name.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="add_new_item"><?php _e('Add New Item', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="labels[add_new_item]" value="<?php echo( $_POST['labels']['add_new_item'] ); ?>">
                                <span class="description"><?php _e('The add new item text. Default is "Add New Tag" or "Add New Category".', 'custommanager'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="new_item_name"><?php _e('New Item Name', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="labels[new_item_name]" value="<?php echo( $_POST['labels']['new_item_name'] ); ?>">
                                <span class="description"><?php _e('The new item name text. Default is "New Tag Name" or "New Category Name".', 'custommanager'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="edit_item"><?php _e('Edit Item', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="labels[edit_item]" value="<?php echo( $_POST['labels']['edit_item'] ); ?>">
                                <span class="description"><?php _e('The edit item text. Default is "Edit Tag" or "Edit Category".', 'custommanager'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="update_item"><?php _e('Update Item', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="labels[update_item]" value="<?php echo( $_POST['labels']['update_item'] ); ?>">
                                <span class="description"><?php _e('The update item text. Default is "Update Tag" or "Update Category".', 'custommanager'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="search_items"><?php _e('Search Items', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="labels[search_items]" value="<?php echo( $_POST['labels']['search_items'] ); ?>">
                                <span class="description"><?php _e('The search items text. Default is "Search Tags" or "Search Categories".', 'custommanager'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="popular_items"><?php _e('Popular Items', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="labels[popular_items]" value="<?php echo( $_POST['labels']['popular_items'] ); ?>">
                                <span class="description"><?php _e('The popular items text. Default is "Popular Tags" or null.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="all_items"><?php _e('All Items', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="labels[all_items]" value="<?php echo( $_POST['labels']['all_items'] ); ?>">
                                <span class="description"><?php _e('The all items text. Default is "All Tags" or "All Categories".', 'custommanager'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="parent_item"><?php _e('Parent Item', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="labels[parent_item]" value="<?php echo( $_POST['labels']['parent_item'] ); ?>">
                                <span class="description"><?php _e('The parent item text. This string is not used on non-hierarchical taxonomies such as post tags. Default is null or "Parent Category".', 'custommanager'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="parent_item_colon"><?php _e('Parent Item Colon', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="labels[parent_item_colon]" value="<?php echo( $_POST['labels']['parent_item_colon'] ); ?>">
                                <span class="description"><?php _e('The same as parent_item, but with colon : in the end null, "Parent Category:".', 'custommanager'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="add_or_remove_items"><?php _e('Add Or Remove Items', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="labels[add_or_remove_items]" value="<?php echo( $_POST['labels']['add_or_remove_items'] ); ?>">
                                <span class="description"><?php _e('The add or remove items text is used in the meta box when JavaScript is disabled. This string isn\'t used on hierarchical taxonomies. Default is "Add or remove tags" or null.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="separate_items_with_commas"><?php _e('Separate Items With Commas', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="labels[separate_items_with_commas]" value="<?php echo( $_POST['labels']['separate_items_with_commas'] ); ?>">
                                <span class="description"><?php _e('The separate item with commas text used in the taxonomy meta box. This string isn\'t used on hierarchical taxonomies. Default is "Separate tags with commas", or null.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="choose_from_most_used"><?php _e('Choose From Most Used', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="labels[choose_from_most_used]" value="<?php echo( $_POST['labels']['choose_from_most_used'] ); ?>">
                                <span class="description"><?php _e('The choose from most used text used in the taxonomy meta box. This string isn\'t used on hierarchical taxonomies. Default is "Choose from the most used tags" or null.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="cm-wrap-right">                
                <div class="cm-table-wrap">
                    <div class="cm-arrow"><br></div>
                    <h3 class="cm-toggle"><?php _e('Public', 'custommanager') ?></h3>
                    <table class="form-table publica">
                        <tr>
                            <th>
                                <label for="public"><?php _e('Public', 'custommanager') ?></label>
                            </th>
                            <td>
                                <span class="description"><?php _e('Should this taxonomy be exposed in the admin UI.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input type="radio" name="public" value="1" <?php if ( $_POST['public'] === '1' ) echo( 'checked="checked"' ); elseif ( $_POST['public'] === null ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('TRUE', 'custommanager'); ?></strong></span>
                                <br />
                                <input type="radio" name="public" value="0" <?php if ( $_POST['public'] === '0' ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('FALSE', 'custommanager'); ?></strong></span>
                                <br />
                                <input type="radio" name="public" value="advanced" <?php if ( $_POST['public'] == 'advanced' ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('ADVANCED', 'custommanager'); ?></strong></span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="cm-table-wrap">
                    <div class="cm-arrow"><br></div>
                    <h3 class="cm-toggle"><?php _e('Show UI', 'custommanager') ?></h3>
                    <table class="form-table show-ui">
                        <tr>
                            <th>
                                <label for="show_ui"><?php _e('Show UI', 'custommanager') ?></label>
                            </th>
                            <td>
                                <span class="description"><?php _e('Whether to generate a default UI for managing this taxonomy.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                       <tr>
                            <th></th>
                            <td>
                                <input type="radio" name="show_ui" value="1" <?php if ( $_POST['public'] == 'advanced' && $_POST['show_ui'] === '1' ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('TRUE', 'custommanager'); ?></strong></span>
                                <br />
                                <input type="radio" name="show_ui" value="0" <?php if ( $_POST['public'] == 'advanced' && $_POST['show_ui'] === '0' ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('FALSE', 'custommanager'); ?></strong></span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="cm-table-wrap">
                    <div class="cm-arrow"><br></div>
                    <h3 class="cm-toggle"><?php _e('Show Tagcloud', 'custommanager') ?></h3>
                    <table class="form-table show_tagcloud">
                        <tr>
                            <th>
                                <label for="show_tagcloud"><?php _e('Show Tagcloud', 'custommanager') ?></label>
                            </th>
                            <td>
                                <span class="description"><?php _e('Whether to show a tag cloud in the admin UI for this taxonomy.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                       <tr>
                            <th></th>
                            <td>
                                <input type="radio" name="show_tagcloud" value="1" <?php if ( $_POST['public'] == 'advanced' && $_POST['show_tagcloud'] === '1' ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('TRUE', 'custommanager'); ?></strong></span>
                                <br />
                                <input type="radio" name="show_tagcloud" value="0" <?php if ( $_POST['public'] == 'advanced' && $_POST['show_tagcloud'] === '0' ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('FALSE', 'custommanager'); ?></strong></span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="cm-table-wrap">
                    <div class="cm-arrow"><br></div>
                    <h3 class="cm-toggle"><?php _e('Show In Nav Menus ', 'custommanager') ?></h3>
                    <table class="form-table show-in-nav-menus">
                        <tr>
                            <th>
                                <label for="show_in_nav_menus"><?php _e('Show In Nav Menus', 'custommanager') ?></label>
                            </th>
                            <td>
                                <span class="description"><?php _e('Whether to make this taxonomy available for selection in navigation menus.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                       <tr>
                            <th></th>
                            <td>
                                <input type="radio" name="show_in_nav_menus" value="1" <?php if ( $_POST['public'] == 'advanced' && $_POST['show_in_nav_menus'] === '1' ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('TRUE', 'custommanager'); ?></strong></span>
                                <br />
                                <input type="radio" name="show_in_nav_menus" value="0" <?php if ( $_POST['public'] == 'advanced' && $_POST['show_in_nav_menus'] === '0' ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('FALSE', 'custommanager'); ?></strong></span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="cm-table-wrap">
                    <div class="cm-arrow"><br></div>
                    <h3 class="cm-toggle"><?php _e('Hierarchical', 'custommanager') ?></h3>
                    <table class="form-table">
                        <tr>
                            <th>
                                <label for="hierarchical"><?php _e('Hierarchical', 'custommanager') ?></label>
                            </th>
                            <td>
                                <span class="description"><?php _e('Whether the post type is hierarchical. Allows Parent to be specified.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                       <tr>
                            <th></th>
                            <td>
                                <input type="radio" name="hierarchical" value="1" <?php if ( $_POST['hierarchical'] === '1' ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('TRUE', 'custommanager'); ?></strong></span>
                                <br />
                                <input type="radio" name="hierarchical" value="0" <?php if ( $_POST['hierarchical'] === '0' ) echo( 'checked="checked"' ); elseif ( $_POST['hierarchical'] === null ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('FALSE', 'custommanager'); ?></strong></span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="cm-table-wrap">
                    <div class="cm-arrow"><br></div>
                    <h3 class="cm-toggle"><?php _e('Rewrite', 'custommanager') ?></h3>
                    <table class="form-table">
                        <tr>
                            <th>
                                <label for="rewrite"><?php _e('Rewrite', 'custommanager') ?></label>
                            </th>
                            <td>
                                <span class="description"><?php _e('Rewrite permalinks with this format.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                       <tr>
                            <th></th>
                            <td>
                                <input type="radio" name="rewrite" value="1" <?php if ( $_POST['rewrite'] === '1' ) echo( 'checked="checked"' ); elseif ( $_POST['rewrite'] === null ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('TRUE', 'custommanager'); ?></strong></span>
                                <br />
                                <input type="radio" name="rewrite" value="0" <?php if ( $_POST['rewrite'] === '0' ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('FALSE', 'custommanager'); ?></strong></span>
                                <br />
                                <input type="radio" name="rewrite" value="advanced" <?php if ( $_POST['rewrite'] === 'advanced' ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('CUSTOM SLUG', 'custommanager'); ?></strong></span>
                                <br />
                                <input type="text" name="rewrite_slug" value="<?php echo( $_POST['rewrite_slug'] ); ?>" />
                                <br />
                                <span class="description"><?php _e('Prepend posts with this slug.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="cm-table-wrap">
                    <div class="cm-arrow"><br></div>
                    <h3 class="cm-toggle"><?php _e('Query var', 'custommanager') ?></h3>
                    <table class="form-table">
                        <tr>
                            <th>
                                <label for="query_var"><?php _e('Query var', 'custommanager') ?></label>
                            </th>
                            <td>
                                <span class="description"><?php _e('False to prevent queries. Default will use the taxonomy system name as query var.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                       <tr>
                            <th></th>
                            <td>
                                <input type="radio" name="query_var" value="1" <?php if ( $_POST['query_var'] === '1' ) { echo( 'checked="checked"' ); } elseif ( $_POST['query_var'] === null ) { echo( 'checked="checked"' ); } ?>>
                                <span class="description"><strong><?php _e('TRUE', 'custommanager'); ?></strong></span>
                                <br />
                                <input type="radio" name="query_var" value="0" <?php if ( $_POST['query_var'] === '0' ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('FALSE', 'custommanager'); ?></strong></span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <br style="clear: left" />
            <input type="submit" class="button-primary" name="cm_submit_add_taxonomy" value="Add Taxonomy">
            <br /><br /><br /><br />
        </form>
    </div> <?php
}
?>