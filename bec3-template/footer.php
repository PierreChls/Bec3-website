

<footer>
	      <div class="container">
	        
	        <div class="row">
	          <div class="social"><a href="https://twitter.com/" target="_blank" class="twitter"></a> <a href="https://facebook.com/" target="_blank" class="facebook"></a></small></p>
	          </div>
	          
	          <div class="copyright">
	            <p><small>Copyright &copy; 2016. All rights reserved.</small></p>
	          </div>
	        </div>
	        
	      </div>
	    </footer>
	    
		
	    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	    <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
	    
	    
	    <script>
	    (function() {
    var pre = document.getElementsByTagName('pre'),
        pl = pre.length;
    for (var i = 0; i < pl; i++) {
        pre[i].innerHTML = '<span class="line-number"></span>' + pre[i].innerHTML + '<span class="cl"></span>';
        var num = pre[i].innerHTML.split(/\n/).length;
        for (var j = 0; j < num; j++) {
            var line_num = pre[i].getElementsByTagName('span')[0];
            line_num.innerHTML += '<span>' + (j + 1) + '</span>';
        }
    }
})();
	    </script>
	    
    </body>
</html>
