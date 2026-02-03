<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Inertia\Inertia;
use App\Models\Collection;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\File\File;
use App\Models\Log;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
   

    public function elgato()
    {

      

        return Inertia::render('Staff/Elgato');
    }

}
