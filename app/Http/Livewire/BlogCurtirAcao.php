<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;
use App\Models\BlogCurtir;

class BlogCurtirAcao extends Component
{
    public Blog $blog;
    public int $likes;

    public function mount(Blog $blog)
    {
        $this->blog = $blog;
        $likes_qtd = BlogCurtir::whereBlogId($blog->id)
        ->get();
        $this->likes = $likes_qtd->count();
    }

    public function dar_like_blog($blog_id)
    {
        if(session()->get("usuario_site")){
            $verificar = BlogCurtir::whereUsuarioSiteId(session()->get('usuario_site')['id'])
            ->whereBlogId($blog_id)
            ->first();
            if($verificar){
                $verificar->delete();

                $this->likes--;

                $this->dispatchBrowserEvent( 'toastr:success', [
                    'message' =>  'Você descurtiu essa publicação',
                ]);
            } else {
                $blog = new BlogCurtir;
                $blog->usuario_site_id = session()->get('usuario_site')['id'];
                $blog->blog_id = $blog_id;
                $blog->save();

                $this->likes++;

                $this->dispatchBrowserEvent( 'toastr:success', [
                    'message' =>  'Você curtiu essa publicação',
                ]);
            }
        }else{
            $this->dispatchBrowserEvent( 'toastr:error', [
                'message' =>  'Você precisa estar logado',
            ]);
        }
    }
    
    public function render()
    {
        return view('livewire.blog-curtir-acao');
    }
}
