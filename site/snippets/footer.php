  <footer>
    <?php echo kirbytext($site->copyright()) ?>
  </footer>

  <script src="/assets/js/instantclick.min.js" data-no-instant></script>
  <script data-no-instant>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-48451015-2', 'auto');

    InstantClick.on('change', function() {
      ga('send', 'pageview', location.pathname + location.search);
    });
      
    InstantClick.init('mousedown');
  </script>

</body>

</html>
