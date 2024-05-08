<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;

// CMS
use App\Http\Requests\PageFormRequest;
use App\Models\Page;
use App\Repositories\PageRepository;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    private $repository;

    public function __construct(PageRepository $repository)
    {
//        $this->middleware('permission:page-list|page-create|page-edit|page-delete', ['only' => ['index','store']]);
//        $this->middleware('permission:page-create', ['only' => ['create','store']]);
//        $this->middleware('permission:page-edit', ['only' => ['edit','update']]);
//        $this->middleware('permission:page-delete', ['only' => ['destroy']]);

        $this->repository = $repository;
    }

    public function index()
    {
        //Page::fixTree();
        $tree = Page::withDepth()->defaultOrder()->get()->toTree();
        return view('admin.page.index', ['list' => $tree]);
    }

    public function create()
    {
        return view('admin.page.form', [
            'selectMenu' => Page::pluck('title', 'id')->prepend('Brak podstrony', 0),
            'cardTitle' => 'Dodaj stronę',
            'backButton' => route('admin.page.index')
        ])->with('entry', Page::make());
    }

    public function store(PageFormRequest $request)
    {
        $this->repository->create($request->validated());
        return redirect(route('admin.page.index'))->with('success', 'Strona dodana');
    }

    public function edit(Page $page)
    {
        if(request()->get('lang')) {
            app()->setLocale(request()->get('lang'));
        }

        return view('admin.page.form', [
            'entry' => $page,
            'selectMenu' => Page::where('id', '!=', $page->id)->pluck('title', 'id')->prepend('Brak podstrony', 0),
            'cardTitle' => 'Edytuj strone',
            'backButton' => route('admin.page.index')
        ]);
    }

    public function update(PageFormRequest $request, int $id)
    {
        if(request()->get('lang')) {
            app()->setLocale(request()->get('lang'));
        }

        $page = $this->repository->find($id);
        $this->repository->update($request->validated(), $page);

        return redirect(route('admin.page.index'))->with('success', 'Strona zaktualizowana');
    }

    public function up(Page $page)
    {
        $node = Page::findOrFail($page->id);
        $node->up();
        return redirect(route('admin.page.index'))->with('success', 'Strona zaktualizowana');
    }

    public function down(Page $page)
    {
        $node = Page::findOrFail($page->id);
        $node->down();
        return redirect(route('admin.page.index'))->with('success', 'Strona zaktualizowana');
    }

    public function destroy(int $id)
    {
        $this->repository->delete($id);
        return response()->json('Deleted');
    }

    public function show(int $id)
    {
        //
    }

//    public function translate(){
//        $defaultLocale = 'pl';
//
//        $entries = DB::table('pages')->get();
//
//        foreach ($entries as $n) {
//            $existingModel = Page::find($n->id);
//
//            //'title', 'content', 'meta_title', 'meta_description'
//
//            // If the entry exists, update its attributes
//            if ($existingModel) {
//
//                // Existing data
//                $existingModel->fill([
//                    'parent_id' => $n->parent_id,
//                    'slug' => $n->slug,
//                    '_lft' => $n->_lft,
//                    '_rgt' => $n->_rgt,
//                    'uri' => $n->uri,
//                    'url' => $n->url,
//                    'url_target' => $n->url_target,
//                    'content_header' => $n->content_header,
//                    'header' => $n->header,
//                    'active' => $n->active,
//                    'type' => $n->type,
//                    'sort' => $n->sort,
//                    'created_at' => $n->created_at,
//                    'updated_at' => $n->updated_at,
//                    'meta_robots' => $n->meta_robots,
//                ]);
//
//                // Update translations for translatable attributes
//                $existingModel->setTranslation('title', $defaultLocale, $n->title);
//                $existingModel->setTranslation('content', $defaultLocale, $n->content);
//                $existingModel->setTranslation('meta_title', $defaultLocale, $n->meta_title);
//                $existingModel->setTranslation('meta_description', $defaultLocale, $n->meta_description);
//
//                // Save
//                $existingModel->save();
//            }
//        }
//
//        return redirect(route('admin.page.index'))->with('success', 'Wpisy przetłumaczone');
//    }
}
