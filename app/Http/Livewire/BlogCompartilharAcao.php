<?php

namespace App\Http\Livewire;

use Google\Service\Blogger\Resource\Blogs;
use Livewire\Component;

class BlogCompartilharAcao extends Component
{
    public Blog $blog;
    public int $compartilhamentos;

    public function mount(Blog $blog)
    {
        $this->blog = $blog;
        $compartilhamentos_qtd = Blog::whereBlogId($blog->id)
        ->get();
        $this->compartilhamentos = $compartilhamentos_qtd->count();
    }

    public function render()
    {
        return view('livewire.blog-compartilhar-acao');
    }
}
