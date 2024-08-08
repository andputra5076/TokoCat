<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    public function index($page = null)
    {
        $data['title'] = 'Homepage';
        $data['content'] = $this->home->select(
            [
                'product.id', 'product.title AS product_title', 'product.description', 'product.image', 'product.price', 'product.is_available',
                'category.title AS category_title', 'category.slug AS category_slug'
            ]
        )
        ->join('category')                  // Query to retrieve product data along with its category
        ->where('product.is_available', 1)  // Select available stock only            // Limit 10 items per page
        ->get();
        $data['total_rows'] = $this->home->where('product.is_available', 1)->count();
        $data['pagination'] = $this->home->makePagination(base_url('home'), 3, $data['total_rows']); // 3 is the segment for page number
        $data['page'] = 'pages/home/index'; // Redirect to the page

        $this->view($data);
    }
}

/* End of file Home.php */

