<?php
    /*
    Block with name of page and breadcrumbs
    */

class Block_1_data {
    public $block_1;
    public $path = 'other_modules/custom_modules/block_1/block_1.php';

    public function Get_data( $page, $position ) {
        switch ( $page ) {
            case 'home':
                switch ( $position ) {
                    case 'main-info':
                        $this -> block_1 = array (
                            'path' => $this -> path,
                            'title' => 'Home title',
                            'breadcrumbs' => array ( 'home', 'Home', '&nbsp;' )
                        );
                    break;
                    case 'section-1-info':
                        $this -> block_1 = array (
                            'path' => $this -> path,
                            'title' => 'Home Section 1 title',
                            'breadcrumbs' => array ( 'home', 'Home section 1 title', '&nbsp;' )
                        );
                    break;
                    case 'section-2-info':
                        $this -> block_1 = array (
                            'path' => $this -> path,
                            'title' => 'Home Section 2 title',
                            'breadcrumbs' => array ( 'home', 'Home section 2 title', 'xxx' )
                        );
                    break;
                }
            break;

            case 'about-us':
                switch ( $position ) {
                    case 'main-info':
                        $this -> block_1 = array (
                            'path' => $this -> path,
                            'title' => 'About us',
                            'breadcrumbs' => array ( 'home', 'about us', '' )
                        );
                    break;
                    case 'section-1-info':
                        $this -> block_1 = array (
                            'path' => $this -> path,
                            'title' => 'Section 1 title',
                            'breadcrumbs' => array ( 'home', 'section 1 title', '' )
                        );
                    break;
                    case 'section-2-info':
                        $this -> block_1 = array (
                            'path' => $this -> path,
                            'title' => 'Section 2 title',
                            'breadcrumbs' => array ( 'home', 'section 2 title', '' )
                        );
                    break;
                }                    
            break;
                
            case 'contacts-us':
                switch ( $position ) {
                    case 'main-info':
                        $this -> block_1 = array (
                            'path' => $this -> path,
                            'title' => 'Contact',
                            'breadcrumbs' => array ( 'home', 'Contact', '' )
                        );
                    break;                    
                }                    
            break;                
                
            case 'products-list':
                switch ( $position ) {
                    case 'main-info':
                        $this -> block_1 = array (
                            'path' => $this -> path,
                            'title' => 'Chairs',
                            'breadcrumbs' => array ( 'home', 'products', 'chairs' )
                        );
                    break;                    
                }                    
            break;
                
            case 'shopping-cart':
                switch ( $position ) {
                    case 'main-info':
                        $this -> block_1 = array (
                            'path' => $this -> path,
                            'title' => 'Shopping cart',
                            'breadcrumbs' => array ( 'home', 'shopping cart', '' )
                        );
                    break;                    
                }                    
            break;
        }
        return $this -> block_1;
    }
    
    
}
$block_1_data = new Block_1_data();


?>

<?php //require $block_1_data -> Get_data( 'home', 'section-2-info' )['path']; ?>
