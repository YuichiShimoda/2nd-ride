import $ from "jquery";

document.oncontextmenu = function () {return false;}
$(document).on('keydown', function(e) {
	// Ctrl + Shift + I (開発者ツールの起動)
	if ((e.ctrlKey || e.metaKey) && e.shiftKey && e.key === 'I') {
		e.preventDefault();
		// console.log('開発者ツールの起動を禁止しました。');
	}
	// F12キー (多くのブラウザで開発者ツールの起動)
	if (e.key === 'F12') {
		// e.preventDefault();
		// console.log('F12キーによる開発者ツールの起動を禁止しました。');
	}
	// Ctrl + U (Winソースコードの表示)
	if ((e.ctrlKey || e.metaKey) && e.key === 'u') {
		e.preventDefault();
		// console.log('Winソースコードの表示を禁止しました。');
	}
	// Command + Option + U (Macソースコードの表示)
	if (e.metaKey && e.altKey && e.key === 'u') {
		e.preventDefault();
		// console.log('Macソースコードの表示を禁止しました。');
	}
	// Command + Option + I (Mac開発者ツールの起動)
	if (e.metaKey && e.altKey && e.key === 'I') {
		e.preventDefault();
		// console.log('Mac開発者ツールの起動を禁止しました。');
	}
});