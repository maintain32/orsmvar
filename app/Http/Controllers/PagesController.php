<?php
namespace App\Http\Controllers;

use Illuminate\View\View;

class PagesController extends Controller
{
    public function showHomePage()
    {
        return view('pages.front.home');
    }
    public function showReservePage()
    {
        return view('pages.front.reserve');
    }
    public function showAboutPage()
    {
        return view('pages.front.about');
    }
    public function showLoginPage()
    {
        return view('pages.front.login');
    }
    public function showAddBookingPage()
    {
        return view('pages.admin.add-booking');
    }
    public function showEditBookingPage()
    {
        return view('pages.admin.edit-booking');
    }
    public function showViewBookingPage()
    {
        return view('pages.admin.view-booking');
    }
}
