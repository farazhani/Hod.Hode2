
</body>
   <?php wp_footer(); ?>
</hr>
   <footer class="bg-white" >
      <div class="flex ">
       <div class="max-w-screen-lg mx-auto flex space-x-60">
       <div class="w-10 h-auto">
        <?php if(function_exists("the_custom_logo"))
        {
            the_custom_logo();
        }
        ?>
       </div>
       <p class="text-center text-sm">کلیه حقوق این  سایت برای پارت محفوظ میباشد</p>
    
    <div class="flex" >
         <img class="w-10 h-auto " src="<?php echo get_template_directory_uri();?>/t.jpg">
                  <img class="w-10 h-auto" src="<?php echo get_template_directory_uri();?>/f.jpg">
                           <img class="w-10 h-auto" src="<?php echo get_template_directory_uri();?>/in.jpg">

    </div>
    </div>
      </div>
    </footer>
</html>