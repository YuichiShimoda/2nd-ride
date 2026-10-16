<template>
	<div class="first-box" v-if="currentStep === 1">
		<div class="folder-file-box">
			<label for="folder-upload" class="folder-file-label">
				<img class="plus-icon" :src="'../image/online/plus.svg'">
				<p>画像を追加する</p>
			</label>
			<input class="folder-file-input" type="file" name="upload" ref="imageUploader" id="folder-upload" accept="image/*" multiple @change="onFileChange">
		</div>
		<div class="camera-file-box">
			<div class="camera-btn-box">
				<img class="camera-icon" id="cameraImg" :src="'../image/online/camera.svg'" @click="triggerCamera">
				<input class="camera-input" type="file" name="camera" ref="cameraInput" id="cameraInput" capture="environment" accept="image/*" @change="onCameraChange">
			</div>
			<p class="note">カメラを起動させる</p>
		</div>

		<ul class="preview-box" v-if="images.length">
			<li class="thum-box" v-for="(image, index) in images" :key="index">
				<img class="thumbnail" :src="image.thumbnail">
				<input type="hidden" name="imgs[]" v-model="image._name">
				<div class="edit-btn">
					<label :for="'edit-image_' + index" class="edit-label">変更</label>
					<input class="custom-file-input" type="file" @change="edit(image, index, $event)" :id="'edit-image_' + index" hidden accept="image/*">
				</div>
				<img class="delete-btn" :src="'../image/online/delete-btn.svg'" @click="remove(index)">
			</li>
		</ul>
        <div v-if="imageError" class="error-box">
            <p v-text="imageError"></p>
        </div>
        <div class="btn-box">
			<button class="next-btn" @click="next1">次へ</button>
		</div>
	</div>
	<div class="second-box" v-if="currentStep === 2">
		<p class="desc">エリアをご選択ください。</p>
		<select id="area" class="area-box" name="area" v-model="area">
			<option value="" disabled selected>選択してください</option>
			<option value="愛知">愛知</option>
			<option value="三重">三重</option>
			<option value="岐阜">岐阜</option>
			<option value="滋賀">滋賀</option>
		</select>
		<div v-if="areaError" class="error-box">
			<p v-text="areaError"></p>
		</div>
		<div class="btn-box">
			<button class="back-btn" @click="back1">戻る</button>
			<button class="next-btn" @click="next2">次へ</button>
		</div>
	</div>
	<div class="third-box" v-if="currentStep === 3">
		<p class="desc">ショートメールもしくはお電話で回答を差し上げます。</p>
		<div class="tel-box">
			<input type="tel" id="tel1" class="tel-input" name="tel1" size="4" maxlength="4" v-model="tel1">
			<p class="hyphen">-</p>
			<input type="tel" id="tel2" class="tel-input" name="tel2" size="4" maxlength="4" v-model="tel2">
			<p class="hyphen">-</p>
			<input type="tel" id="tel3" class="tel-input" name="tel3" size="4" maxlength="4" v-model="tel3">
		</div>
		<div v-if="telError" class="error-box">
			<p v-text="telError"></p>
		</div>
		<div class="final-message">
			<p>{{ uploadSuccessMessage }}</p>
			<div v-if="uploadSuccessMessage === '送信中'" class="spinner">
				<div class="head"></div>
			</div>
		</div>
		<div class="btn-box">
			<button class="back-btn" @click="back2">戻る</button>
			<button class="next-btn" @click="send">登録する</button>
		</div>
	</div>
	<div class="complete-box" v-if="currentStep === 4">
		<p class="tit">申請完了</p>
		<div class="desc-box">
			<p>このたびはお申込みいただき、誠にありがとうございます。</p>
			<p>審査結果につきましては、当店スタッフよりショートメッセージ（ SMS ）またはお電話にて、○営業日以内にご連絡させていただきます。</p><br>
			<p>ご連絡まで、今しばらくお待ちくださいますようお願いいたします。</p>
			<div class="tel-box">
				<p class="note">なお、以下の電話番号よりご連絡差し上げる場合がございますので、ご確認ください。</p>
				<p class="tel-num">080-1111-1111</p>
				<p class="tel-num">080-2222-2222</p>
			</div>

		</div>
	</div>
</template>

<script>
import { defineComponent } from 'vue'
import axios from 'axios'
import '../../css/upload.css';

export default defineComponent({
	data() {
		return {
			currentStep: 1,
			images: [],
			imageError: "",
			area: "",
			areaError: "",
			tel1: "",
			tel2: "",
			tel3: "",
			telError: "",
			uploadSuccessMessage: "",
		}
	},
	methods: {
		// スマホカメラを起動して撮影
		triggerCamera() {
			this.$refs.cameraInput.click()
		},
		onCameraChange(e) {
			let files = e.target.files
			if (files.length > 0) {
				this.createImage(files[0])
			}
		},

		// ファルダから選択
		onFileChange(e) {
			let files = e.target.files
			for (let i = 0; i < files.length; i++) {
				this.createImage(files[i])
			}
		},
		////////////////////////////////
		////////////////////////////////

		// 画像追加
		createImage(file) {
			const reader = new FileReader()
			reader.onload = (e) => {
				this.images.push({
					file: file,
					thumbnail: e.target.result,
					backendFilename: null,
				})
			}
			reader.readAsDataURL(file)
			this.imageError = "";
		},
		// 画像編集
		edit(imageToEdit, i, e) {
			let newFile = e.target.files[0]
			if (!newFile) return
			const reader = new FileReader()
			reader.onload = (e) => {
				this.images[i] = {
					file: newFile,
					thumbnail: e.target.result,
					backendFilename: null,
				}
			}
			reader.readAsDataURL(newFile)
		},
		// 画像削除
		remove(i) {
			this.images.splice(i, 1)
			this.$refs.imageUploader.value = ''
		},
		////////////////////////////////
		////////////////////////////////

		next1() {
			this.imageError = "";
			if (this.images.length === 0) {
				this.imageError = "画像を選択してください";
				return;
			} else if (this.images.length > 20) {
				this.imageError = "画像は20枚以内で選択してください";
				return;
			}
			this.currentStep = 2;
			this.imageError = "";
		},
		next2() {
			this.areaError = "";
			if (!this.area) {
				this.areaError = "エリアを選択してください。";
				return;
			}
			this.currentStep = 3;
			this.areaError = "";
		},
		back1() {
			this.currentStep = 1;
			this.areaError = "";
		},
		back2() {
			this.currentStep = 2;
			this.telError = "";
		},
		async send(e) {
			if (e) e.preventDefault()

			const fullTel = `${this.tel1}${this.tel2}${this.tel3}`;
			if (!fullTel.match(/^\d{10,11}$/)) {
				this.telError = "有効な電話番号を入力してください。";
				return;
			}
			this.telError = "";
			this.uploadSuccessMessage = "送信中";

			let dataForm = new FormData()
			const config = {
				headers: {
					'accept': 'application/json',
					'Accept-Language': 'ja_JP',
				}
			}
			this.images.forEach((img, index) => {
				dataForm.append(`upload[${index}]`, img.file)
			})
			dataForm.append('area', this.area);
			dataForm.append('tel1', this.tel1);
			dataForm.append('tel2', this.tel2);
			dataForm.append('tel3', this.tel3);

			try {
				const response = await axios.post('/api/upload_webp', dataForm, config)
				this.uploadSuccessMessage = "登録が完了しました。";
				setTimeout(() => {
					this.currentStep = 4;
				}, 3000);

			} catch (error) {
				console.error("アップロード中にエラーが発生しました:", error.response || error)
				this.uploadSuccessMessage = "";
				let errorMessage = "データの登録に失敗しました。";
				if (error.response && error.response.data && error.response.data.message) {
					errorMessage = error.response.data.message;
				} else {
					this.imageError = "画像のアップロードに失敗しました。"
				}
			}
		},
	}
})
</script>
