<div id="<?php echo $page_id; ?>" class="<?php echo isset( $page_class ) ? $page_class : $page_id; ?> wrap">
	<div class="page-content">
        <?php if ( version_compare( get_bloginfo('version'), '4.2.4', '<=' ) ): ?>
        <h2 class="awpcp-page-header"><?php echo $page_title ?></h2>
        <?php else: ?>
        <h1 class="awpcp-page-header"><?php echo $page_title ?></h1>
        <?php endif; ?>

        <?php $show_sidebar = isset($show_sidebar) ? $show_sidebar : true ?>
		<?php echo $sidebar = $show_sidebar ? awpcp_admin_sidebar() : ''; ?>

		<div class="awpcp-main-content <?php echo (empty($sidebar) ? 'without-sidebar' : 'with-sidebar') ?>">
