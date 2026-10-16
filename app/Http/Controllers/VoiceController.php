<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VoiceController extends Controller
{
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
            $message->to(['info@s-mono.link', 'shimoda@x-industry.jp'])->subject('【 要確認 】LPからのアンケート回答');
        });
        return redirect()->back()->with('success', 'complete');
    }
}
