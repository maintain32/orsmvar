<?php
namespace App\Http\Controllers;

use Illuminate\View\View;

class PagesController extends Controller
{
    public function showHomePage()
    {
        return view('pages.home');
    }
    public function showContactPage()
    {
        return view('pages.contact');
    }
    public function showReservePage()
    {
        return view('pages.reserve');
    }
    public function showGalleryPage()
    {
        return view('pages.gallery');
    }
    public function showAboutPage()
    {
        return view('pages.about');
    }
}
