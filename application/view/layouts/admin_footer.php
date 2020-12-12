</div><!-- End Container -->
   <div id="footer">
   	<p>Copyright <?php echo date("Y", time()); ?>, Tradly app</p>
   </div>
   <!-- javascripts -->
	  <script src="<?php echo JAVASCRIPTS; ?>jquery-2.1.3.min.js"></script>
    <script src="<?php echo JAVASCRIPTS; ?>tradly.js"></script>
    <script src="<?php echo JAVASCRIPTS; ?>jquery.blueimp-gallery.min.js"></script>
    <script src+"<?php echo JAVASCRIPTS; ?>image-gallery.min.js"></script>
    <script src="<?php echo JAVASCRIPTS; ?>script.js"></script>
  </body>
</html>
<?php if(isset($database)) { $database->close_connection(); } ?>