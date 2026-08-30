<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class BlogList extends Component
{
    use WithPagination;

    public string $category = 'all';
    public string $search = '';

    protected $queryString = [
        'category' => ['except' => 'all'],
        'search' => ['except' => ''],
    ];

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function selectCategory(string $cat)
    {
        $this->category = $cat;
        $this->resetPage();
    }

    public function render()
    {
        $query = Post::published();

        if ($this->category !== 'all') {
            $query->where('category', $this->category);
        }

        if (!empty($this->search)) {
            $query->where(function ($q) {
                $q->where('title', 'like', '%' . $this->search . '%')
                  ->orWhere('excerpt', 'like', '%' . $this->search . '%')
                  ->orWhere('body', 'like', '%' . $this->search . '%');
            });
        }

        $posts = $query->paginate(9);

        $categories = [
            'all' => 'All Articles',
            'Marriage Guidance' => 'Marriage Guidance (വിവാഹം)',
            'Toxic Relationship Recovery' => 'Toxic Recovery',
            'Women\'s Empowerment' => 'Women\'s Boundaries',
            'Family Systems' => 'Family Systems & NRI',
            'Malayalam Guidance' => 'Malayalam (മലയാളം)',
        ];

        return view('livewire.blog-list', [
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }
}
