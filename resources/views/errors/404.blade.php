<!DOCTYPE html>
<html lang="ja">
	<head>
		<title>404エラー</title>
		<meta charset="UTF-8">
		<meta name="robots" content="noindex, nofollow" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
        <meta name="format-detection" content="telephone=no">

        <link rel="icon" type="image/png" href="{{ asset('image/favicon/favicon-96x96.png') }}" sizes="96x96" />
        <link rel="icon" type="image/svg+xml" href="{{ asset('image/favicon/favicon.svg') }}" />
        <link rel="shortcut icon" href="{{ asset('image/favicon/favicon.ico') }}" />
        <link rel="apple-touch-icon" href="{{ asset('image/favicon/apple-touch-icon.png') }}" sizes="180x180" />
        <link rel="manifest" href="{{ asset('image/favicon/site.webmanifest') }}" />

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Shippori+Mincho:wght@400;500;600;700;800&display=swap" rel="stylesheet">

		<style>
			body {
				display: block;
				width: 100vw;
				height: 100dvh;
                margin: 0;
                overflow: hidden;
			}

			.content-box {
				position: fixed;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				display: flex;
				justify-content: center;
				align-items: center;
				flex-direction: column;
				width: 100%;
			}

			.logo {
				display: block;
				width: 600px;
				margin: 0 auto;
			}

			.desc {
				display: block;
				width: 100%;
				margin: 70px auto 0;
				font-weight: 400;
				font-size: 20px;
				font-family: 'Noto Sans JP', sans-serif;
				line-height: 1.5;
				letter-spacing: 0.05em;
				text-align: center;
				color: #333;
			}

			.link {
				display: block;
				width: fit-content;
				padding: 0 0.4em 0.3em;
				margin: 25px auto 0;
				border-bottom: solid 1px #0C2A81;
				font-weight: 500;
				font-size: 16px;
				font-family: 'Noto Sans JP', sans-serif;
				line-height: 1.0;
				letter-spacing: 0.05em;
				text-align: center;
				color: #0C2A81;
				transition: all 0.5s ease-in-out;
				text-decoration: none;
			}

			.link:hover {
				opacity: 0.5;
			}

			@media screen and (max-width: 900px) {
				.logo {
					width: 450px;
				}
				.desc {
					margin: 50px auto 0;
					font-size: 18px;
				}

				.link {
					margin: 20px auto 0;
					font-size: 16px;
				}
			}

			@media screen and (max-width: 550px) {
				.logo {
					width: 75vw;
				}
				.desc {
					margin: 40px auto 0;
					font-size: 16px;
				}

				.link {
					margin: 15px auto 0;
					font-size: 15px;
				}
			}

			@media screen and (max-width: 450px) {
				.desc {
					margin: 40px auto 0;
					font-size: 14px;
				}

				.link {
					margin: 15px auto 0;
					font-size: 12px;
				}
			}
		</style>
	</head>
	<body>
		<div class="content-box">
			<img class="logo" src="{{ asset('image/top/logo.svg') }}">
			<p class="desc">お探しのページは、見つかりませんでした。</p>
			<a class="link" href="/">トップページに戻る</a>
		</div>
	</body>
</html>
