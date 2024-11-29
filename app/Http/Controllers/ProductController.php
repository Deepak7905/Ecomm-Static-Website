<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        $products = [
            ['id' => 1, 'name' => 'Egg', 'price' => 397, 'old_price' => 397, 'description' => 'Grain, Breakfast, Fresh', 'image' => 'assets/images/product-image/141.jpg', 'rating' => 4],
            ['id' => 2, 'name' => 'Dry Fruits', 'price' => 697, 'old_price' => 999, 'description' => 'Grain, Breakfast, Fresh', 'image' => 'assets/images/product-image/142.jpg', 'rating' => 5],
            ['id' => 3, 'name' => 'Organic Pickle', 'price' => 397, 'old_price' => 400, 'description' => 'Grain, Breakfast, Fresh', 'image' => 'assets/images/product-image/143.jpg', 'rating' => 3],
            ['id' => 4, 'name' => 'Soft Drink', 'price' => 297, 'old_price' => 300, 'description' => 'Grain, Breakfast, Fresh', 'image' => 'assets/images/product-image/140.jpg', 'rating' => 2],
            ['id' => 5, 'name' => 'Bread', 'price' => 100, 'old_price' => 220, 'description' => 'Grain, Breakfast, Fresh', 'image' => 'assets/images/product-image/bread.jpg', 'rating' => 5],
            ['id' => 6, 'name' => 'Wheat Flour', 'price' => 220, 'old_price' => 620, 'description' => 'Grain, Breakfast, Fresh', 'image' => 'assets/images/product-image/wheat.jpg', 'rating' => 5],
            ['id' => 7, 'name' => 'Dark Choclate', 'price' => 100, 'old_price' => 400, 'description' => 'Grain, Breakfast, Fresh', 'image' => 'assets/images/product-image/choco.jpg', 'rating' => 5],
            ['id' => 8, 'name' => 'Biscuit', 'price' => 40, 'old_price' => 60, 'description' => 'Grain, Breakfast, Fresh', 'image' => 'assets/images/product-image/biscuit.jpg', 'rating' => 5],
        ];
 

        // product 2
        $products2 = [
            [
                'id' => 1,
                'name' => 'Men Printed T-Shirt',
                'link' => 'https://www.flipkart.com/nb-nicky-boy-printed-men-round-neck-black-t-shirt/p/itm310d4eb7698a1?pid=TSHGGHQMGHJGA8YB&lid=LSTTSHGGHQMGHJGA8YB4ORWIV&marketplace=FLIPKART&store=clo%2Fash%2Fank%2Fedy&srno=b_1_1&otracker=browse&fm=organic&iid=en_KYvzMk1MReyNTBb0PnNZa4d_5YELb7nGkyCECCTSCz98lLioWcV6GiaJsCotd3QaXTaMKrdLlszayUyY3XWo9Q%3D%3D&ppt=pp&ppn=pp&ssid=bl8935fpds0000001719904648358">
                                <div class="ec-pro-image-outer',
                'title' => 'Men Printed Round Neck Cotton Half T-Shirt',
                'price' => 299,
                'old_price' => 2199,
                'description' => 'Men Printed T-shirt',
                'image' => 'assets/images/product-image/1.png',
                'rating' => 4
            ],
            [
                'id' => 2,
                'name' => 'Mens White Shirts',
                'link' => 'https://www.flipkart.com/voroxy-men-solid-formal-white-shirt/p/itm136e60f198bc1?pid=SHTGSREHJ64HPGY8&lid=LSTSHTGSREHJ64HPGY8DEBCAK&marketplace=FLIPKART&store=clo%2Fash%2Faxc%2Fmmk%2Fbk1&srno=b_1_10&otracker=browse&fm=organic&iid=1a35f8ea-1396-4b85-8497-b18dea005737.SHTGSREHJ64HPGY8.SEARCH&ppt=browse&ppn=browse', // Provide a valid link here
                'title' => 'Men Regular Fit Solid Spread Collar Formal Shirt',
                'price' => 299,
                'old_price' => 2199,
                'description' => 'Men White Shirt',
                'image' => 'assets/images/product-image/2.png',
                'rating' => 4
            ],
            [
                'id' => 3,
                'name' => 'Women Kurta',
                'link' => 'https://www.flipkart.com/gulmohar-jaipur-women-printed-flared-kurta/p/itm007e78812b4d4?pid=KTAGUHNDN4UXG3KT&lid=LSTKTAGUHNDN4UXG3KTBI4JKS&marketplace=FLIPKART&q=kurtas+kurtis&store=clo%2Fcfv%2Fcib%2Frkt&srno=s_1_2&otracker=search&fm=organic&iid=en_fkSfLVdUoqH5D6lifC8AXO-40dOR7Dc0J2v2lDwLwg_7wc1jjkrnHvpPe5aUmSjF25K20wGoQqm20ye3uAYFwg%3D%3D&ppt=sp&ppn=sp&ssid=0f9tyo2rls0000001719905966036&qH=5985e3313e9e348f', // Provide a valid link here
                'title' => 'Women Printed Pure Cotton Flared Kurta (Maroon, Grey, Beige)',
                'price' => 697,
                'old_price' => 1999,
                'description' => 'Women Printed Pure Cotton Flared Kurta (Maroon, Grey, Beige)',
                'image' => 'assets/images/product-image/4.png',
                'rating' => 4
            ],
            [
                'id' => 4,
                'name' => 'Women Solid Grey Track Pant',
                'link' => 'https://www.flipkart.com/voxaura-solid-women-grey-track-pants/p/itmea8cffb1e2834?pid=TKPH22BH67Q6RNY5&lid=LSTTKPH22BH67Q6RNY5HB9GHS&marketplace=FLIPKART&q=lowe&store=clo%2Fvua%2Fjlk&srno=s_1_9&otracker=search&otracker1=search&fm=Search&iid=03ae6966-fda7-4a0a-a2cf-1779628c04b9.TKPH22BH67Q6RNY5.SEARCH&ppt=sp&ppn=sp&ssid=tp19ot6bw00000001719906528378&qH=964267e48ed1fb4f', // Provide a valid link here
                'title' => 'Women Lower Grey Straigt Fit For Regular Use',
                'price' => 397,
                'old_price' => 999,
                'description' => 'Women Lower Grey Straigt Fit For Regular Use',
                'image' => 'assets/images/product-image/3.jpeg',
                'rating' => 4
            ],
           
        ];
        return view('front.pages.product', compact('products', 'products2'));
    }

}
