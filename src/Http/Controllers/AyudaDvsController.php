<?php

namespace Chondal\AyudaDvs\Http\Controllers;

use App\Http\Controllers\Controller;
use Chondal\AyudaDvs\Facades\AyudaDvs;

class AyudaDvsController extends Controller
{

    public function index()
    {
        return view('AyudaDvs::index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tutoriales()
    {
        $groups = AyudaDvs::get('tutoriales');

        return view('AyudaDvs::turoriales', compact(
            'groups'
        ));
    }

    public function faqs()
    {
        $groups = AyudaDvs::get('faqs');
        return view('AyudaDvs::faqs', compact(['groups']));
    }

    public function faq($id)
    {
        $groups = AyudaDvs::get('faqs/ver/' . $id);
        return view('AyudaDvs::faq', compact(['faq']));
    }

    public function tutorial($id)
    {
        $groups = AyudaDvs::get('tutoriales/ver/' . $id);
        return view('AyudaDvs::tutorial', compact(['tutorial']));
    }

}
