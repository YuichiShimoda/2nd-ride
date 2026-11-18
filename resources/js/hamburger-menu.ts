import $ from "jquery";

$('.ham-box').on('click', function() {
	const videoElement = $('#modal').find('.video')[0] as HTMLVideoElement | undefined;
	var $video = $('#modal').find('.video');

	$('#modal').find('.md-overlay').fadeIn();
	$('#modal').find('.md-contents').hide();
	$video.show();

	if (videoElement) {
		videoElement.currentTime = 0;
		videoElement.play().catch(error => {
			console.warn('動画の再生に失敗しました:', error);
		});
	}
	$video.delay(600).fadeOut();
	$('#modal').find('.md-contents').delay(1000).fadeIn();
});

$('.modal-close').on('click', function() {
	$('#modal').find('.md-overlay, .md-contents').fadeOut();
	const videoElement = $('#modal').find('.video')[0] as HTMLVideoElement | undefined;
	if (videoElement) {
		videoElement.pause();
	}
});
$(".md-contents").hover(
	function () {
		$("#modal").addClass("is-play");
	},
	function () {
		$("#modal").removeClass("is-play");
	}
);