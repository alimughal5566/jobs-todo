<div class="dropdown user-menu">
<a href="#" id="usermenu" class="user dropdown-toggle menuItem" style="margin-top: 17px; position: relative" class="dropdown-toggle" data-toggle="dropdown">
  <?php if(!empty($seller_image)){
      $login_seller_user_name = $_SESSION['seller_user_name'];
      $select_login_seller = $db->select("sellers",array("seller_user_name" => $login_seller_user_name));
      $row_login_seller = $select_login_seller->fetch();
      $is_verified_passport = $row_login_seller->is_verified_passport;

      ?>
<!--      <span class="logged-in text-danger " style="position: absolute;">●</span>-->

<?php if($is_verified_passport=='Pending'){
          $is_verified_passport_icon='fa-times-circle';
          $is_verified_passport_color='text-danger';
      }else{
          $is_verified_passport_icon='fa-check-circle';
          $is_verified_passport_color='text-success';
      }
      ?>
      <span class="logged-in  <?= $is_verified_passport_color ?> fa <?= $is_verified_passport_icon ?>" style="position: absolute;"></span>
  <img src="<?= $seller_image; ?>" width="27" height="27" class="rounded-circle">
  <?php }else{ ?>
  <img src="<?= $site_url; ?>/user_images/empty-image.png" width="27" height="27" class="rounded-circle">
  <?php } ?>
  <span class="name"><?= $_SESSION['seller_user_name']; ?></span>
</a>
<div class="dropdown-menu <?=($lang_dir=="right"?'text-right':'')?>" style="min-width:200px; width:auto!important;z-index:2000;">
   <a class="dropdown-item" href="<?= $site_url; ?>/dashboard">
      <?= $lang["menu"]['dashboard']; ?>
   </a>
   <a class="dropdown-item dropdown-toggle" href="#" data-toggle="collapse" data-target="#selling">
      <?= $lang["menu"]['selling']; ?>
   </a>
   <div id="selling" class="dropdown-submenu collapse">
      <?php if($count_active_proposals > 0){ ?>
      <a class="dropdown-item" href="<?= $site_url; ?>/selling_orders">
      <?= $lang["menu"]['orders']; ?>
      </a>
      <?php } ?>
      <a class="dropdown-item" href="<?= $site_url; ?>/proposals/view_proposals">
      <?= $lang["menu"]['my_proposals']; ?>
      </a>
      <?php if($count_active_proposals > 0){ ?>
      <a class="dropdown-item" href="<?= $site_url; ?>/proposals/create_coupon">
      <?= $lang["menu"]['create_coupon']; ?>
      </a>
      <?php } ?>
      <?php if($count_active_proposals > 0){ ?>
      <a class="dropdown-item" href="<?= $site_url; ?>/requests/buyer_requests">
      <?= $lang["menu"]['buyer_requests']; ?>
      </a>
      <a class="dropdown-item" href="<?= $site_url; ?>/revenue">
      <?= $lang["menu"]['revenues']; ?>
      </a>
      <a class="dropdown-item" href="<?= $site_url; ?>/withdrawal_requests">
      <?= $lang["menu"]['withdrawal_requests']; ?>
      </a>
      <?php } ?>
   </div>
   <a class="dropdown-item dropdown-toggle" href="#" data-toggle="collapse" data-target="#buying">
   <?= $lang["menu"]['buying']; ?>
   </a>
   <div id="buying" class="dropdown-submenu collapse">
      <a class="dropdown-item" href="<?= $site_url; ?>/buying_orders">
      <?= $lang["menu"]['orders']; ?>
      </a>
      <a class="dropdown-item" href="<?= $site_url; ?>/purchases">
      <?= $lang["menu"]['purchases']; ?>
      </a>
      <a class="dropdown-item" href="<?= $site_url; ?>/favorites">
      <?= $lang["menu"]['favorites']; ?>
      </a>
   </div>

    <?php if($is_verified_passport=='Approved'){ ?>
   <a class="dropdown-item dropdown-toggle" href="#" data-toggle="collapse" data-target="#requests">
   <?= $lang["menu"]['requests']; ?>
   </a>
   <div id="requests" class="dropdown-submenu collapse">
      <a class="dropdown-item" href="<?= $site_url; ?>/requests/post_request">
      <?= $lang["menu"]['post_request']; ?>
      </a>
      <a class="dropdown-item" href="<?= $site_url; ?>/requests/manage_requests">
      <?= $lang["menu"]['manage_requests']; ?>
      </a>
   </div>
    <?php } ?>
   <a class="dropdown-item dropdown-toggle" href="#" data-toggle="collapse" data-target="#contacts">
   <?= $lang["menu"]['contacts']; ?>
   </a>
   <div id="contacts" class="dropdown-submenu collapse">
      <a class="dropdown-item" href="<?= $site_url; ?>/manage_contacts?my_buyers">
      <?= $lang["menu"]['my_buyers']; ?>
      </a>
      <a class="dropdown-item" href="<?= $site_url; ?>/manage_contacts?my_sellers">
      <?= $lang["menu"]['my_sellers']; ?>
      </a>
   </div>
   <?php if($enable_referrals == "yes"){ ?>
   <a class="dropdown-item dropdown-toggle" href="#" data-toggle="collapse" data-target="#referrals">
   <?= $lang["menu"]['my_referrals']; ?>
   </a>
   <div id="referrals" class="dropdown-submenu collapse">
      <a class="dropdown-item" href="<?= $site_url; ?>/my_referrals" data-target="#referrals">
      <?= $lang["menu"]['user_referrals']; ?>
      </a>
      <a class="dropdown-item" href="<?= $site_url; ?>/proposal_referrals" data-target="#referrals">
      <?= $lang["menu"]['proposal_referrals']; ?>
      </a>
   </div>
   <?php } ?>
   <a class="dropdown-item" href="<?= $site_url; ?>/conversations/inbox">
   <?= $lang["menu"]['inbox_messages']; ?>
   </a>
   <a class="dropdown-item" href="<?= $site_url; ?>/<?= $_SESSION['seller_user_name']; ?>">
   <?= $lang["menu"]['my_profile']; ?>
   </a>
   <a class="dropdown-item dropdown-toggle" href="#" data-toggle="collapse" data-target="#settings">
   <?= $lang["menu"]['settings']; ?>
   </a>
   <div id="settings" class="dropdown-submenu collapse">
      <a class="dropdown-item" href="<?= $site_url; ?>/settings?profile_settings">
      <?= $lang["menu"]['profile_settings']; ?>
      </a>
      <a class="dropdown-item" href="<?= $site_url; ?>/settings?account_settings">
      <?= $lang["menu"]['account_settings']; ?>
      </a>
   </div>
   <div class="dropdown-divider"></div>
   <a class="dropdown-item" href="<?= $site_url; ?>/logout">
   <?= $lang["menu"]['logout']; ?>
   </a>
</div>
</div>