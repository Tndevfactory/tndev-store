<?php

namespace App\Http\Controllers;

use App\Models\User;
//use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class AboutController extends Controller
{

// Display user data in view
    public function showUsers(){
      $users = User::all();
      return view('about', compact('users'));
    }

    public function pdfAbout(){
       
       $users = User::all();
       $pdf = PDF::loadView('facture-pdf', compact('users'));
       //return view('facture-pdf', compact('users'));
 
      return $pdf->download('pdf_file.pdf');
    }
}