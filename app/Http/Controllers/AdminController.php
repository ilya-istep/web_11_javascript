<?php
	namespace App\Http\Controllers;

	use App\Http\Controllers\Controller;
	use App\Jobs\ProcessPodcast;

	use Illuminate\Http\Request;

	use Illuminate\Support\Facades\Redirect;
	use Illuminate\Support\Facades\Validator;
	use Illuminate\Support\Facades\Auth;
	use Illuminate\Support\Facades\Mail;

	use App\Models\Category;
	use App\Models\Product;

	use App\Validators\CategoryValidator;
	use App\Validators\AuthValidator;

	use App\Helpers\CheckcategoryHelper;

	use App\Mail\SendMail;


	class AdminController extends Controller{

		private $template = 'admin';

		public function indexAction(){

			$template = $this->template;

			

			return view('pages.admin.index', compact('template')); // точка заменяет слэш как разделитель 
		}
		
		public function categoryAction(){
			$categories = Category::get();
			$template = $this->template;		
			return view('pages.admin.category', compact('template', 'categories')); 
		}

		public function addcategoryAction(Request $request){
			$validator = CategoryValidator::addcategoryValidator($request);

			// dd($request);

			if($validator->fails()){
				return redirect()->route('admin-category')->withErrors($validator)->withInput();
			}

			if(!CheckcategoryHelper::addCategory('name', $request)){
				return redirect()->route('admin-category')->with('error', 'Ошибка! Категория с именем "'.$request->name.'" уже существует')->withInput();
			};

			return redirect()->route('admin-category')->with('success', 'Категория успешно добавлена!')->withInput();
	 
		}

		public function productslistAction(){
			$template = $this->template;	
			$products = Product::get();	
			return view('pages.admin.productslist', compact('template', 'products')); 
		}

		public function addproductAction(){
			$template = $this->template;		
			return view('pages.admin.addproduct', compact('template')); 
		}

		public function loginAction(){
			$template = $this->template;			
			return view('pages.admin.login', compact('template'));
		}

		public function logoutAction(){			
			Auth::logout();
			return redirect()->route('login');
		}

		public function loginrequestAction(Request $request){
			// dd($request);	

			$validator = AuthValidator::loginValidator($request);

			if($validator->fails()){
				return redirect()->route('login');
			}

			// DB::table('users')->where('role_id, 1')->get();

			if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role_id' => 1])){
				return redirect()->route('dashboard');
			}
			else{
				return redirect()->route('login');
			}
		}

		public function jobtestAction(){
			// Mail::to("reciever@example.com")->send(new SendMail());

			// dispatch(function () {
			// 	Mail::to('taylor@example.com')->send(new SendMail());
			// })->afterResponse();

			ProcessPodcast::dispatch()->afterCommit();
		}

	}

