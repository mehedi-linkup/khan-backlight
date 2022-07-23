<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use App\Models\Whatwe;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Video;
use App\Models\News;
use App\Models\Management;
use App\Models\BackImage;

class HomeController extends Controller
{
    public function index()
    {   

        return view('pages.website.index');
        // $category = Category::latest()->get();
        // $slider = Slider::latest()->get();
        // $whatwe = Whatwe::first();
        // $video = Video::latest()->get();
        // $gallery = Gallery::latest()->get();
        // $management = Management::latest()->get();
        // $news = News::latest()->get();
        // $backimage = BackImage::first();
        // return view('pages.website.index', compact('category', 'slider', 'gallery', 'video', 'management', 'news', 'whatwe', 'backimage'));
    }
    public function about() {
        return view('pages.website.about');
    }
    public function product() {
        return view('pages.website.product');
    }
    public function history() {
        return view('pages.website.history');
    }
    public function activity() {
        return view('pages.website.activity');
    }
    public function sister_concern() {
        return view('pages.website.sister-concern');
    }
    public function faq() {
        return view('pages.website.faq');
    }
    public function gallery() {
        return view('pages.website.gallery');
    }
    // public function submenu($id) {
    //     $category = Category::find($id);
    //     if (isset($category)) {
    //         $subcategory = Subcategory::where('category_id', $id)->get();
    //         $backimage = BackImage::first();
    //         return view('pages.website.submenu', compact('category', 'subcategory', 'backimage'));
    //     } else {
    //         $backimage = BackImage::first();
    //         return view('pages.website.not-found', compact('backimage'));
    //     }
    // }

    // subcategory id pass bellow
    // public function product($id) {
    //     $subcategory = Subcategory::find($id); // subcategory id retrieve which the product contain
    //     if (isset($subcategory)) {
    //         $category = Category::where('id', $subcategory->category_id)->first();
    //         $product = Product::where('subcategory_id', $id)->get();
    //         $backimage = BackImage::first();
    //         return view('pages.website.product', compact('subcategory','product', 'category', 'backimage'));
    //     } else {
    //         $backimage = BackImage::first();
    //         return view('pages.website.not-found', compact('backimage'));
    //     }
    // }

    // public function productDetail($id) {
    //     $product = Product::find( $id);
    //     $subcategory = Subcategory::where('id', $product->subcategory_id)->first();
    //     $category = Category::where('id', $product->category_id)->first();
    //     $backimage = BackImage::first();
    //     return view('pages.website.product-detail', compact('product', 'subcategory', 'category', 'backimage'));
    // }

    // public function newsDetail($id) {
    //     $news = News::find($id);
    //     if (isset($news)) {
    //         $backimage = BackImage::first();
    //         return view('pages.website.news-details', compact('news', 'backimage'));
    //     } else {
    //         $backimage = BackImage::first();
    //         return view('pages.website.not-found', compact('backimage'));
    //     }
    // }

}
