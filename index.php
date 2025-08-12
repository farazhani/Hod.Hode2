
<?php get_header()?>
  <div id="page" class="site">
    <main id="main" class="site-main">
      <?php
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post();
          the_title( '<h2>', '</h2>' );
          
          the_content();
        }
      } else {
        echo '<p>No content found.</p>'; 
      }
      ?>
    </main>
  </div>

    <section class="container mx-auto mt-16 flex gap-3 flex-warp max-w-screen-lg mx-auto">  
        <button
            class="px-4 py-2 rounded-full bg-white border bordet-gray-500 text-gray-700 hover:bg-blue-600 hover:text-white transition">همه
            محصولات</button>
        <button
            class="px-4 py-2 rounded-full bg-white border bordet-gray-500 text-gray-700 hover:bg-blue-600 hover:text-white transition">دوربین</button>
        <button
            class="px-4 py-2 rounded-full bg-white border bordet-gray-500 text-gray-700 hover:bg-blue-600 hover:text-white transition">کنسول
            بازی</button>
        <button
            class="px-4 py-2 rounded-full bg-white border bordet-gray-500 text-gray-700 hover:bg-blue-600 hover:text-white transition">هدفون</button>
        <button
            class="px-4 py-2 rounded-full bg-white border bordet-gray-500 text-gray-700 hover:bg-blue-600 hover:text-white transition">وسایل
            گیمینگ</button>
        <button
            class="px-4 py-2 rounded-full bg-white border bordet-gray-500 text-gray-700 hover:bg-blue-600 hover:text-white transition">هدست</button>
    </section>
    <section
        class="container mx-auto mt-8 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-3 max-w-screen-lg mx-auto">
        <div class="bg-white rounded-lg shadow p-4 flex flex-col">
                  <img class="w-120 h-auto" src="<?php echo get_template_directory_uri();?>/camera1.jpg">
            <h3 class="font-bold text-lg mb-2"> دوربین دیجیتال آکسون مدل AX6062</h3>
            <p class="text-sm text-gray-500 mb-4">هدفون</p>
            <div class="flex justify-between items-center mb-4">
                <span class="line-through text-gray-400 text-sm">
                    4463000 تومان
                </span>
                <span class="text-sm text-gray-700 font-bold">
                    2799000 تومان
                </span>
                <div class=" bg-red-500 text-sm text-white px-2 py-1 rounded">
                    42%
                </div>
            </div>
            <div class="flex gap-2 mt-2 mb-0">
                <button class="flex-1 bg-blue-500 text-white px-3 py-2 rounded-lg hover:bg-blue-900 transition">افزودن
                    به سبد</button>
                <button
                    class="flex-1 bg-gray-200 text-gray-700 px-3 py-2 rounded-lg hover:bg-gray-400 hover:text-white transition">مشاهده
                    جزییات</button>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-4 flex flex-col">
              <img class="w-120 h-auto" src="<?php echo get_template_directory_uri();?>/camera2.jpg">
            <h3 class="font-bold text-lg mb-2">دوربین دیجیتال کانن مدل EOS250D</h3>
            <p class="text-sm text-gray-500 mb-4">هدفون</p>
            <div class="flex justify-between items-center mb-4">
                <span class="line-through text-gray-400 text-sm">
                    4463000 تومان
                </span>
                <span class="text-sm text-gray-700 font-bold">
                    2799000 تومان
                </span>
                <div class=" bg-red-500 text-sm text-white px-2 py-1 rounded">
                    42%
                </div>
            </div>
            <div class="flex gap-2 mt-2 mb-0">
                <button class="flex-1 bg-blue-500 text-white px-3 py-2 rounded-lg hover:bg-blue-900 transition">افزودن
                    به سبد</button>
                <button
                    class="flex-1 bg-gray-200 text-gray-700 px-3 py-2 rounded-lg hover:bg-gray-400 hover:text-white transition">مشاهده
                    جزییات</button>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-4 flex flex-col">
                  <img class="w-120 h-auto" src="<?php echo get_template_directory_uri();?>/هایلوX1.jpg">
            <h3 class="font-bold text-lg mb-2">هدفون بلوتوث هایلو مدل x1 2003</h3>
            <p class="text-sm text-gray-500 mb-4">هدفون</p>
            <div class="flex justify-between items-center mb-4">
                <span class="line-through text-gray-400 text-sm">
                    4463000 تومان
                </span>
                <span class="text-sm text-gray-700 font-bold">
                    2799000 تومان
                </span>
                <div class=" bg-red-500 text-sm text-white px-2 py-1 rounded">
                    42%
                </div>
            </div>
            <div class="flex gap-2 mt-2 mb-0">
                <button class="flex-1 bg-blue-500 text-white px-3 py-2 rounded-lg hover:bg-blue-900 transition">افزودن
                    به سبد</button>
                <button
                    class="flex-1 bg-gray-200 text-gray-700 px-3 py-2 rounded-lg hover:bg-gray-400 hover:text-white transition">مشاهده
                    جزییات</button>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-4 flex flex-col">
              <img class="w-120 h-auto" src="<?php echo get_template_directory_uri();?>/hedset1.jpg">
            <h3 class="font-bold text-lg mb-2">هدست بلوتوثی سونی مدلWH-CH720N</h3>
            <p class="text-sm text-gray-500 mb-4">هدفون</p>
            <div class="flex justify-between items-center mb-4">
                <span class="line-through text-gray-400 text-sm">
                    4463000 تومان
                </span>
                <span class="text-sm text-gray-700 font-bold">
                    2799000 تومان
                </span>
                <div class=" bg-red-500 text-sm text-white px-2 py-1 rounded">
                    42%
                </div>
            </div>
            <div class="flex gap-2 mt-2 mb-0">
                <button class="flex-1 bg-blue-500 text-white px-3 py-2 rounded-lg hover:bg-blue-900 transition">افزودن
                    به سبد</button>
                <button
                    class="flex-1 bg-gray-200 text-gray-700 px-3 py-2 rounded-lg hover:bg-gray-400 hover:text-white transition">مشاهده
                    جزییات</button>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-4 flex flex-col">
              <img class="w-120 h-auto" src="<?php echo get_template_directory_uri();?>/hedset2.webp">
            <h3 class="font-bold text-lg mb-2">هدست گیمینگ بلوتوثی سونی مد InZone</h3>
            <p class="text-sm text-gray-500 mb-4">هدفون</p>
            <div class="flex justify-between items-center mb-4">
                <span class="line-through text-gray-400 text-sm">
                    4463000 تومان
                </span>
                <span class="text-sm text-gray-700 font-bold">
                    2799000 تومان
                </span>
                <div class=" bg-red-500 text-sm text-white px-2 py-1 rounded">
                    42%
                </div>
            </div>
            <div class="flex gap-2 mt-2 mb-0">
                <button class="flex-1 bg-blue-500 text-white px-3 py-2 rounded-lg hover:bg-blue-900 transition">افزودن
                    به سبد</button>
                <button
                    class="flex-1 bg-gray-200 text-gray-700 px-3 py-2 rounded-lg hover:bg-gray-400 hover:text-white transition">مشاهده
                    جزییات</button>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-4 flex flex-col">
              <img class="w-120 h-auto" src="<?php echo get_template_directory_uri();?>/hedset3.jpg">
            <h3 class="font-bold text-lg mb-2">هدست بلوتوثی استریو سونی مدل SBH54</h3>
            <p class="text-sm text-gray-500 mb-4">هدفون</p>
            <div class="flex justify-between items-center mb-4">
                <span class="line-through text-gray-400 text-sm">
                    4463000 تومان
                </span>
                <span class="text-sm text-gray-700 font-bold">
                    2799000 تومان
                </span>
                <div class=" bg-red-500 text-sm text-white px-2 py-1 rounded">
                    42%
                </div>
            </div>
            <div class="flex gap-2 mt-2 mb-0">
                <button class="flex-1 bg-blue-500 text-white px-3 py-2 rounded-lg hover:bg-blue-900 transition">افزودن
                    به سبد</button>
                <button
                    class="flex-1 bg-gray-200 text-gray-700 px-3 py-2 rounded-lg hover:bg-gray-400 hover:text-white transition">مشاهده
                    جزییات</button>
            </div>
        </div>
    </section>
    <div class="container justify-center gap-2 flex max-w-screen-lg mx-auto mt-8">
        <button
            class="px-3 py-1 rounded-md bg-white border bordet-gray-500 text-gray-700 hover:bg-blue-600 hover:text-white transition">قبلی</button>
        <button
            class="px-3 py-1 rounded-md bg-white border bordet-gray-500 text-gray-700 hover:bg-blue-600 hover:text-white transition">1</button>
        <button
            class="px-3 py-1 rounded-md bg-white border bordet-gray-500 text-gray-700 hover:bg-blue-600 hover:text-white transition">2</button>
        <button
            class="px-3 py-1 rounded-md bg-white border bordet-gray-500 text-gray-700 hover:bg-blue-600 hover:text-white transition">بعدی</button>
    </div>
    <br/>
        <br/>
<?php get_footer()?>