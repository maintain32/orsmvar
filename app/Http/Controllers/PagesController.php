<?php
namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Repository\ReservationRepository;

class PagesController extends Controller
{
    private $oReservationModel;

    public function __construct()
    {
        $this->oReservationModel = new ReservationRepository();
    }
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
        if (session()->has('user.type')) {
            return redirect('/dashboard');
        }
        return view('pages.admin.login');
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
        $booking = $this->oReservationModel->getAll();
        return view('pages.admin.view-booking', compact('booking'));
    }
    public function showReservationPage($sBookingCode)
    {
        $booking = $this->oReservationModel->getReservationCode($sBookingCode);
        return view('pages.front.booking-info', compact('booking'));
    }
    public function showDashboardPage()
    {
        $booking = $this->oReservationModel->getReservedBooking();
        logger($booking);
        return view('pages.admin.dashboard', compact('booking'));
    }
    public function showTestPage()
    {
        return view('pages.test.home');
    }
    public function doLogout()
    {
        session()->flush();
        return redirect('/login');
    }
}
