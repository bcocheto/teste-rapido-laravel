<?php

namespace App\Http\Controllers;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;

class ArquivoController extends Controller
{
    private $filesystem;

    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }

    public function index()
    {
        $caminhoArquivo = storage_path('app/public/texto.txt');

        if ($this->filesystem->exists($caminhoArquivo)) {
            $conteudo = $this->filesystem->get($caminhoArquivo);
            return view('ArquivoView', ['conteudo' => $conteudo]);
        } else {
            return view('ArquivoView', ['erro' => 'Arquivo não encontrado!']);
        }
    }
}
