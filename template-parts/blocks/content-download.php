<?php
/**
 * Block Name: Accordian
 *
 * This is the template that displays the Accordian block.
 */


 $link = get_field( "block_file" );
 $name = get_field( "block_file_name" );
 
 if( $name ) { ?>
 
     <h3 class="doc-attachment"><a href="<?php echo $link; ?>" download> <?php echo $name; ?></a></h3>
 
<?php } ?>
 