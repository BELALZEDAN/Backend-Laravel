<?php

namespace App\Http\Controllers;

use App\Http\Resources\WorkShopResource;
use App\Models\About;
use App\Models\Contact;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Gallery;
use App\Models\Team;
use App\Models\WorkShop;
use App\Models\WorkShopImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    public function main()
    {
        $slider = Slider::withTranslations()->get();
        $services = Service::withTranslations()->get();
        $contacts = Contact::first();

        return view('pages.home', with(['services' => $services, 'slider' => $slider, 'contacts' => $contacts]));
    }

    public function about()
    {

        $about = About::withTranslations()->first();
        $team = Team::withTranslations()->get();
        $contacts = Contact::first();

        return view('pages.about', with(['about' => $about, 'team' => $team, 'contacts' => $contacts]));
    }

    public function gallery()
    {
        // $gallery = Gallery::all();
        // $contacts = Contact::first();
         $workshop = WorkShop::withTranslations()->get();
        $workshopimage = WorkShopImage::get();
        $contacts = Contact::first();
        return view('pages.gallery', with(['workshop' => $workshop, 'workshopimage' => $workshopimage, 'contacts' => $contacts]));
    }

    public function woodCarving()
    {
        // $gallery = Gallery::all();
        // $contacts = Contact::first();
         $workshop = WorkShop::withTranslations()->get();
        $workshopimage = WorkShopImage::get();
        $contacts = Contact::first();
        return view('pages.wood_carving', with(['workshop' => $workshop, 'workshopimage' => $workshopimage, 'contacts' => $contacts]));
    }

    public function contact()
    {
        $contacts = Contact::first();

        return view('pages.contact', with(['contacts' => $contacts]));
    }
    public function workshop()
    {
        $workshop = WorkShop::withTranslations();
        $workshopimage = WorkShopImage::get();
        $contacts = Contact::first();
        return view('pages.workshop', with(['workshop' => $workshop->where('type','Workshop')->get(), 'workshopimage' => $workshopimage, 'contacts' => $contacts]));
    }
    public function services()
    {
        $services = Service::withTranslations()->get();
        $contacts = Contact::first();

        return view('pages.services', with(['services' => $services, 'contacts' => $contacts]));
    }
    public function show_services($id)
    {

        $services = Service::find($id);
        $services->loadTranslations();

        $contacts = Contact::first();

        return view('pages.show_services', with(['services' => $services, 'contacts' => $contacts]));
    }
}
