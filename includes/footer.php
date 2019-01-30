    <!--START Footer-->
    <footer class="clear-fix">
        <small>&copy; 2018 - <?=date('Y')?> www.ashuraliev.com <span class="line"> | </span><span class="line-break">All Rights Reserved</span><span class="line"> | </span> Hand Coded by Jak Ashuraliev <span class="line-break"></span><span class="line"> | </span><a href="contactme.php"> Contact</a> | <a href="http://validator.w3.org/check?uri=referer" target="_blank">Valid HTML</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">Valid CSS</a>
        </small>
    </footer>
    <!--END Footer-->
    
    <!--jquery cdn-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
    
    <script>
        /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }

            
        
        // On window scroll add nav-fixed class
        $(window).on("scroll", function(){
          if($(this).scrollTop() > 1) {
            $('header').addClass('nav-fixed');
          }
          else {
            $('header').removeClass('nav-fixed');
          }
        });
        
    </script>
    
    
</body>
</html>