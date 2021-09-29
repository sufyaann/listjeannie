<footer class="footer-section">
    <div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-12 hiddenContent-footer">
			<div class="how-to-find">
					<?php
						if ( is_active_sidebar( 'how-to-find-us' ) ) : ?>
							<?php dynamic_sidebar( 'how-to-find-us' ); 
						endif;
					?>
				</div>
			</div>	 
			<div class="col-md-4 col-sm-12">
				<div class="left-to-right">
					<?php
						if ( is_active_sidebar( 'follow-us-and-subscribe' ) ) : ?>
							<?php dynamic_sidebar( 'follow-us-and-subscribe' ); 
						endif;
					?>  	  
				</div>
			</div>
			<div class="col-md-4 col-sm-12 visibleContent-footer hidden-Desktop">
				<div class="how-to-find">
					<?php
						if ( is_active_sidebar( 'how-to-find-us' ) ) : ?>
							<?php dynamic_sidebar( 'how-to-find-us' ); 
						endif;
					?>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<?php
					if ( is_active_sidebar( 'contact-us' ) ) : ?>
						<?php dynamic_sidebar( 'contact-us' ); 
					endif;
				?>
			</div>
				
		</div>
    </div>
   
    <div class="copyright">
   		<?php
			if ( is_active_sidebar( 'footer-copyright' ) ) : ?>
				<?php dynamic_sidebar( 'footer-copyright' ); 
			endif;
		?>
    </div>
</footer>
<?php wp_footer(); ?>         
</body>
</html>