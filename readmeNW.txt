Next. Add Drop off point as an extra field or custom attribute to order item types https://docs.drupalcommerce.org/commerce2/developer-guide/orders
see Attributes that are outside the variations

9.4.19 got a simple physical product set up from https://docs.drupalcommerce.org/commerce2/developer-guide/products/product-architecture/simple-product.
Now do the same for a simple event.
Next get the Produce page to show cards of physical products. Display broken due to previous twig overrides.

31.3.19 Trying to configure cart. Can't find it in views.... Not enough tutorials available. Exported progress to Digial Ocean and told Rosie. Made content changes there and imported the db to local at end of day.

8.3.19 update to D8.6.10, snapshot

11.1.19
changes made on ent local and not saved
composer added a module social_media_links. Added twitter and fb in settings for its block
css tweaks for events overview listing

Edibles Barrio Processes

Top db backup on Digital Ocean
echo4 28.5.19 during attempts to get things ready for Rosie
echo 22.5.19 after getting a test product to display both remaining places and drop off point. Needs tidying up but it is there.
echo3 20.5.19 this db running slow with guzzle curl errors in log. dump taken before uninstalling all commerce modules - to start again. Restored this to prod!!!! 22.5.19
echo2 15.5.19 before enabling stock enforcement

To connect to local hero images:
on local
src="/themes/custom/barrio_sub/images/grey_logo-345.png"
on prod
src="http://178.128.162.13/edibles/web/themes/custom/barrio_sub/images/grey_logo-345.png"

users
Rosie rosie@edibles.org.uk forthandbeyond
nweditor xm2

trying to update Commerce see https://www.drupal.org/project/commerce/issues/3032917

Installed 30.11.18
Installed bootstrap_barrio.
Was going to install bootstrap_sass but read warnings that it is not ready at https://www.drupal.org/project/bootstrap_sass/issues/3016562
Continuing dev in bootstrap_barrio subtheme