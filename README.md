# shop
Template Woocommerce PHP

1. Install WP + install theme Storefront (12 tables)

2. install necessary plugins:
* Cyr to Lat enhanced  (3.5 -- Sol, Sergey Biryukov, Nikolay Karev, Dmitri Gogelia)
* WordPress Database Backup (2.3.3 -- Austin Matzko)
* Classic Editor /--NEED for WP 5.0-- /
* Page Template Dashboard (1.7.0 -- Tom McFarlin)
* PHP Compatibility Checker (1.5.0 -- WP Engine)
install necessary plugins:

3. Export File DB: shop_wp_20201029_min_12_tables.sql

4. Install main plugins:
* Premmerce (1.3 -- premmerce)
* WooCommerce (3.3.3 -- Automattic)
* Yoast SEO (7.5 -- Team Yoast)
* WooCommerce SEO Addon (1.1.4 -- premmerce)
* WooCommerce Permalink Manager (1.1.4 -- premmerce)

5. Export File DB (Add new pages): shop_wp_20201030_30_tables.sql

6. Finished setting, change logo, added form to contact-page

7. Import data:  plugin Premmerce Dev Tools (2.0 -- premmerce) --> GENERATE DATA

8. Edit data + images & Install plugins:
* WooCommerce Product Search (Premmerce  Search) (1.1.2 -- premmerce)
* Premmerce WooCommerce Product Filter (1.1.1 -- Premmerce)

9. Install plugins for debug & edit:
* What The File (1.5.4 -- Never5)
* WooCommerce Customizer (2.7.4 -- SkyVerge)

10. Install plugins And add NEW taxonomy: Brands And add NEW page Brands
*  Premmerce WooCommerce Brands (1.1.4 -- premmerce)

11. Install plugins:
* WooCommerce Customers Manager (1.1.4 -- premmerce)
* Premmerce User Roles (1.0.6 -- Premmerce)
* Premmerce Wishlist for WooCommerce (1.1.4 -- Premmerce) And add NEW page Wishlist

12. Export File DB: shop_wp_20201111_32_tables.sql

13. Install plugins:
* Premmerce Redirect Manager (1.0.3 -- Premmerce)
* Premmerce Woocommerce Wholesale Pricing (1.1.4 -- Premmerce)

14. Install plugin:
* Premmerce Frequently Bought Together for WooCommerce (1.0.7 -- Premmerce)

Examples pages:

[storefront](https://storefront.premmerce.com/apple-iphone-64gb-x/)

[saleszone](https://saleszone.premmerce.com/apple-iphone-64gb-x/)

15. Export File DB: shop_wp_20201112_37_tables.sql

16. Add new category and content

17. Add content

18. Add [child theme for Storefront](https://github.com/stuartduff/storefront-child-theme)

19. Edit function from child theme and Install plugin:
* Booster for Woocommerce (5.3.5 -- Pluggabl LLC)

20. Edit function:
* I remove SEARCH (remove_filter) from the header and add SEARCH as a widget after the title in the theme SETTINGS.
* I do the wrapper as it is a child theme and its FUNCTION is executed first.

21. Edit function: add phone and address in Header.

22. Header Editing Experiments

23. Install plugin: Duplicator (1.3.40 -- Snap Creek)

24. Add SFTP access using the Plugin _SFTP_. All settings in sftp.json

25. Export File DB: shop_wp_20201210_38_tables.sql

26. Install plugin: WP-Recall (16.24.30 -- Plechev Andrey)
* (Фронт-енд профиль, система личных сообщений и рейтинг пользователей на сайте вордпресс.)

