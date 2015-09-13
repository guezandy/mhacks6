<?php namespace App\Http\Controllers;


use DB;
use Input;
use App\Paragraph;
use App\AnswerTo;


class HomeController extends Controller {
//TODO: Add with success so we know things worked
	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	

	//input text

	public function input() {
		if(Input::get('input') != NULL) {
			//return Input::get('input');
			$p = new Paragraph;
			$p->text = Input::get('input');
			$p->question = 
			$p->save();
		}
		return view('input');
	}

	//get responses
	public function respond() {
		$q =  Input::get('question');
		//return $q;
		$possibleRes = AnswerTo::where('question', '=', $q)->get()->first();
		//if question has been thumbd up already
		//return $possibleRes;
		if($possibleRes != NULL) {
			//return "We in here";
			$res = DB::table('paragraph')      //find comments of posts
								->leftJoin('answer_to','answer_to.paragraph','=','paragraph.id')
								->where('paragraph.id', '=', $possibleRes->paragraph)
								->select('paragraph.*', 'answer_to.id', 'answer_to.count')
								->get();
			//$res[0]->text = "PreviousL"									
		} else {
			///break up the question into works for querying
			$pieces = explode(" ", $q);
			//construct sql statement
			//return $pieces;
			$paragraphs = DB::table('paragraph')->get();
			//return $paragraphs;
			if(isset($paragraphs)) {

				$counts = array();
				for($j = 0; $j < count($paragraphs); $j++) {
					$count = 0;
					$paragraphPieces = explode(" ", $paragraphs[$j]->text);
					for($k=0; $k < count($paragraphPieces); $k++) {
							for($l =0; $l < count($pieces); $l++) {
								
								if($paragraphPieces[$k] == $pieces[$l]) {
									$count++;
								}
							}
					}
					$counts[$j] = $count;
				}
				//return $counts;
				$max = 0;
				for($p = 0; $p < count($counts); $p++) {
					if($counts[$p] > $counts[$max]) {
						$max = $p;
					}
				}
				$res[0] = Paragraph::findOrFail($max+1);
			} else {
				//return a random paragraph

			}
		}
		//return $res;
		//return $counts;
		return view('home')->with('res', $res)->with('result', "n/a")->with('question', $q);
	}


	//plus one
	public function plusone($id) {
		//find if this combo exists
		$par = Paragraph::findOrFail($id);
		//return Input::get('ques');

		$posAns = AnswerTo::where('question', '=', Input::get('ques'))->get()->first();
		if($posAns != NULL) {
			//return $posAns;
			$posAns->count++;
			$posAns->save();
		} else {
			$ans = new AnswerTo;
			$ans->paragraph = $par->id;
			$ans->question = Input::get('ques');
			$ans->count++;
			$ans->save();
		}
		//plus one
		return redirect()->back();
	}

	//get next response
}
