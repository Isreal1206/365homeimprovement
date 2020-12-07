<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MarketCategory;
use App\Product;
use App\Marketer;

class MarketController extends Controller
{
    public function index()
    {
    	$marketers1  = MarketCategory::where('name', 'Bath Products')->orderBy('created_at','asc')->get();
    	$marketers2  = MarketCategory::where('name', 'Bedroom Products')->orderBy('created_at','asc')->get();
        $marketers3  = MarketCategory::where('name', 'Furniture')->orderBy('created_at','asc')->get();
        $marketers4  = MarketCategory::where('name', 'Holiday Decor')->orderBy('created_at','asc')->get();
        $marketers5  = MarketCategory::where('name', 'Home Decor')->orderBy('created_at','asc')->get();
        $marketers6  = MarketCategory::where('name', 'Home Improvement')->orderBy('created_at','asc')->get();
        $marketers7  = MarketCategory::where('name', 'Housekeeping and Laundry')->orderBy('created_at','asc')->get();
        $marketers8  = MarketCategory::where('name', 'Kitchen and Dining')->orderBy('created_at','asc')->get();
        $marketers9  = MarketCategory::where('name', 'Living Products')->orderBy('created_at','asc')->get();
        $marketers10 = MarketCategory::where('name', 'Lighting')->orderBy('created_at','asc')->get();
        $marketers11 = MarketCategory::where('name', 'Outdoor Products')->orderBy('created_at','asc')->get();
        $marketers12 = MarketCategory::where('name', 'Storage and Organization')->orderBy('created_at','asc')->get();
        return view('links.market.index')->with('marketers1', $marketers1)->with('marketers2', $marketers2)->with('marketers3', $marketers3)->with('marketers4', $marketers4)->with('marketers5', $marketers5)->with('marketers6', $marketers6)->with('marketers7', $marketers7)->with('marketers8', $marketers8)->with('marketers9', $marketers9)->with('marketers10', $marketers10)->with('marketers11', $marketers11)->with('marketers12', $marketers12);
    }

    public function categories($category){
        $categories  =   MarketCategory::where('name', '=', $category)->get();
        foreach ($categories as $cat) {
            $cat   = MarketCategory::where('name', '=', $category)->first();
            $cat1  = MarketCategory::where('name', 'Bath Products')->orderBy('created_at','asc')->first();
            $cat2  = MarketCategory::where('name', 'Bedroom Products')->orderBy('created_at','asc')->first();
            $cat3  = MarketCategory::where('name', 'Furniture')->orderBy('created_at','asc')->first();
            $cat4  = MarketCategory::where('name', 'Holiday Decor')->orderBy('created_at','asc')->first();
            $cat5  = MarketCategory::where('name', 'Home Decor')->orderBy('created_at','asc')->first();
            $cat6  = MarketCategory::where('name', 'Home Improvement')->orderBy('created_at','asc')->first();
            $cat7  = MarketCategory::where('name', 'Housekeeping and Laundry')->orderBy('created_at','asc')->first();
            $cat8  = MarketCategory::where('name', 'Kitchen and Dining')->orderBy('created_at','asc')->first();
            $cat9  = MarketCategory::where('name', 'Living Products')->orderBy('created_at','asc')->first();
            $cat10 = MarketCategory::where('name', 'Lighting')->orderBy('created_at','asc')->first();
            $cat11 = MarketCategory::where('name', 'Outdoor Products')->orderBy('created_at','asc')->first();
            $cat12 = MarketCategory::where('name', 'Storage and Organization')->orderBy('created_at','asc')->first();
        }
        return view('links.market.categories')->with('categories', $categories)->with('cat', $cat)->with('cat1', $cat1)->with('cat2', $cat2)->with('cat3', $cat3)->with('cat4', $cat4)->with('cat5', $cat5)->with('cat6', $cat6)->with('cat7', $cat7)->with('cat8', $cat8)->with('cat9', $cat9)->with('cat10', $cat10)->with('cat11', $cat11)->with('cat12', $cat12);
    }

    public function products($slug){
        $subcategories  =   MarketCategory::where('slug', '=', $slug)->first();
        //$products       =   Product::where('subcategory', $subcategories->sub_name)->get();
        $market         =   Marketer::where('status', '=', 'approved')->get();
        $products       =   Product::where(['subcategory' => $subcategories->sub_name])->get();
        $product_desc   =   Product::where('markter_id', $marketer->marketer_id)->get();
        return view('links.market.products')->with('market', $market)->with('subcategories', $subcategories)->with('products', $products)->with('product_desc', $product_desc);
    }

    public function product_desc($slug, $id){
        $subcategories  =   MarketCategory::where('slug', '=', $slug)->first();
        $products       =   Product::where(['id' => $id])->first();
        return view('links.market.product-description')->with('subcategories', $subcategories)->with('products', $products);
    }


    public function bath()
    {
        $marketers = MarketCategory::where('name', 'Bath Products')->get();
        return view('links.market.categories-template')->with('marketers', $marketers);
    }

    public function bedroom()
    {
        $marketers = MarketCategory::where('name', 'Bedroom Products')->get();
        return view('links.market.categories-template')->with('marketers', $marketers);
    }

    public function furniture()
    {
        $marketers = MarketCategory::where('name', 'Furniture')->get();
        return view('links.market.categories-template')->with('marketers', $marketers);
    }

    public function holiday()
    {
        $marketers = MarketCategory::where('name', 'Holiday Decor')->get();
        return view('links.market.categories-template')->with('marketers', $marketers);
    }

    public function home()
    {
        $marketers = MarketCategory::where('name', 'Home Decor')->get();
        return view('links.market.categories-template')->with('marketers', $marketers);
    }

    public function homeimprove()
    {
        $marketers = MarketCategory::where('name', 'Home Improvement')->get();
        return view('links.market.categories-template')->with('marketers', $marketers);
    }

    public function housekeeping()
    {
        $marketers = MarketCategory::where('name', 'Housekeeping and Laundry')->get();
        return view('links.market.categories-template')->with('marketers', $marketers);
    }

    public function kitchen()
    {
        $marketers = MarketCategory::where('name', 'Kitchen and Dining')->get();
        return view('links.market.categories-template')->with('marketers', $marketers);
    }

    public function living()
    {
        $marketers = MarketCategory::where('name', 'Living Products')->get();
        return view('links.market.categories-template')->with('marketers', $marketers);
    }

    public function lighting()
    {
        $marketers = MarketCategory::where('name', 'Lighting')->get();
        return view('links.market.categories-template')->with('marketers', $marketers);
    }

    public function outdoor()
    {
        $marketers = MarketCategory::where('name', 'Outdoor Products')->get();
        return view('links.market.categories-template')->with('marketers', $marketers);
    }

    public function storage()
    {
        $marketers = MarketCategory::where('name', 'Storage and Or')->get();
        return view('links.market.categories-template')->with('marketers', $marketers);
    }
}
