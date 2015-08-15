<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PasswordController;
use Auth;
use Redirect;
use App\Http\Requests;
use Carbon\Carbon;
use App\Article;
use App\Http\Requests\ArticleRequest;

class PageController extends Controller {

    /**
     * Routing controller for the static pages or the non game relevant pages of the website
     *
     * @return View
     */
	 
	 /*
	-------------------------------------------------------------------
	| Funktion som visar startsidan till användaren.
	*/
    public function showWelcome()
    {
        return view('pages.welcome');
    }
	
	public function home(){
		return view('home');
	}
	
	public function doLogout(){
		Auth::logout(); // log the user out of our application
		return Redirect::to('/'); // redirect the user to the home
	}
	
	/*
	-------------------------------------------------------------------
	| Function för att visa en view för kontakt sidan.
	*/
	public function showContact()
	{
		return view('pages.contact');
	}
	
	/*
	-------------------------------------------------------------------
	| Function för att visa en view för articles som är gjorda med hjälp av laracast.
	| Detta blir en statisk sida som visar de senaste "Blog" posts.
	*/
	public function showAllArticle()
	{
		$articles = Article::latest()->published()->get();
		
		return view('pages.news.news', compact('articles'));
	}
	
	/*
	-------------------------------------------------------------------
	| Funktion för att visa endast 1 artikel som en användare har klickat in på.
	*/
	public function showArticle($id)
	{
		$article = Article::findOrFail($id);
		return view('pages.news.newsSingle', compact('article'));
	}
	
	/*
	-------------------------------------------------------------------
	| Funktion för en view där vi kan skapa våra nya artiklar.
	*/
	public function createArticle()
	{
		return view('pages.news.createNews');
	}
	
	public function editArticle($id)
	{
		$article = Article::findOrFail($id);
		
		return view('pages.news.newsSingleEdit', compact('article'));
	}
	
	public function updateArticle($id, ArticleRequest $request)
	{
		$article = Article::findOrFail($id);
		
		$article->update($request->all());
		
		return redirect('news');
	}
	
	/*
	-------------------------------------------------------------------
	| Funktion som ansvarar för att ta data som vi skrivit i vår createNews view och lagra den i databasen.
	| Vår CreateArticle request gör så att det triggar en validation som endast låter bodyn på denna
	| Funktionen att köras ifall validationen godkänns av våran CreateArticle request.
	*/
	public function postArticle(ArticleRequest $request)
	{
		$input = $request->all();
		
		Article::create($input);
		
		return redirect('news');
	}
	
	/*
	-------------------------------------------------------------------
	| Function som tar hand om att registrera en användare till databasen.
	*/
	public function storeUser()
	{
		//Begär request om data som blir postad.
		$input = Request::all();
		$username = Request::get('username');
		
		
		return $username;
	}

}