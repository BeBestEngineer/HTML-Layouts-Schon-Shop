<div class="block-1">
    <h1 class="block-1__title  text-montserrat-bold-44-upper  black-3a3a3a"><?php echo $block_1_data -> block_1['title']; ?></h1>
    <ol class="breadcrumb  text-myriad-pro-regular-14-cap  black-494949">
      <?php foreach( $block_1_data -> block_1['breadcrumbs'] as $breadcrumbs_value ): ?>
        <li><a href="#"> <?php echo $breadcrumbs_value; ?> </a></li>
      <?php endforeach; ?>
      <li class="active"> <?php echo $block_1_data -> block_1['last-breadcrumb']; ?> </li>
    </ol>
</div>