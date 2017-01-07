<?php
    /*
    Block with image 79x79px, product's name, rating and prices
    */

class Block_2_data {
    public $block_2;
    public $path = 'other_modules/custom_modules/block_2/block_2.php';

    public function Get_data( $page, $position ) {
        switch ( $page ) {
            case 'home':
                switch ( $position ) {
                    case 'last-section':
                        $this -> block_2 = array (
                            'path' => $this -> path,
                            'image' => 'images/home/columns_featured-products/columns_featured-products(1).png',
                            'product-name' => 'Oyo cantilever stairs',
                            'product-rating' => '4-stars',
                            'product-price-without-discount' => '111,00',
                            'product-price-with-discount' => '53,00'
                        );
                    break;
                    
                }
            break;
                
            case 'products-list':
                switch ( $position ) {
                    case 'sidebar-bottom':
                        $this -> block_2 = array (
                            'path' => $this -> path,
                            'image' => 'images/aside/column_hot-sale/column_hot-sale(1).png',
                            'product-name' => 'Kurve Chair',
                            'product-rating' => '4-stars',
                            'product-price-without-discount' => '125,00',
                            'product-price-with-discount' => '75,00'
                        );
                    break;                    
                }                    
            break;

            case 'header-1':
                switch ( $position ) {
                    case 'dropdown-menu':
                        $this -> block_2 = array (
                            'path' => $this -> path,
                            'image' => 'images/header/shopping-basket-dropdown-menu.png',
                            'product-name' => 'Kurve table',
                            'product-rating' => '4-stars',
                            'product-price-without-discount' => '220,00',
                            'product-price-with-discount' => '180,00'
                        );
                        break;
                }
            break;
        }
        return $this -> block_2;
    }
    
    
}
$block_2_data = new Block_2_data();


?>