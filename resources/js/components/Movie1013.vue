<template>
<!-- 	<div v-if="currentStep !== 7" class="progress-box progress-moved">
		<div :class="['progress-bar', `step${currentStep}`]"></div>
	</div> -->
	<div class="first-box" v-if="currentStep === 1">
		<div class="content-box">
			<div class="now-progress-bar"></div>
			<div class="close-btn">
				<img class="icon" :src="'./image/lp/movie/close.svg'" alt="閉じる">
			</div>
			<div class="volume-btn" @click="toggleVolume()">
				<img v-if="volume" class="icon" :src="'./image/lp/movie/volume-on.svg'" alt="音声ON">
				<img v-else class="icon" :src="'./image/lp/movie/volume-off.svg'" alt="音声OFF">
			</div>
			<div class="play-btn" v-if="stop">
				<img class="icon" :src="'./image/lp/movie/play.svg'" alt="再生">
			</div>
<!--             <video class="play-movie" preload="none" autoplay loop muted playsinline disablepictureinpicture>
                <source :src="'./movie/lp/sample1.mp4'" type="video/mp4">
            </video> -->
            <video ref="videoPlayer" class="play-movie"></video>
            <div class="bottom-box">
            	<button class="next-btn" @click="next1" ref="next1Btn">
            		<span>サービス紹介</span>
            	</button>
            	<button class="next-btn" @click="next1" ref="next1Btn">
            		<span>ラクラク査定</span>
            	</button>
            	<button class="next-btn" @click="next1" ref="next1Btn">
            		<span>代表者メッセージ</span>
            	</button>
            	<button class="next-btn" @click="next1" ref="next1Btn">
            		<span>キャンペーン情報</span>
            	</button>
				<a class="call-btn" href="tel:0120979986">
            		<img class="num" :src="'./image/lp/movie/tel-num.svg'" alt="0120-979-986">
            	</a>
            </div>
		</div>
	</div>
<!-- 	<div class="sixth-box" v-if="currentStep === 6">
		<p class="desc">ご希望を選択してください。</p>
		<div class="note-box">
			<p class="note-ele">※ 必ず一つ以上選択。</p>
			<p class="note-ele">※ 複数選択可。</p>
		</div>
		<div class="checkbox-box">
			<label v-for="option in checkboxOptions" :key="option.value" class="checkbox-ele">
				<input type="checkbox" :value="option.value" v-model="memoChecks">
				<span class="fake-checkbox" :class="{ checked: memoChecks.includes(option.value) }"></span>
				<span class="label-text">{{ option.label }}</span>
			</label>
		</div>
		<p class="desc-memo">ご要望があれば入力してください。</p>
		<textarea id="memo" name="memo" placeholder="写真の品（ 売りたい物 ）の説明や買い取りに関するご要望を入力してください。" v-model="memoText"></textarea>
		<div v-if="memoError" class="error-box">
			<p v-text="memoError"></p>
		</div>
		<div class="final-message">
			<div v-if="messageFlag === 1" class="uploading-box">
				<div class="msg-box">
					<p class="main">ラクラク査定の依頼処理中</p>
					<p class="main2">完了画面が表示されるまで、そのままお待ちください。</p>
					<p class="sub">※ 写真の枚数や画像容量によって時間がかかる場合があります。</p>
				</div>
				<div class="spinner">
					<div class="head"></div>
				</div>
			</div>
			<p v-else-if="messageFlag === 2" class="msg success">依頼処理が完了しました</p>
			<p v-else-if="messageFlag === 3" class="msg alart">依頼処理中にエラーが発生しました</p>
		</div>
		<div v-if="messageFlag === '' || messageFlag === 3" class="btn-box">
			<button class="back-btn" @click="back5" ref="back5Btn">
				<span>戻る</span>
				<div class="particles" style="--total-particles: 6">
					<div class="particle" style="--i: 1; --color: #fff"></div>
					<div class="particle" style="--i: 2; --color: #fff"></div>
					<div class="particle" style="--i: 3; --color: #fff"></div>
					<div class="particle" style="--i: 4; --color: #fff"></div>
					<div class="particle" style="--i: 5; --color: #fff"></div>
					<div class="particle" style="--i: 6; --color: #fff"></div>
				</div>
			</button>
			<button class="next-btn" @click="send" ref="sendBtn">
				<span>査定依頼</span>
				<div class="particles" style="--total-particles: 6">
					<div class="particle" style="--i: 1; --color: #7642F0"></div>
					<div class="particle" style="--i: 2; --color: #AFD27F"></div>
					<div class="particle" style="--i: 3; --color: #DE8F4F"></div>
					<div class="particle" style="--i: 4; --color: #D0516B"></div>
					<div class="particle" style="--i: 5; --color: #5686F2"></div>
					<div class="particle" style="--i: 6; --color: #D53EF3"></div>
				</div>
			</button>
		</div>
		<div v-if="messageFlag === 2" class="space-box"></div>
	</div>
	<div class="complete-box" v-if="currentStep === 7">
		<p class="tit">ラクラク査定の依頼完了</p>
		<div class="desc-box">
			<p>このたびはラクラク査定（ 簡易査定 ）のご利用、ありがとうございます。</p>
			<p>査定の結果は、約24時間以内にショートメール（ SMS ）または電話にて回答となります。</p>
			<p>今しばらくお待ちください。</p>
			<div class="tel-box">
				<p class="note">※ 査定の結果に関して、買取猿丸くんの査定士（ 携帯電話 ）から直接ご連絡させていただく場合がございます。</p>
				<p class="note">※ より確実な査定・より早い買い取りをご希望の方は、以下のフリーダイヤルまでご連絡ください。</p>
				<div class="call-box">
					<div class="tit-box">
						<p>無料出張査定は今すぐコチラ</p>
					</div>
					<a href="tel:0120979986" class="tel--box">
						<img loading="lazy" class="icon" :src="'./image/online/free_dial.svg'" alt="">
						<p class="num">0120</p>
						<p class="hyphen">-</p>
						<p class="num">979</p>
						<p class="hyphen">-</p>
						<p class="num">986</p>
					</a>
				</div>
			</div>
			<div class="info--box">
				<div class="info--ele">
					<img loading="lazy" class="area-icon" :src="'./image/online/area-icon.svg'" alt="">
					<p class="tit">対応エリア：</p>
					<p class="detail">愛知県、三重県、岐阜県、滋賀県</p>
				</div>
				<div class="info--ele">
					<img loading="lazy" class="open-time-icon" :src="'./image/online/open-time-icon.svg'" alt="">
					<p class="tit">受付時間　：</p>
					<p class="detail">
						<span class="time-num">9</span>
						<span class="wave">～</span>
						<span class="time-num">20</span>
					<span class="all-time">時（ 年中無休 ）</span></p>
				</div>
				<p class="comment">愛知県、岐阜県、三重県、滋賀県の各拠点から査定スタッフがうかがいます。</p>
			</div>
			<div class="reload-btn-box" @click="reloadPage">
				<p>ラクラク査定に戻る</p>
			</div>
		</div>
	</div> -->
</template>

<script>
import { defineComponent, ref, computed } from 'vue'
import videojs from 'video.js';
import axios from 'axios';
import '../../css/upload.css';

export default defineComponent({
	name: 'VideoPlayer',
	props: {
		options: {
			type: Object,
			default() {
				return {
					autoplay: true,
					loop: true,
					// muted: false,
					// controlBar.remainingTimeDisplay.displayNegative: true,
					sources: [
						{
							src: './movie/lp/sample1.mp4',
							type: 'video/mp4'
						}
					]
				};
			}
		}
	},
	data() {
		return {
			currentStep: 1,
			volume: 1,
			stop: 1,
			// images: [],
			// imageError: "",
			// pref: "",
			// area: "",
			// areaError: "",
			// tel1: "",
			// tel2: "",
			// tel3: "",
			// telError: "",
			// familyName: "",
			// familyNameError: "",
			// experienced: "",
			// experiencedError: "",
			// memoChecks: [],
			// memoText: "",
			// memoError: "",
			// messageFlag: "",
		}
	},
	setup() {
		// const regions = {
		// 	愛知: ['千種区','東区','北区','西区','中村区','中区','昭和区','瑞穂区','熱田区','中川区','港区','南区','守山区','緑区','名東区','天白区','豊橋市','岡崎市','一宮市','瀬戸市','半田市','春日井市','豊川市','津島市','碧南市','刈谷市','豊田市','安城市','西尾市','蒲郡市','犬山市','常滑市','江南市','小牧市','稲沢市','新城市','東海市','大府市','知多市','知立市','尾張旭市','高浜市','岩倉市','豊明市','日進市','田原市','愛西市','清須市','北名古屋市','弥富市','みよし市','あま市','長久手市','愛知郡','西春日井郡','丹羽郡','海部郡','知多郡','額田郡','北設楽郡','東郷町','豊山町','大口町','扶桑町','大治町','蟹江町','阿久比町','東浦町','南知多町','美浜町','武豊町','幸田町','設楽町','東栄町','飛島村','豊根村'],
		// 	岐阜: ['岐阜市','大垣市','高山市','多治見市','関市','中津川市','美濃市','瑞浪市','羽島市','恵那市','美濃加茂市','土岐市','各務原市','可児市','山県市','瑞穂市','飛騨市','本巣市','郡上市','下呂市','海津市','羽島郡','養老郡','不破郡','安八郡','揖斐郡','本巣郡','加茂郡','可児郡','大野郡','岐南町','笠松町','養老町','垂井町','関ケ原町','神戸町','輪之内町','安八町','揖斐川町','大野町','池田町','北方町','坂祝町','富加町','川辺町','七宗町','八百津町','白川町','御嵩町','東白川村','白川村'],
		// 	三重: ['津市','四日市市','伊勢市','松阪市','桑名市','鈴鹿市','名張市','尾鷲市','亀山市','鳥羽市','熊野市','いなべ市','志摩市','伊賀市','桑名郡','員弁郡','三重郡','多気郡','度会郡','北牟婁郡','南牟婁郡','木曽岬町','東員町','菰野町','朝日町','川越町','多気町','明和町','大台町','玉城町','度会町','大紀町','南伊勢町','紀北町','御浜町','紀宝町'],
		// 	滋賀: ['大津市','彦根市','長浜市','近江八幡市','草津市','守山市','栗東市','甲賀市','野洲市','湖南市','高島市','東近江市','米原市','蒲生郡','愛知郡','犬上郡','日野町','竜王町','愛荘町','豊郷町','甲良町','多賀町']
		// };
		// const checkboxOptions = [
		// 	{ label: "現金化したい", value: "現金化したい" },
		// 	{ label: "相場が知りたい", value: "相場が知りたい" },
		// 	{ label: "相見積もり中", value: "相見積もり中" },
		// 	{ label: "お片づけ", value: "お片づけ" },
		// 	{ label: "生前整理", value: "生前整理" },
		// 	{ label: "遺品整理", value: "遺品整理" },
		// 	{ label: "引越し予定", value: "引越し予定" },
		// 	{ label: "お家の解体予定", value: "お家の解体予定" },
		// 	{ label: "少しでも高く買い取ってほしい", value: "少しでも高く買い取ってほしい" },
		// 	{ label: "査定額が低いなら売らない", value: "査定額が低いなら売らない" },
		// 	{ label: "早く買い取ってほしい", value: "早く買い取ってほしい" },
		// 	{ label: "捨てるくらいならお金に換えたい", value: "捨てるくらいならお金に換えたい" }
		// ];
		// return {
		// 	regions,
		// 	checkboxOptions,
		// };
	},
	mounted() {
		this.player = videojs(this.$refs.videoPlayer,
			this.options, () => {
				console.log('Player is ready');
			}
		);
	},
	watch: {
		// pref(newPref, oldPref) {
		// 	this.area = "";
		// }
	},
	computed: {
		// availableAreas() {
		// 	return this.pref ? this.regions[this.pref] || [] : [];
		// },
		// memo() {
		// 	let combined = [...this.memoChecks];
		// 	if (this.memoText.trim()) {
		// 		combined.push(this.memoText.trim());
		// 	}
		// 	return combined.map((item, index) => `( ${index + 1} ) ${item}`).join("\n");
		// }
	},
	methods: {
		toggleVolume() {
			if (this.volume) {
				this.volume = 0;
			} else {
				this.volume = 1;
			}
		},
		// // スマホカメラを起動して撮影
		// triggerCamera() {
		// 	this.$refs.cameraInput.click()
		// },
		// onCameraChange(e) {
		// 	let files = e.target.files
		// 	if (files.length > 0) {
		// 		this.createImage(files[0])
		// 	}
		// },

		// // ファルダから選択
		// onFileChange(e) {
		// 	let files = e.target.files
		// 	if (files.length > 20) {
		// 		this.imageError = "20枚を超えています";
		// 		return;
		// 	}
		// 	if (this.images.length + files.length > 20) {
		// 		this.imageError = "20枚を超えるため追加されませんでした";
		// 		return;
		// 	}
		// 	for (let i = 0; i < files.length; i++) {
		// 		this.createImage(files[i])
		// 	}
		// },
		// ////////////////////////////////
		// ////////////////////////////////

		// // 写真追加
		// createImage(file) {
		// 	const reader = new FileReader()
		// 	reader.onload = (e) => {
		// 		this.images.push({
		// 			file: file,
		// 			thumbnail: e.target.result,
		// 			backendFilename: null,
		// 		})
		// 	}
		// 	reader.readAsDataURL(file)
		// 	this.imageError = "";
		// },
		// // 写真編集
		// edit(imageToEdit, i, e) {
		// 	let newFile = e.target.files[0]
		// 	if (!newFile) return
		// 	const reader = new FileReader()
		// 	reader.onload = (e) => {
		// 		this.images[i] = {
		// 			file: newFile,
		// 			thumbnail: e.target.result,
		// 			backendFilename: null,
		// 		}
		// 	}
		// 	reader.readAsDataURL(newFile)
		// },
		// // 写真削除
		// remove(i) {
		// 	this.images.splice(i, 1)
		// 	this.$refs.imageUploader.value = ''
		// },
		// ////////////////////////////////
		// ////////////////////////////////

		// next1() {
		// 	this.imageError = "";
		// 	if (this.images.length === 0) {
		// 		this.imageError = "写真を追加してください";
		// 		return;
		// 	} else if (this.images.length > 20) {
		// 		this.imageError = "写真は20枚以内で選択してください";
		// 		return;
		// 	}
		// 	$(this.$refs.next1Btn).addClass('is-click');
		// 	setTimeout(() => {
		// 		this.currentStep = 2;
		// 		this.imageError = "";
		// 		$(this.$refs.next1Btn).removeClass('is-click');
		// 	}, 700);
		// },
		// next2() {
		// 	this.areaError = "";
		// 	if (!this.area) {
		// 		this.areaError = "エリアを選択してください";
		// 		return;
		// 	}
		// 	$(this.$refs.next2Btn).addClass('is-click');
		// 	setTimeout(() => {
		// 		this.area = this.pref + "県 " + this.area;
		// 		this.currentStep = 3;
		// 		this.areaError = "";
		// 		$(this.$refs.next2Btn).removeClass('is-click');
		// 	}, 700);
		// },
		// next3() {
		// 	this.familyNameError = "";
		// 	if (!this.familyName) {
		// 		this.familyNameError = "名字を入力してください";
		// 		return;
		// 	}
		// 	$(this.$refs.next3Btn).addClass('is-click');
		// 	setTimeout(() => {
		// 		this.currentStep = 4;
		// 		this.familyNameError = "";
		// 		$(this.$refs.next3Btn).removeClass('is-click');
		// 	}, 700);
		// },
		// next4() {
		// 	this.telError = "";
		// 	if (!this.tel1 || !/^\d{2,4}$/.test(this.tel1) ||
		// 		!this.tel2 || !/^\d{2,4}$/.test(this.tel2) ||
		// 		!this.tel3 || !/^\d{3,4}$/.test(this.tel3)) {
		// 		this.telError = "有効な電話番号を入力してください";
		// 		return;
		// 	}
		// 	const fullTel = `${this.tel1}${this.tel2}${this.tel3}`;
		// 	if (!/^\d{10,11}$/.test(fullTel)) {
		// 		this.telError = "有効な電話番号を入力してください";
		// 		return;
		// 	}
		// 	$(this.$refs.next4Btn).addClass('is-click');
		// 	setTimeout(() => {
		// 		this.currentStep = 5;
		// 		this.telError = "";
		// 		$(this.$refs.next4Btn).removeClass('is-click');
		// 	}, 700);
		// },
		// next5() {
		// 	this.experiencedError = "";
		// 	if (!this.experienced) {
		// 		this.experiencedError = "必ず選択してください";
		// 		return;
		// 	}
		// 	$(this.$refs.next5Btn).addClass('is-click');
		// 	setTimeout(() => {
		// 		this.currentStep = 6;
		// 		this.experiencedError = "";
		// 		$(this.$refs.next5Btn).removeClass('is-click');
		// 	}, 700);
		// },
		// back1() {
		// 	$(this.$refs.back1Btn).addClass('is-click');
		// 	setTimeout(() => {
		// 		this.currentStep = 1;
		// 		this.areaError = "";
		// 		$(this.$refs.back1Btn).removeClass('is-click');
		// 	}, 700);
		// },
		// back2() {
		// 	$(this.$refs.back2Btn).addClass('is-click');
		// 	setTimeout(() => {
		// 		this.currentStep = 2;
		// 		this.familyNameError = "";
		// 		$(this.$refs.back2Btn).removeClass('is-click');
		// 	}, 700);
		// },
		// back3() {
		// 	$(this.$refs.back3Btn).addClass('is-click');
		// 	setTimeout(() => {
		// 		this.currentStep = 3;
		// 		this.telError = "";
		// 		$(this.$refs.back3Btn).removeClass('is-click');
		// 	}, 700);
		// },
		// back4() {
		// 	$(this.$refs.back4Btn).addClass('is-click');
		// 	setTimeout(() => {
		// 		this.currentStep = 4;
		// 		this.experiencedError = "";
		// 		$(this.$refs.back4Btn).removeClass('is-click');
		// 	}, 700);
		// },
		// back5() {
		// 	$(this.$refs.back5Btn).addClass('is-click');
		// 	setTimeout(() => {
		// 		this.currentStep = 5;
		// 		this.memoError = "";
		// 		$(this.$refs.back5Btn).removeClass('is-click');
		// 	}, 700);
		// },
		// async send(e) {
		// 	this.messageFlag = "";
		// 	if (e) e.preventDefault()

		// 	this.memoError = "";
		// 	if (!this.memoText && this.memoChecks.length === 0) {
		// 		this.memoError = "必ず選択または入力してください";
		// 		return;
		// 	}

		// 	this.memoError = "";
		// 	this.messageFlag = 1;

		// 	let dataForm = new FormData()
		// 	const config = {
		// 		headers: {
		// 			'accept': 'application/json',
		// 			'Accept-Language': 'ja_JP',
		// 		}
		// 	}
		// 	this.images.forEach((img, index) => {
		// 		dataForm.append(`upload[${index}]`, img.file)
		// 	})

		// 	dataForm.append('area', this.area);
		// 	dataForm.append('familyName', this.familyName);
		// 	dataForm.append('tel1', this.tel1);
		// 	dataForm.append('tel2', this.tel2);
		// 	dataForm.append('tel3', this.tel3);
		// 	dataForm.append('experienced', this.experienced);
		// 	dataForm.append('hope_request', this.memo);

		// 	try {
		// 		const response = await axios.post('./api/upload_webp', dataForm, config)
		// 		this.messageFlag = 2;
		// 		$(".progress-bar").css('width', '100%');
		// 		setTimeout(() => {
		// 			this.currentStep = 7;
		// 			$('#close-btn').css('display', 'none');
		// 			document.getElementById('form').classList.add('done');
		// 		}, 1500);
		// 	} catch (error) {
		// 		this.messageFlag = 3;
		// 		console.error("アップロード中にエラーが発生しました:", error.response || error)
		// 		if (error.response && error.response.data && error.response.data.message) {
		// 			console.log("あたり");
		// 		} else {
		// 			console.log("no       -----");
		// 		}
		// 	}
		// },
		// reloadPage() {
		// 	window.location.reload();
		// },
	}
})
</script>
