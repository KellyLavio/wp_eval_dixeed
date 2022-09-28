<?php
/**
 * Plugin Name: Custom Dashboard Plugin
 * Description: Affichage d'un message sur le dashboard
 * Version: 1.0.0
 * Author: Kelly Laviolette
 */

defined('ABSPATH') or die(); // empeche d'accéder à ce fichier en entrant directement l'URL ou l'inclure depuis l'extérieur

register_activation_hook(__FILE__, function () {
});

register_deactivation_hook(__FILE__, function () {
});

/**
 * Extra profile fields
 */

function extra_profile_fields($user_id) {
  global $user_id;
  $value = get_user_meta($user_id, 'message_showing', true);
  ?>
<h3>Message</h3>
<table class="form-table">
  <tr>
    <th><label for="message_showing">Visibilité du message sur le dashboard</label></th>
    <td>
      <input type="radio" id="showing" name="message_showing" value="1" <?php checked($value, '1'); ?>>
      <label for="showing">Oui</label>
      <input type="radio" id="not_showing" name="message_showing" value="0">
      <label for="not_showing">Non</label>
    </td>
  </tr>
  <tr>
    <th><label for="message">Message</label></th>
    <td><textarea name="message" id="message" cols="30" rows="5"><?= esc_html(get_user_meta($user_id, 'message', true)); ?></textarea></td>
  </tr>
</table>


  <?php
}

add_action('show_user_profile', 'extra_profile_fields');
add_action('edit_user_profile', 'extra_profile_fields');

function save_extra_profile_fields($user_id) {
  if(!current_user_can('edit_user', $user_id))
  return false;

  update_user_meta($user_id, 'message_showing', $_POST['message_showing']);
  update_user_meta($user_id, 'message', $_POST['message']);
}

add_action('personal_options_update', 'save_extra_profile_fields');
add_action('edit_user_profile_update', 'save_extra_profile_fields');


/**
 * Affichage du message sur le dashboard
 *
 * @return void
 */
function display_user_message() {
  $value = get_the_author_meta('message_showing');
  
  if($value === '1') {
    ?>
    <h3>Message de la part de notre équipe</h3>
    <div>
      <p><?= esc_html(get_the_author_meta('message')); ?></p>
    </div>
    <?php
  }
}

add_action('woocommerce_account_dashboard', 'display_user_message');