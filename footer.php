                </div>
                <footer class="footer">
                    <nav class="menu-footer" aria-label="Footer Menu">
                        <?php wp_nav_menu( array(
                            'theme_location' => 'footer-menu',
                            'container'      => false
                        )); ?>
                    </nav>
                </footer>
			</main>
		</div>
    </div>
    <?php wp_footer(); ?>
</body>

</html>
