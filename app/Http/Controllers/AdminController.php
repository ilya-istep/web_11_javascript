<?php 
	
	namespace App\Http\Controllers;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Redirect;
	use Illuminate\Support\Facades\Validator;
	use Illuminate\Support\Facades\Auth;
	use App\Models\Category;
	use App\Models\Product;
	use App\Validators\CategoryValidator;
	use App\Validators\LoginValidator;
	use App\Helpers\CheckcategoryHelpers;

	class AdminController extends Controller{

		private $template = 'admin';

		public function indexAction(){

			if (!Auth::check()) {
			    return redirect()->route('login');
			}

			$template = $this->template;


			return view('pages.admin.index', compact('template'));
		}

		public function categoryAction(){
			if (!Auth::check()) {
			    return redirect()->route('login');
			}

			$categories = Category::get();

			$template = $this->template;

			return view('pages.admin.category', compact('template', 'categories'));
		}

		public function addcategoryAction(Request $request){
			if (!Auth::check()) {
			    return redirect()->route('login');
			}

			$validator = CategoryValidator::addcategoryValidator($request);

			if($validator->fails()) {
				return redirect()->route('admin-category')->withErrors($validator)->withInput();
			}

			
			if(!CheckcategoryHelpers::addCategory('name', $request)){
				return redirect()->route('admin-category')->with('error', 'Категория с именем "'.$request->name.'" уже существует')->withInput();
			}


			return redirect()->route('admin-category')->with('success', 'Ок! Категория успешно добавлена')->withInput();

		}

		public function deletecategoryAction(Request $request){
			if (!Auth::check()) {
			    return redirect()->route('login');
			}

			$validator = CategoryValidator::deleteValidator($request);

			if($validator->fails()) {
				return redirect()->route('admin-category')->withErrors($validator)->withInput();
			}

			Category::where('id', $request->id_category)->delete();

			return redirect()->route('admin-category')->with('success', 'Ок! Категория успешно удалена')->withInput();
		}

		public function loginAction(){


			$template = $this->template;


			return view('pages.admin.login', compact('template'));
		}

		public function loginrequestAction(Request $request){

			$validator = LoginValidator::logoutValidator($request);


			if($validator->fails()) {
				return redirect()->route('login');
			}

			if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role_id' => 1])) {
			    return redirect()->route('dashboard');
			}
			else{
				return redirect()->route('login');
			}
		}	

		public function logoutAction(){
			Auth::logout();
			return redirect()->route('login');
		}


		public function productslistAction(){
			if (!Auth::check()) {
			    return redirect()->route('login');
			}

			$template = $this->template;
			$products = Product::get();

			return view('pages.admin.productslist', compact('template', 'products'));
		}

		public function addproductAction(){
			if (!Auth::check()) {
			    return redirect()->route('login');
			}

			$template = $this->template;

			return view('pages.admin.addproduct', compact('template'));
		}
	}