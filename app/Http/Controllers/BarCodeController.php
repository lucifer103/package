<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DNS1D;
use DNS2D;
use Milon\Barcode\DNS1D as BarcodeDNS1D;

class BarCodeController extends Controller
{
    public function index()
    {
        $content = 7;

        $typesOf1d = [
            'C39', 'C39+', 'C39E', 'C39E+', 'C93', 'S25',
            'S25+', 'I25', 'I25+',
            'EAN2', 'EAN5',
            'MSI+', 'POSTNET', 'PLANET', 'RMS4CC',
            'KIX', 'CODABAR', 'CODE11', 'PHARMA', 'PHARMA2T'
        ];

        $barcodeOf1d = [];
        foreach ($typesOf1d as $type) {
            $barcodeOf1d[$type] = DNS1D::getBarcodePNG($content, $type, 3, 20, [220, 220, 220]);
        }

        $typesOf2d = [
            'QRCODE', 'QRCODE,L', 'QRCODE,M', 'QRCODE,Q', 'QRCODE,H',
            'DATAMATRIX', 'PDF417', 'PDF417,a,e',
        ];

        $barcodeOf2d = [];
        foreach ($typesOf2d as $type) {
            $barcodeOf2d[$type] = DNS2D::getBarcodePNG($content, $type, 4, 4, [220, 220, 220]);
        }

        return view('barcode', compact('barcodeOf1d', 'barcodeOf2d'));
    }
}
