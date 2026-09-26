# Iconsax + Line Awesome for Elementor

افزونه‌ی وردپرس که دو مجموعه آیکون رایگان را به‌صورت فونت آیکون واقعی، دقیقاً کنار
Font Awesome، به تب سراسری «آیکون» المنتور اضافه می‌کند:

- **Iconsax** (سبک Linear، ۸۹۰ آیکون عمومی UI)
- **Line Awesome** (Regular، Solid، Brands — شامل آیکون‌های برند/شبکه‌اجتماعی مثل
  اینستاگرام، تلگرام، واتساپ، فیسبوک، لینکدین، یوتیوب، پینترست)

بعد از فعال‌سازی، این تب‌ها در تمام ویجت‌های آیکون‌دار المنتور (Icon Box، Icon List،
Button، Nav Menu، Toggle، Accordion و ...) و در تمام قالب‌ها در دسترس‌اند — نیازی به
ویجت یا کد اضافه نیست.

## نصب

1. فایل zip این ریپازیتوری (یا فولدر پروژه) را از طریق افزونه‌ها ← افزودن ← بارگذاری
   افزونه در وردپرس آپلود کنید.
2. افزونه را فعال کنید.
3. در ادیتور المنتور، روی کنترل آیکون هر ویجتی کلیک کنید؛ تب‌های «Iconsax»،
   «Line Awesome - Brands»، «Line Awesome - Regular» و «Line Awesome - Solid» را
   کنار Font Awesome خواهید دید.

## استفاده مستقیم در کد (خارج از ادیتور المنتور)

```php
// تابع PHP
iconsax_icon( 'add-circle', [ 'class' => 'my-icon', 'style' => 'font-size:32px;color:#3a86ff;' ] );

// شورت‌کد (قابل استفاده در ویجت Text Editor یا هر جای دیگر وردپرس)
[iconsax name="add-circle" class="my-icon" style="font-size:32px;"]
```

برای آیکون‌های Line Awesome می‌توانید مستقیم از کلاس‌های استاندارد آن استفاده کنید:

```html
<i class="lab la-instagram"></i>
<i class="las la-home"></i>
<i class="lar la-star"></i>
```

## لایسنس آیکون‌ها

- **Iconsax**: طرح آیکون‌ها متعلق به تیم Vuesax ([iconsax.io](https://iconsax.io))
  است و طبق [لایسنس رایگان Iconsax](https://docs.iconsax.io/license-and-terms/license)
  استفاده شده (استفاده شخصی/تجاری نامحدود، بدون فروش یا بازتوزیع مجموعه به‌عنوان یک
  محصول مستقل). فایل فونت با [fontello.com](https://fontello.com) از روی نسخه رایگان
  (Linear) ساخته شده، بر پایه‌ی کار متن‌باز
  [glenthemes/iconsax](https://github.com/glenthemes/iconsax).
- **Line Awesome**: از پروژه [icons8/line-awesome](https://github.com/icons8/line-awesome)،
  لایسنس MIT / Good Boy License، رایگان برای استفاده شخصی و تجاری.

کد خود افزونه تحت لایسنس GPLv2 or later منتشر شده است.

## نویسنده

علی اصغر نوروززاده
