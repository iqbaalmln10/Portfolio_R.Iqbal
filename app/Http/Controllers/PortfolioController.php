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
            'github' => 'https://github.com/iqbaalmln10',
            'linkedin' => 'https://linkedin.com/in/Raden Iqbal',
            'instagram' => 'https://instagram.com/iqbaalmln._',
        ];

        $projects = [
            [
                'title' => 'Sistem Kasir R.Collection',
                'desc' => 'Aplikasi manajemen bisnis Toko Jahit.',
                'tech' => ['Java', 'MySQL', 'JavaFX'],
                'images' => [
                    'https://images.unsplash.com/photo-1556742044-3c52d6e88c62?q=80&w=600',
                    'https://images.unsplash.com/photo-1556742031-c696818a59ce?q=80&w=600',
                    'https://images.unsplash.com/photo-1472851294608-062f824d29cc?q=80&w=600',
                ]
            ],
            [
                'title' => 'E-Commerce KosHub',
                'desc' => 'Platform pemasaran bisnis kos-kosan.',
                'tech' => ['PHP', 'Bootstrap', 'MySQL'],
                'images' => [
                    'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?q=80&w=600',
                    'https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?q=80&w=600',
                    'https://images.unsplash.com/photo-1493809842364-78817add7ffb?q=80&w=600',
                ]
            ],
            [
                'title' => 'Sistem Manajemen Proman',
                'desc' => 'Sistem manajemen kehidupan sehari-hari.',
                'tech' => ['Laravel', 'Livewire', 'MySQL'],
                'images' => [
                    'https://images.unsplash.com/photo-1484480974693-6ca0a78fb36b?q=80&w=600',
                    'https://images.unsplash.com/photo-1506784919141-93ad54563f8d?q=80&w=600',
                    'https://images.unsplash.com/photo-1454165833267-028cc2402f9a?q=80&w=600',
                ]
            ],
        ];

        return view('portfolio', compact('profile', 'projects'));
    }
}
