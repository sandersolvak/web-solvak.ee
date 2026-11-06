<?php ?>

	<!-- Theme: follows the system setting, a saved choice from the toggle overrides it -->
	<meta name="theme-color" content="hsl(50, 33%, 96%)" media="(prefers-color-scheme: light)">
	<meta name="theme-color" content="hsl(300, 20%, 8%)" media="(prefers-color-scheme: dark)">
	<script>
	(function () {
		var root = document.documentElement;
		var system = window.matchMedia('(prefers-color-scheme: dark)');
		var saved = null;
		try { saved = localStorage.getItem('theme'); } catch (e) {}
		if (saved === 'light' || saved === 'dark') root.setAttribute('data-theme', saved);

		function current() {
			return root.getAttribute('data-theme') || (system.matches ? 'dark' : 'light');
		}

		function updateToggle() {
			var button = document.querySelector('.theme-toggle');
			if (!button) return;
			var next = current() === 'dark' ? 'light' : 'dark';
			button.setAttribute('aria-label', 'Switch to ' + next + ' mode');
			button.setAttribute('title', 'Switch to ' + next + ' mode');
		}

		document.addEventListener('click', function (event) {
			if (!event.target.closest('.theme-toggle')) return;
			var next = current() === 'dark' ? 'light' : 'dark';
			// Picking the same theme as the system clears the override, so the site follows the system again
			if (next === (system.matches ? 'dark' : 'light')) {
				root.removeAttribute('data-theme');
				try { localStorage.removeItem('theme'); } catch (e) {}
			} else {
				root.setAttribute('data-theme', next);
				try { localStorage.setItem('theme', next); } catch (e) {}
			}
			updateToggle();
		});

		system.addEventListener('change', updateToggle);
		document.addEventListener('DOMContentLoaded', updateToggle);
	})();
	</script>
