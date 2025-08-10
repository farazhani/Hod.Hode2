<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100" dir="rtl">
    <header class="left-0 right-0 top-0 z-40 w-full shadow bg-white ">
        <div class="px-4 max-w-screen-lg mx-auto">
            <?php if (function_exists("the_custom_logo")) {
                the_custom_logo();
            }
            ?>
            <div class="mx-auto flex w-full max-w-screen-xl items-center justify-between gap-2">
                <a href="/">
                    <img src="hodcode.jpg" class="w-15 h-15 " alt="لوگوی هدکد">
                </a>
                <ul class="hidden grow justify-start md:flex md:pr-10 md:text-right flex space-x-5">
                    <li class="cursor-point transform transition-transform duration-200 hover:scale-125">
                        <a href="#">خانه</a>
                    </li>
                    <li class="cursor-point transform transition-transform duration-200 hover:scale-125">
                        <a href="#" class="m">محصولات</a>
                    </li>
                </ul>
                <a href="#" class="cursor-point transform transition-transform duration-200 hover:scale-125">
                    <img src="/shop.png" class="w-10 h-10">
                </a>
            </div>
        </div>
    </header>
