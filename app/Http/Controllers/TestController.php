<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use DB;
use App\Question;
use App\Result;
use App\User;

class TestController extends Controller
{
	public function index(Request $request){
		$result =Question::first();
		$userId = Auth::user()->id;
		View()->share(['result'=>$result,'userId'=>$userId]);
		$request->session()->forget('exam.'.$userId);
		return view('pages.test.create');
	}

	public function next(Request $request){
		$id = (int) $request->segment(3);
		$answer = ($request->$id)?$request->$id:0;
		if(!$id){
			return redirect('/logout');
		}
		$userId = Auth::user()->id;
		if($request->session()->has('exam . '. $userId)){
			$request->session()->push('exam . '. $userId .'.'.$id, $answer);
		}else{
			$request->session()->forget('exam . '. $userId);
			$request->session()->put('exam.'. $userId .'.'.$id, $answer);
		}
		if($id == 10){
			$this->submit_exam($userId);
			return redirect('/exam/result');
		}
		$result =Question::where('id','=',($id + 1))->first();
		View()->share(['result'=>$result,'userId'=>$userId]);
		return view('pages.test.create');
	}

	public function prev(Request $request){
		$id = (int) $request->segment(3);
		if(!$id){
			return redirect('/logout');
		}
		$userId = Auth::user()->id;
		$result =Question::where('id','=',$id)->first();
		View()->share(['result'=>$result,'userId'=>$userId]);
		return view('pages.test.create');
	}

	public function result(){
		$userId = Auth::user()->id;
		$user = User::find($userId);
		View()->share(['result'=>$user]);
		return view('pages.test.result');
	}

	private function submit_exam($userId){
		$userResult = Session::get('exam.'.$userId);
		if($userResult){
			DB::beginTransaction();
			try{
				
				$questionResult = Question::pluck('answer','id')->all();
				$examDeatils = Result::where('userId','=',$userId)->first();
				$eaxmResult = 0;
				foreach($userResult as $key => $row){
					if($examDeatils){
						
						$result = Result::where('questionId','=',$key)->first();
					}else{
						$result = new Result;
					}  
					$result->userId = $userId;
					$result->questionId = $key;
					$result->answer = (int) $row;
					$result->save;
					if($questionResult[$key] == $row){
						$eaxmResult++;
					}
				}
				$user = User::find($userId);
				$user->examResult = ($eaxmResult * 2);
				$user->save();
				DB::commit();
				return 1;
				
			}catch(Exception $e) {
				DB::rollback();
				return 0;
			}
		}
	}
}
