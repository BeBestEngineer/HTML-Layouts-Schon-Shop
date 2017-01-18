<?php
    /*
    Block with name of page and breadcrumbs
    */

class Block_1_data {
    public $block_1;
    public $path = 'pages_modules/other_modules/custom_modules/block_1/block_1.php';

    public function Get_data( $page, $position ) {
        switch ( $page ) {
            /*
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
            */
            case 'products-list':
                switch ( $position ) {
                    case 'main-info':
                        $this -> block_1 = array (
                            'path' => $this -> path,
                            'title' => 'Chairs',
                            'breadcrumbs' => array ( 'home', 'products' ),
                            'last-breadcrumb' => 'Chairs'
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
                            'breadcrumbs' => array ( 'home' ),
                            'last-breadcrumb' => 'Shopping cart'
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
                            'breadcrumbs' => array ( 'home' ),
                            'last-breadcrumb' => 'About us'
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
                            'breadcrumbs' => array ( 'home' ),
                            'last-breadcrumb' => 'Contact us'
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