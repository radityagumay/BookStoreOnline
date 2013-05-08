<?php render('_header',array('title'=>$title))?>


<h3>Welcome to Book Store Online</h3>

<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
    <li data-role="list-divider">Book Category</li>
    <?php render($content) ?>
</ul>

<?php render('_footer')?>