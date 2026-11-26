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
		    'request' => 'required|array|min:1',
		    'category' => 'required|array|min:1',
		    'pref' => 'required|string',
		    'area' => 'required|string',
		    'first_day' => 'required|date_format:Y.n.j|after_or_equal:today',
		    'second_day' => 'nullable|date_format:Y.n.j|after_or_equal:today',
		    'third_day' => 'nullable|date_format:Y.n.j|after_or_equal:today',
		    'last_name' => 'required|string',
		    'last_name_kana' => 'required|string|regex:/^[ぁ-ゖー]+$/u',
	        'tel1' => 'required|regex:/^\d{2,4}$/',
	        'tel2' => 'required|regex:/^\d{2,4}$/',
	        'tel3' => 'required|regex:/^\d{3,4}$/',
		    'body' => 'nullable|string',
		], [
		    'request.required' => '必ず選択してください。',
		    'request.array' => '1つ以上選択してください。',
		    'category.required' => '必ず選択してください。',
		    'category.array' => '1つ以上選択してください。',
		    'pref.required' => '都道府県を必ず選択してください。',
		    'area.required' => '市区町村を必ず選択してください。',
		    'first_day.required' => '第1希望日を必ず選択してください。',
		    'first_day.date_format' => '第1希望日の日付が正しくありません。',
		    'first_day.after_or_equal' => '第1希望日は本日以降の日付を選択してください。',
		    'second_day.date_format' => '第2希望日の日付が正しくありません。',
		    'second_day.after_or_equal' => '第2希望日は本日以降の日付を選択してください。',
		    'third_day.date_format' => '第3希望日の日付が正しくありません。',
		    'third_day.after_or_equal' => '第3希望日は本日以降の日付を選択してください。',
		    'last_name.required' => '苗字を必ず入力してください。',
		    'last_name_kana.required' => 'ふりがなを必ず入力してください。',
		    'last_name_kana.regex' => 'ふりがなをひらがなで入力してください。',
	        'tel1.required' => '1番目を必ず入力してください。',
	        'tel1.regex' => '1番目の正しい桁数を入力してください。',
	        'tel2.required' => '2番目を必ず入力してください。',
	        'tel2.regex' => '2番目の正しい桁数を入力してください。',
	        'tel3.required' => '3番目を必ず入力してください。',
	        'tel3.regex' => '3番目の正しい桁数を入力してください。',
		]);

		session()->put('appointment_input', $validated);
		return view('appointment.confirm', compact('validated'));
	}

	public function appointmentThanks(Request $request)
	{
		if ($request->has('back')) {
			return redirect()->route('appointment.index');
		}

	    $validator = \Validator::make($request->all(), [
	        'consent' => 'required|accepted',
	    ], [
	        'consent.required' => '同意が必要です。',
	        'consent.accepted' => '同意が必要です。',
	    ]);
	    if ($validator->fails()) {
	        $input = session()->get('appointment_input');
	        if (!$input) {
	            return redirect()->route('appointment.index');
	        }
			return view('appointment.confirm', ['validated' => $input])->withErrors($validator);
	    }

		$input = session()->get('appointment_input');
		if (!$input) {
			return redirect()->route('appointment.index');
		}

		$request_text = implode('、', $input['request'] ?? []);
		$category = implode('、', $input['category'] ?? []);
		$second_day = !empty($input['second_day']) ? $input['second_day'] : '---';
		$third_day  = !empty($input['third_day']) ? $input['third_day'] : '---';
		$body = !empty($input['body']) ? $input['body'] : '---';

		$mail_text = <<<EOT

HP経由でご予約がありました。

-------------------------

ご予約の理由：
{$request_text}
買取品カテゴリ：
{$category}
出張買取の希望エリア：{$input['pref']} {$input['area']}
第1希望日：{$input['first_day']}
第2希望日：{$second_day}
第3希望日：{$third_day}
お名前：{$input['last_name']}（ {$input['last_name_kana']} ）
電話番号：{$input['tel1']}-{$input['tel2']}-{$input['tel3']}

ご要望:
{$body}
EOT;

		Mail::raw($mail_text, function ($message) {
			$message->to(['shimoda@x-industry.jp'])->subject('【 要確認 】HPからのご予約');
		});

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
	    $needsCompany = in_array($request->input('inquiry_type'), [
	        '業務委託について',
	        '業務提携・協業について',
	    ], true);

	    $validated = $request->validate([
	        'inquiry_type' => 'required|in:サービスについて,業務委託について,業務提携・協業について,その他のご相談',
	        'company' => [$needsCompany ? 'required' : 'nullable', 'string', 'max:255',],
	        'department' => 'nullable|string|max:255',
	        'role' => 'nullable|string|max:255',
	        'last_name' => 'required|string|max:255',
	        'first_name' => 'required|string|max:255',
	        'last_name_kana' => 'required|string|regex:/^[ぁ-ゖー]+$/u',
	        'first_name_kana' => 'required|string|regex:/^[ぁ-ゖー]+$/u',
	        'email' => 'required|email',
	        'tel1' => 'required|regex:/^\d{2,4}$/',
	        'tel2' => 'required|regex:/^\d{2,4}$/',
	        'tel3' => 'required|regex:/^\d{3,4}$/',
	        'body' => 'required|string',
	    ], [
	        'inquiry_type.required' => '必ず選択してください。',
	        'company.required' => '必ず入力してください。',
	        'last_name.required' => '姓を必ず入力してください。',
	        'first_name.required' => '名を必ず入力してください。',
	        'last_name_kana.required' => '姓を必ず入力してください。',
	        'last_name_kana.regex' => '姓をひらがなで入力してください。',
	        'first_name_kana.required' => '名を必ず入力してください。',
	        'first_name_kana.regex' => '名をひらがなで入力してください。',
	        'email.required' => '必ず入力してください。',
	        'email.email' => 'メールアドレスを入力してください。',
	        'tel1.required' => '1番目を必ず入力してください。',
	        'tel1.regex' => '1番目の正しい桁数を入力してください。',
	        'tel2.required' => '2番目を必ず入力してください。',
	        'tel2.regex' => '2番目の正しい桁数を入力してください。',
	        'tel3.required' => '3番目を必ず入力してください。',
	        'tel3.regex' => '3番目の正しい桁数を入力してください。',
	        'body.required' => '必ず入力してください。',
	    ]);

		session()->put('inquiry_input', $validated);
		return view('inquiry.confirm', compact('validated'));
	}

	public function inquiryThanks(Request $request)
	{
		if ($request->has('back')) {
			return redirect()->route('inquiry.index')->withInput(session('inquiry_input'));
		}

	    $validator = \Validator::make($request->all(), [
	        'consent' => 'required|accepted',
	    ], [
	        'consent.required' => '同意が必要です。',
	        'consent.accepted' => '同意が必要です。',
	    ]);
	    if ($validator->fails()) {
	        $input = session()->get('inquiry_input');
	        if (!$input) {
	            return redirect()->route('inquiry.index');
	        }
			return view('inquiry.confirm', ['validated' => $input])->withErrors($validator);
	    }

		$input = session()->get('inquiry_input');
		if (!$input) {
			return redirect()->route('inquiry.index');
		}

		$isCompany = in_array($input['inquiry_type'], ['業務委託について', '業務提携・協業について',], true);
		if ($isCompany) {
			$department = !empty($input['department']) ? $input['department'] : '---';
			$role = !empty($input['role']) ? $input['role'] : '---';
		    $companyInfo = <<<EOT
会社名：{$input['company']}
部署：{$department}
役職：{$role}
ご担当者：{$input['first_name']} {$input['last_name']}
EOT;
		} else {
			$companyInfo = <<<EOT
お名前：{$input['first_name']} {$input['last_name']}
EOT;
		}

		$mail_text = <<<EOT

HP経由でご相談がありました。

-------------------------

お問い合わせ種別：{$input['inquiry_type']}
{$companyInfo}
ふりがな：{$input['first_name_kana']} {$input['last_name_kana']}
メールアドレス：{$input['email']}
電話番号：{$input['tel1']}-{$input['tel2']}-{$input['tel3']}

ご相談内容:
{$input['body']}
EOT;

		Mail::raw($mail_text, function ($message) {
			$message->to(['shimoda@x-industry.jp'])->subject('【 要確認 】HPからのご相談');
		});

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
