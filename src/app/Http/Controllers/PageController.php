<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $bodyCss;
    public function __construct()
    {
        $this->bodyCss = 'class="authentication-bg bg-primary authentication-bg-pattern d-flex align-items-center pb-0 vh-100"';
    }

    public function starter(){
        return view('admin/pages/starter');
    }
    
    public function login(){
        $bodyCss = $this->bodyCss;
        return view('admin/auth/login',compact('bodyCss'));
    }

    public function register(){
        $bodyCss = $this->bodyCss;
        return view('admin/auth/register',compact('bodyCss'));
    }

    public function logout(){
        $bodyCss = $this->bodyCss;
        return view('admin/pages/logout',compact('bodyCss'));
    }

    public function recoverpw(){
        $bodyCss = $this->bodyCss;
        return view('admin/pages/recoverpw',compact('bodyCss'));
    }

    public function lockScreen(){
        $bodyCss = $this->bodyCss;
        return view('admin/pages/lockscreen',compact('bodyCss'));
    }

    public function confirmMail(){
        $bodyCss = $this->bodyCss;
        return view('admin/pages/confirm-mail',compact('bodyCss'));
    }

    public function notFound(){
        $bodyCss = $this->bodyCss;
        return view('admin/pages/404',compact('bodyCss'));
    }

    public function notFoundAlt(){
        $bodyCss = $this->bodyCss;
        return view('admin/pages/404-alt',compact('bodyCss'));
    }

    public function errorPage(){
        $bodyCss = $this->bodyCss;
        return view('admin/pages/500',compact('bodyCss'));
    }

    public function about(){
        return view('admin/extra-pages/about');
    }

    public function contact(){
        return view('admin/extra-pages/contact');
    }

    public function companies(){
        return view('admin/extra-pages/companies');
    }

    public function members(){
        return view('admin/extra-pages/members');
    }

    public function members2(){
        return view('admin/extra-pages/members2');
    }

    public function timeline(){
        return view('admin/extra-pages/timeline');
    }

    public function invoice(){
        return view('admin/extra-pages/invoice');
    }

    public function maintenance(){
        $bodyCss = 'class="authentication-bg bg-primary authentication-bg-pattern d-flex align-items-center pb-0 vh-100"';
        return view('admin/extra-pages/maintenance',compact('bodyCss'));
    }

    public function comingsoon(){
        $bodyCss = 'class="authentication-bg bg-primary authentication-bg-pattern d-flex align-items-center pb-0 vh-100"';
        return view('admin/extra-pages/comingsoon',compact('bodyCss'));
    }

    public function faq(){
        return view('admin/extra-pages/faq');
    }

    public function pricing(){
        return view('admin/extra-pages/pricing');
    }

    public function profile(){
        return view('admin/extra-pages/profile');
    }

    public function emailTemplate(){
        return view('admin/extra-pages/email-template');
    }

    public function searchResult(){
        return view('admin/extra-pages/search-result');
    }

    public function sitemap(){
        return view('admin/extra-pages/sitemap');
    }

    public function calendar(){
        return view('admin/apps/calendar');
    }

    public function tickets(){
        return view('admin/apps/tickets');
    }

    public function todo(){
        return view('admin/apps/todo');
    }

    public function taskboard(){
        return view('admin/apps/taskboard');
    }

    public function grid(){
        return view('admin/admin-ui/grid');
    }

    public function sweetalert(){
        return view('admin/admin-ui/sweetalert');
    }

    public function tilesbox(){
        return view('admin/admin-ui/tilesbox');
    }

    public function nestable(){
        return view('admin/admin-ui/nestable');
    }

    public function rangeslider(){
        return view('admin/admin-ui/rangeslider');
    }
    
    public function ratings(){
        return view('admin/admin-ui/ratings');
    }

    public function filemanager(){
        return view('admin/admin-ui/filemanager');
    }

    public function lightbox(){
        return view('admin/admin-ui/lightbox');
    }

    public function slider(){
        return view('admin/admin-ui/slider');
    }

    public function scrollbar(){
        return view('admin/admin-ui/scrollbar');
    }

    public function treeview(){
        return view('admin/admin-ui/treeview');
    }

    public function typography(){
        return view('admin/ui-kit/typography');
    }

    public function cards(){
        return view('admin/ui-kit/cards');
    }

    public function buttons(){
        return view('admin/ui-kit/buttons');
    }

    public function modals(){
        return view('admin/ui-kit/modals');
    }

    public function checkboxradio(){
        return view('admin/ui-kit/checkbox-radio');
    }

    public function spinners(){
        return view('admin/ui-kit/spinners');
    }

    public function ribbons(){
        return view('admin/ui-kit/ribbons');
    }

    public function portlets(){
        return view('admin/ui-kit/portlets');
    }

    public function tabs(){
        return view('admin/ui-kit/tabs');
    }

    public function progressbars(){
        return view('admin/ui-kit/progressbars');
    }

    public function notifications(){
        return view('admin/ui-kit/notifications');
    }

    public function carousel(){
        return view('admin/ui-kit/carousel');
    }

    public function video(){
        return view('admin/ui-kit/video');
    }

    public function tooltipspopovers(){
        return view('admin/ui-kit/tooltipspopovers');
    }

    public function images(){
        return view('admin/ui-kit/images');
    }

    public function bootstrap(){
        return view('admin/ui-kit/bootstrap');
    }

}
