<?php

  if (!empty($_POST['save'])) {

    try {

      if (empty($_POST['user_id']) && empty($_POST['username'])) notices::add('errors', language::translate('error_must_enter_username', 'You must enter a username'));

      if (empty($user->data['username'])) {
        if (empty($_POST['password'])) notices::add('errors', language::translate('error_must_enter_password', 'You must enter a password'));
        if (empty($_POST['confirmed_password'])) notices::add('errors', language::translate('error_must_enter_confirmed_password', 'You must confirm the password'));
      }

      $users_query = database::query(
        "select * from ". DB_TABLE_USERS ."
        where username like '". database::input($_POST['username']) ."'
        limit 1;"
      );

      if ($user = database::fetch($users_query)) {
        $user = new ctrl_user($user['id']);
      } else {
        $user = new ctrl_user();
        $user->data['username'] = $_POST['username'];
      }

      $user->data['status'] = 1;
      $user->data['date_blocked'] = '';
      $user->data['date_expires'] = '';
      $user->set_password($_POST['password']);

      $user->save();

      notices::add('success', 'Your account has been reset. You may now delete this file.');
      header('Location: '. document::link());
      exit;

    } catch(Exception $e) {
      notices::add('errors', $e->getMessage());
    }
  }

?>
<main id="content">
  {snippet:notices}

  <h1><?php echo language::translate('title_password_reset_tool', 'Password Reset Tool'); ?></h1>
  <?php echo functions::form_draw_form_begin('password_reset_form', 'post', null, false, 'style="max-width: 640px;"'); ?>

    <div class="row">
      <div class="form-group col-md-6">
        <label><?php echo language::translate('title_username', 'Username'); ?></label>
        <?php echo functions::form_draw_text_field('username', true, 'list="usernames"'); ?>
        <datalist id="usernames">
<?php
  $users_query = database::query(
    "select * from ". DB_TABLE_USERS ."
    order by username;"
  );

  $options = array();
  if (database::num_rows($users_query) > 0) {
    while ($user = database::fetch($users_query)) {
      echo '<option value="'. $user['username'] .'" />';
    }
  }

  echo functions::form_draw_select_field('user_id', $options);
?>
        </datalist>
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-6">
        <label><?php echo language::translate('title_new_password', 'New Password'); ?></label>
        <?php echo functions::form_draw_password_field('password', ''); ?>
      </div>

      <div class="form-group col-md-6">
        <label><?php echo language::translate('title_confirm_password', 'Confirm Password'); ?></label>
        <?php echo functions::form_draw_password_field('confirmed_password', ''); ?>
      </div>
    </div>

    <div class="form-group">
      <?php echo functions::form_draw_button('save', language::translate('title_save', 'Save'), 'submit', '', 'save'); ?></td>
    </div>

  <?php echo functions::form_draw_form_end(); ?>
</main>