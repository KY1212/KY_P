				<div class="inner">
					<h2 class="heading">Contact<span>Contact</span></h2>
					<div class="contentsWrap">
					<?php if(is_page( 'index' )): ?>
						<?php echo do_shortcode( '[mwform_formkey key="27"]' ); ?>
					<?php elseif(is_page( 'about' )): ?>
						<?php echo do_shortcode( '[mwform_formkey key="41"]' ); ?>
					<?php elseif(is_page( 'works' )): ?>
						<?php echo do_shortcode( '[mwform_formkey key="44"]' ); ?>
					<?php elseif(is_page( 'contact' )): ?>
						<?php echo do_shortcode( '[mwform_formkey key="47"]' ); ?>
					<?php endif; ?>
					</div>
				</div>
