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
        $booking = $this->oReservationModel->getAll();
        return view('pages.admin.view-booking', compact('booking'));
    }
    public function showReservationPage($sBookingCode)
    {
        $booking = $this->oReservationModel->getReservationId($sBookingCode);
        return view('pages.front.booking-info', compact('booking'));
    }
}
