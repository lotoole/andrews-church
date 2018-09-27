        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <nav class="footer-nav">
                    <div class="footer-nav-wrap">
                        <?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false ) ); ?>
                    </div>
                </nav>
              </div>
              <div class="col-md-12 copyright">
                <span>Copyright, &copy; Vermont Retired State Employees Association, Inc.</span>
                <span class="telae">Site Designed and Developed by <a target="_blank" href="http://telaedesign.com/">Telae Design L.L.C</a></span>
              </div>
            </div>
          </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
