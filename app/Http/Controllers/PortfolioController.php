<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'R.Iqbal Maulana Ibrahim',
            'role' => 'Fullstack Developer',
            'bio' => 'Membangun solusi digital yang elegan dan fungsional.',
        ];

        $projects = [
            [
                'title' => 'Sistem Antrian RS',
                'desc' => 'Aplikasi manajemen antrian pasien real-time.',
                'tech' => ['Laravel 12', 'Tailwind', 'Livewire'],
                'image' => 'https://via.placeholder.com/600x400'
            ],
            [
                'title' => 'E-Commerce Skincare',
                'desc' => 'Platform penjualan produk kecantikan dengan integrasi payment gateway.',
                'tech' => ['PHP', 'Bootstrap', 'MySQL'],
                'image' => 'https://via.placeholder.com/600x400'
            ],
            [
                'title' => 'Portfolio API',
                'desc' => 'RESTful API untuk manajemen data portofolio.',
                'tech' => ['Laravel', 'Sanctum'],
                'image' => 'https://via.placeholder.com/600x400'
            ],
        ];

        return view('portfolio', compact('profile', 'projects'));
    }
}
