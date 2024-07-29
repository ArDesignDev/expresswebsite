#Wordpress theme - Aqua AR

1. search on subpages
- iz searches inside custom post type - search by name and excerpt/content


// for me

-- only one name for custom post type

2. FIX FIX
- NAVIGACIJ čez celo ni kul - ker stranka mora pol dat čist dol miško da se navigacija zapre ()

- it moram čez cel struktura strani


3. za opise kategorij naredim custom post type in ga sam dodajo potem lahko notri



// NAVODILA ZA DODAJANJE CUSTOM POST TYPE
post type
- dodam custom post type
- dodam taxonomy
- dodam v filter mapo header (team, risk) - zamenjam ime custom post typa
- custom-post-header.php

	elseif (is_post_type_archive('team') || ($posttypetoget) === 'team') {

            get_template_part( 'template-parts/post-type/filters/team', get_post_type() );

        }

- archive dodam v naslednje:

			///////////////////////////////////////////			
			// Add custom post type to show in a loop
			//////////////////////////////////////////
			////////////////////////////////////////////
			// Add custom category for custom post type
			///////////////////////////////////////////

- search.php
 - dodaš v loop v else if


2. dodati post type brez vsega
- dodam custom post type
- archive dodam v naslednje:

			///////////////////////////////////////////			
			// Add custom post type to show in a loop
			//////////////////////////////////////////
