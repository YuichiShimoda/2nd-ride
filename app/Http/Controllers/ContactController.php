<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
	public function appointmentIndex()
	{
		$input = session()->get('appointment_input', []);
		return view('appointment.index', compact('input'));
	}

	public function appointmentConfirm(Request $request)
	{
		$validated = $request->validate([
			'name'       => 'required|string|max:255',
			'email'      => 'required|email|max:255',
			'reserve_at' => 'required|date',
		]);

		session()->put('appointment_input', $validated);
		return view('appointment.confirm', compact('validated'));
	}

	public function appointmentThanks(Request $request)
	{
		if ($request->has('back')) {
			return redirect()->route('appointment.index');
		}

		$input = session()->get('appointment_input');
		if (!$input) {
			return redirect()->route('appointment.index');
		}

		// ★ここに「ご予約受付メール」の送信処理（DB保存はなし）
		// Mail::to($input['email'])->send(new AppointmentMail($input));

		session()->forget('appointment_input');
		return view('appointment.thanks');
	}











	public function inquiryIndex()
	{
		$input = session()->get('inquiry_input', []);
		return view('inquiry.index', compact('input'));
	}

	public function inquiryConfirm(Request $request)
	{
		$validated = $request->validate([
			'name'  => 'required|string|max:255',
			'email' => 'required|email|max:255',
			'body'  => 'required|string',
		]);

		session()->put('inquiry_input', $validated);
		return view('inquiry.confirm', compact('validated'));
	}

	public function inquiryThanks(Request $request)
	{
		if ($request->has('back')) {
			return redirect()->route('inquiry.index');
		}

		$input = session()->get('inquiry_input');
		if (!$input) {
			return redirect()->route('inquiry.index');
		}

		// ★ここに「ご相談受付メール」の送信処理（DB保存はなし）
		// Mail::to($input['email'])->send(new InquiryMail($input));

		session()->forget('inquiry_input');
		return view('inquiry.thanks');
	}








	public function submit(Request $request)
	{
		$request->validate([
			'your-sex'        => 'required',
			'your-age'        => 'required',
			'your-pref'       => 'required',
			'your-day'        => 'required',
			// 'your-num'        => 'required',
			// 'your-visit-num'  => 'required',
			'your-campaign'   => 'required',
			'your-know'       => 'required',
			'your-call'       => 'required',
			'your-service'    => 'required',
			'your-appraisal'  => 'required',
			'your-purchase'   => 'required',
			'your-overall'    => 'required',
		]);

		$data = $request->only([
			'your-sex', 'your-age', 'your-pref', 'your-day',
			'your-campaign', 'your-know',
			'your-call', 'your-service', 'your-appraisal', 'your-purchase',
			'your-overall', 'your-request',
		]);

		$body = <<<EOT

LP経由でアンケートの回答がありました。

-------------------------

性別：{$data['your-sex']}
年齢：{$data['your-age']}
エリア：{$data['your-pref']}
利用日：{$data['your-day']}
キャンペーン利用：{$data['your-campaign']}
知ったキッカケ：{$data['your-know']}
電話対応：{$data['your-call']}
接客対応：{$data['your-service']}
査定内容：{$data['your-appraisal']}
買取対応：{$data['your-purchase']}
総合評価：{$data['your-overall']}

ご意見・ご感想:
{$data['your-request']}
EOT;

		Mail::raw($body, function ($message) {
			$message->to(['shimoda@x-industry.jp'])->subject('【 要確認 】LPからのアンケート回答');
		});
		return redirect()->back()->with('success', 'complete');
	}
}
