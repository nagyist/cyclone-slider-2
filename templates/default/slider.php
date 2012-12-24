<?php if($slider_count>0) $slider_id = $slider_id.'-'.$slider_count; ?>
<div class="cycloneslider cycloneslider-template-default" id="cycloneslider-<?php echo $slider_id; ?>" style="max-width:<?php echo $slider_settings['width']; ?>px">
	<div class="cycloneslider-slides cycle-slideshow" <?php echo cycloneslider_settings($slider_settings, $slider_id); ?>>
		<?php foreach($slider_metas as $i=>$slider_meta): ?>
			<div class="cycloneslider-slide" <?php echo cycloneslider_slide_settings($slider_meta); ?>>
				<?php if ($slider_meta['link']!='') : ?><a target="<?php echo ('_blank'==$slider_meta['link_target']) ? '_blank' : '_self'; ?>" href="<?php echo $slider_meta['link'];?>"><?php endif; ?>
				<img src="<?php echo cycloneslider_thumb($slider_meta['id'], $slider_settings['width'], $slider_settings['height'], false, $slider_meta); ?>" alt="<?php echo $slider_meta['img_alt'];?>" title="<?php echo $slider_meta['img_title'];?>" />
				<?php if ($slider_meta['link']!='') : ?></a><?php endif; ?>
				<?php if(!empty($slider_meta['title']) or !empty($slider_meta['description'])) : ?>
				<div class="cycloneslider-caption">
					<div class="cycloneslider-caption-title"><?php echo $slider_meta['title'];?></div>
					<div class="cycloneslider-caption-description"><?php echo $slider_meta['description'];?></div>
				</div>
				<?php endif; ?>
			</div>
		<?php endforeach; ?>
	</div>
	<?php if ($slider_settings['show_nav']) : ?>
	<div class="cycloneslider-pager"></div>
	<?php endif; ?>
	<?php if ($slider_settings['show_prev_next']) : ?>
	<div class="cycloneslider-prev">Prev</div>
	<div class="cycloneslider-next">Next</div>
	<?php endif; ?>
</div>