<?php
if (! empty ($_POST)) {
    $email = $_POST["email"];
    // Process the email (e.g., save to database, send confirmation email, etc.)
    file_put_contents("/var/www/shaji.in/garage/emails.txt", $email . PHP_EOL, FILE_APPEND | LOCK_EX);
    echo "<script>alert('Thank you for signing up!');</script>";
}
?>

<!DOCTYPE html>
<!-- saved from url=(0022)https://www.flopp.app/ -->
<html style="">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width" data-next-head="">
		<link rel="preload" href="./flopp_files/51ffcadb94ad5630.css" as="style">
		<link rel="stylesheet" href="./flopp_files/51ffcadb94ad5630.css" data-n-g="">
		<noscript data-n-css=""></noscript>
		<script defer="" nomodule="" src="./flopp_files/polyfills-42372ed130431b0a.js"></script>
		<!-- <script src="./flopp_files/webpack-8cac0b4b405cede1.js" defer=""></script>
		<script src="./flopp_files/framework-7c95b8e5103c9e90.js" defer=""></script>
		<script src="./flopp_files/main-0cf5c1ca63e92553.js" defer=""></script>
		<script src="./flopp_files/_app-a3f35041f74c110a.js" defer=""></script>
		<script src="./flopp_files/230-5443ad96548554c5.js" defer=""></script>
		<script src="./flopp_files/587-c4779b465867fe45.js" defer=""></script>
		<script src="./flopp_files/index-3c931a59f6fc88e3.js" defer=""></script>
		<script src="./flopp_files/_buildManifest.js" defer=""></script>
		<script src="./flopp_files/_ssgManifest.js" defer=""></script> -->
		<link as="script" rel="prefetch" href="./flopp_files/about-fa5e4265f43f4840.js">
		<link as="script" rel="prefetch" href="./flopp_files/terms-of-service-01e155afb70b8a52.js">
		<link as="script" rel="prefetch" href="./flopp_files/privacy-policy-1469d3b4e3f18132.js">
	</head>
	<body>
		<div id="__next">
			<div class="min-h-screen" style="background-color: rgb(121, 43, 255);">
				<nav class="flex justify-between items-center px-6 py-6 md:px-12 relative" style="background-color: rgb(121, 43, 255);">
					<span class="text-xl font-bold text-white">Flopp</span>
					<div class="hidden md:flex space-x-8">
						<a class="text-purple-200 hover:text-white transition-colors" href="https://www.flopp.app/about">About</a>
						<a class="text-purple-200 hover:text-white transition-colors" href="https://www.flopp.app/terms-of-service">Terms of Service</a>
						<a class="text-purple-200 hover:text-white transition-colors" href="https://www.flopp.app/privacy-policy">Privacy Policy</a>
					</div>
					<button class="block md:hidden text-white focus:outline-none">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
					</button>
					<div class="absolute right-8 top-full mt-3 w-48 border border-purple-200 rounded-xl transition-all duration-200 shadow-[0_0_6px_rgba(255,255,255,0.3)] z-50 md:hidden opacity-0 scale-95 pointer-events-none" style="background-color: rgb(76, 29, 149);">
						<nav class="flex flex-col items-start">
							<a class="block w-full px-4 py-3 hover:bg-white hover:text-purple-900 transition text-purple-100" href="https://www.flopp.app/about">About</a>
							<a class="block w-full px-4 py-3 hover:bg-white hover:text-purple-900 transition text-purple-100" href="https://www.flopp.app/terms-of-service">Terms of Service</a>
							<a class="block w-full px-4 py-3 hover:bg-white hover:text-purple-900 transition text-purple-100" href="https://www.flopp.app/privacy-policy">Privacy Policy</a>
						</nav>
					</div>
				</nav>
				<main class="relative" style="background-color: rgb(121, 43, 255);">
					<div class="max-w-7xl mx-auto px-6 py-12 md:py-20">
						<div class="grid lg:grid-cols-2 gap-12 items-center">
							<div class="text-center lg:text-left -mt-20">
								<h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6 text-white leading-tight">A spending tracker<br>you'll love using</h1>
								<p class="text-xl md:text-2xl mb-8 text-purple-100 leading-relaxed max-w-lg">A simple and beautiful spending tracker designed to help you understand and control your finances</p>
								<form action="?" method="post" class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start items-center">
                  <input required name="email" type="email" placeholder="Enter your email" class="px-4 py-2 rounded-full text-white border border-purple-200 focus:outline-none focus:ring-2 focus:ring-purple-600" />
									<button type="submit" class="text-purple-600 px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg flex items-center space-x-2 bg-white hover:bg-gray-50">
										<!-- <a href="https://tally.so/r/w847xk" style="color: rgb(121, 43, 255);">Sign up to Waitlist</a> -->
                     Sign up for the wait list!

									</button>
                </form>
								<p class="text-purple-200 mt-4 text-sm">No credit card required</p>
							</div>
							<div class="flex justify-center lg:justify-end">
								<div class="relative">
									<img alt="Flopp app home screen" width="400" height="750" decoding="async"  src="./flopp_files/home.png" style="color: transparent;">
								</div>
							</div>
						</div>
					</div>
				</main>
				<section id="features" class="py-20" style="background-color: rgb(121, 43, 255);">
					<div class="max-w-6xl mx-auto px-6">
						<div class="text-center mb-16">
							<h2 class="text-4xl md:text-5xl font-bold mb-4 text-white">The basics, but better ✨</h2>
							<p class="text-xl text-purple-100 max-w-2xl mx-auto">Built so you'll want to open it and track your daily spending</p>
						</div>
						<div class="grid md:grid-cols-3 gap-8">
							<div class="bg-white/10 backdrop-blur-sm p-8 rounded-2xl hover:bg-white/20 transition-all duration-300 cursor-pointer transform hover:scale-105 border border-white/20">
								<div class="mb-6 flex justify-center">
									<img alt="Connect bank screen" loading="lazy" width="200" height="400" decoding="async" data-nimg="1"  src="/garage/flopp_files/connect-bank.png" style="color: transparent;">
								</div>
								<h3 class="text-xl font-semibold mb-3 text-white text-center">Auto Bank-Syncing</h3>
								<p class="text-purple-100 text-center leading-relaxed">Automatically sync with your bank - no need to manually add transactions</p>
							</div>
							<div class="bg-white/10 backdrop-blur-sm p-8 rounded-2xl hover:bg-white/20 transition-all duration-300 cursor-pointer transform hover:scale-105 border border-white/20">
								<div class="mb-6 flex justify-center">
									<img alt="Swipe categorization screen" loading="lazy" width="200" height="400" decoding="async" src="./flopp_files/swipe-screen.png" style="color: transparent;">
								</div>
								<h3 class="text-xl font-semibold mb-3 text-white text-center">Easy Categorization</h3>
								<p class="text-purple-100 text-center leading-relaxed">Simply swipe and tap to categorize your transactions</p>
							</div>
							<div class="bg-white/10 backdrop-blur-sm p-8 rounded-2xl hover:bg-white/20 transition-all duration-300 cursor-pointer transform hover:scale-105 border border-white/20">
								<div class="mb-6 flex justify-center">
									<img alt="Analytics and charts screen" loading="lazy" width="200" height="400" decoding="async" src="./flopp_files/donut-chart.png" style="color: transparent;">
								</div>
								<h3 class="text-xl font-semibold mb-3 text-white text-center">Transaction Analytics</h3>
								<p class="text-purple-100 text-center leading-relaxed">Get detailed analytics and insights about your spending habits</p>
							</div>
						</div>
					</div>
				</section>
				<section class="py-20" style="background-color: rgb(121, 43, 255);">
					<div class="max-w-6xl mx-auto px-6">
						<div class="text-center mb-16">
							<h2 class="text-4xl md:text-5xl font-bold mb-4 text-white">Why choose Flopp? 🤔</h2>
							<p class="text-xl text-purple-100 max-w-3xl mx-auto">Unlike other finance apps, Flopp makes tracking your money actually enjoyable</p>
						</div>
						<div class="grid md:grid-cols-2 gap-12 items-center">
							<div class="space-y-8">
								<div class="flex items-start space-x-4">
									<div class="text-3xl">⚡</div>
									<div>
										<h3 class="text-xl font-semibold text-white mb-2">Set up in minutes</h3>
										<p class="text-purple-100">Connect your bank and start tracking immediately</p>
									</div>
								</div>
								<div class="flex items-start space-x-4">
									<div class="text-3xl">🎯</div>
									<div>
										<h3 class="text-xl font-semibold text-white mb-2">Actually fun to use</h3>
										<p class="text-purple-100">Swipe-based categorization makes organizing transactions feel like a game</p>
									</div>
								</div>
								<div class="flex items-start space-x-4">
									<div class="text-3xl">🔒</div>
									<div>
										<h3 class="text-xl font-semibold text-white mb-2">Privacy first</h3>
										<p class="text-purple-100">We only access your transactions, never your bank account. We don't sell your data, ever.</p>
									</div>
								</div>
								<div class="flex items-start space-x-4">
									<div class="text-3xl">📱</div>
									<div>
										<h3 class="text-xl font-semibold text-white mb-2">Mobile-first design</h3>
										<p class="text-purple-100">Built specifically for your phone, not a desktop app shrunk down</p>
									</div>
								</div>
							</div>
							<div class="bg-white/10 backdrop-blur-sm rounded-3xl p-8 text-center">
								<div class="text-6xl mb-6">💜</div>
								<h3 class="text-2xl font-bold text-white mb-4">Ready to love managing money?</h3>
								<p class="text-purple-100 mb-8">Join thousands who've made finance tracking effortless</p>
								<div class="flex flex-col sm:flex-row gap-4 justify-center">
									<button class="text-purple-600 px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg flex items-center space-x-2 bg-white hover:bg-gray-50">
										<a href="https://tally.so/r/w847xk" style="color: rgb(121, 43, 255);">Sign up to Waitlist</a>
									</button>
								</div>
							</div>
						</div>
					</div>
				</section>
				<footer class="py-8 text-center" style="background-color: rgb(121, 43, 255);">
					<p class="text-purple-200">© 2025 Flopp Inc. All Rights Reserved</p>
				</footer>
			</div>
		</div>
		<script id="__NEXT_DATA__" type="application/json">{"props":{"pageProps":{}},"page":"/","query":{},"buildId":"Z1rWxhaSwZGXTjkKstjHY","nextExport":true,"autoExport":true,"isFallback":false,"scriptLoader":[]}</script>
		<next-route-announcer>
			<p aria-live="assertive" id="__next-route-announcer__" role="alert" style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; top: 0px; width: 1px; white-space: nowrap; overflow-wrap: normal;">A spending tracker
				you'll love using
			</p>
		</next-route-announcer>
		<script src="./flopp_files/privacy-policy-1469d3b4e3f18132.js"></script>
		<script src="./flopp_files/terms-of-service-01e155afb70b8a52.js"></script>
		<script src="./flopp_files/about-fa5e4265f43f4840.js"></script>
	</body>
</html>