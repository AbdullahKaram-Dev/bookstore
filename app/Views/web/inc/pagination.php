<ul>
    <li><a href="<?php url("books/page/". ($page-1)); ?>" <?php if($page == 1) echo 'class="link-disabled"'; ?> >&lt;</a></li>
    <?= 'Page '. $page  .' of '. $pages_total_num; ?>
    <li><a href="<?php url("books/page/". ($page+1)); ?>" <?php if($page == $pages_total_num) echo 'class="link-disabled"'; ?> >&gt;</a></li>
</ul>