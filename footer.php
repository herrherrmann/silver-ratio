				</div>
			</main>
		</div>
	</div>
	<footer class="footer">
		<nav class="menu-footer" aria-label="Footer menu">
			<?php wp_nav_menu( array(
				'theme_location' => 'footer-menu',
				'container'      => false
			)); ?>
		</nav>
	</footer>
	<?php wp_footer(); ?>
</body>

</html>
