<?php
/**
 * Sub Navigation
 * @since GIANTY 1.0
 */
?>
<div id="sub_navigation">
  <ul>
    <li><a <?php if(is_page('company')) { echo 'class="active"'; } ?> href="/company/">基本情報</a></li>
    <li><a <?php if(is_page('message')) { echo 'class="active"'; } ?> href="/company/message/">役員紹介</a></li>
    <li><a <?php if(is_page('staffs')) { echo 'class="active"'; } ?> href="/company/staffs/">スタッフ紹介</a></li>
    <li><a <?php if(is_page('gallery')) { echo 'class="active"'; } ?> href="/company/gallery/">ギャラリー</a></li>
    <li class="last"><a <?php if(is_page('recruit')) { echo 'class="active"'; } ?> href="/company/recruit/">求人情報</a></li>
  </ul>
<!-- /.sub_navigation --></div>