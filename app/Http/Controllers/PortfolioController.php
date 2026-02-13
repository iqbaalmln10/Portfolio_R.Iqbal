<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    private function getPortfolioData()
    {
        return [
            'profile' => [
            'name' => 'R.Iqbal Maulana Ibrahim',
            'role' => 'Fullstack Developer',
            'bio' => 'Membangun solusi digital yang elegan dan fungsional.',
            'github' => 'https://github.com/iqbaalmln10',
            'linkedin' => 'https://linkedin.com/in/Raden Iqbal',
            'instagram' => 'https://instagram.com/iqbaalmln._',
            ],
            'projects' => [
                ['id' => '1', 'title' => 'Sistem Kasir R.Collection', 'desc' => '...', 'tech' => ['Java', 'MySQL'], 'images' => ['https://images.unsplash.com/photo-1556742044-3c52d6e88c62?q=80&w=600', 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=600']],
                ['id' => '2', 'title' => 'E-Commerce KosHub', 'desc' => '...', 'tech' => ['PHP', 'Bootstrap'], 'images' => ['https://images.unsplash.com/photo-1556742044-3c52d6e88c62?q=80&w=600', 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=600']],
                ['id' => '3', 'title' => 'Sistem Manajemen Proman', 'desc' => '...', 'tech' => ['Laravel', 'Livewire'], 'images' => ['https://images.unsplash.com/photo-1556742044-3c52d6e88c62?q=80&w=600', 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=600']],
            ]
        ];
    }

    public function index()
    {
        $data = $this->getPortfolioData();
        return view('portfolio', [
            'profile' => $data['profile'],
            'projects' => $data['projects']
        ]);
    }

    public function show($id)
    {
        $data = $this->getPortfolioData();
        $project = collect($data['projects'])->firstWhere('id', $id);

        if (!$project) {
            abort(404);
        }

        return view('project-detail', [
            'project' => $project
        ]);
    }
}
