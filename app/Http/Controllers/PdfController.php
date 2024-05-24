<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Pdf\pdf;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PdfController extends Controller
{
    protected $fpdf;

    public function index()
    {
        $users = User::all();


        $html = View::make('user.user_table', compact('users'));
        $pdf = new pdf();
        $pdf->AddPage();
        $pdf->SetFont('Arial', '', 10);

        // Add the HTML to FPDF
        $pdf->WriteHTML($html);

        // Output the PDF
        $pdf->Output();
        exit;
    }



}
