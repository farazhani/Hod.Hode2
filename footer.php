   <?php wp_footer(); ?>
</body>
</br>
</br>
   <footer class="left-0 right-0 top-0 z-40 w-full shadow bg-white gap-3 flex ">
      <div class="px-4 max-w-screen-lg mx-auto flex">
         <div class="flex">
                       <?php if (function_exists("the_custom_logo")) {
                the_custom_logo();
            }
            ?> 
         <div><p> کلیه حقوق این سایت برای پارت محفوظ میباشد</p></div>
         </div>
         <div class="flex">
            <img class="w-10 h-auto" src="<?php echo get_template_directory_uri();?>/t.jpg">
             <img class="w-10 h-auto" src="<?php echo get_template_directory_uri();?>/in.jpg">
              <img class="w-10 h-auto" src="<?php echo get_template_directory_uri();?>/f.jpg">
         </div>
      </div>
   </footer>
</hr>
</html>
