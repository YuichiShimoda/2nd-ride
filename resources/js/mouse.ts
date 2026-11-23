import $ from "jquery";

$(window).on("load", function () {
	const cursor = document.querySelector<HTMLElement>("#cursor");
	if (!cursor) return;

	const insideElement = cursor.querySelector<HTMLElement>(".inside");
	if (!insideElement) return;

	$(document).on("mousemove", function (event) {
		const rect = insideElement.getBoundingClientRect();
		cursor.style.top = (event.clientY - rect.height / 2) + "px";
		cursor.style.left = (event.clientX - rect.width / 2) + "px";
	});
});
