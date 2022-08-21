<?php 
	
	namespace App\Http\Controllers;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Redirect;
	
	use App\Models\Page;
	use App\Models\Product;

	class IndexController extends Controller{

		private $template = 'default';

		public function indexAction(){

			$template = $this->template;

			return view('pages.index', compact('template'));
		}

		public function categoryAction(){

			$template = $this->template;

			$page = Page::select();



			$products = Product::where('price', '>' , 120000)->get();

			//dd($products);


			$title = 'Страница категории';

			return view('pages.category', compact('template', 'title', 'page', 'products'));
		}

		public function productAction(){

			$template = $this->template;

			return view('pages.product', compact('template'));
		}

		public function cartAction(){

			$template = $this->template;

			return view('pages.cart', compact('template'));
		}

		public function cabinetAction(){

			$template = $this->template;

			return view('pages.cabinet', compact('template'));
		}

	}