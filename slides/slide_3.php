<section data-state="blackout">
	<h2>Setting globals</h2>
	<pre>
		<code contenteditable style="font-size: 18px;">
			// assign global variables so all views have access to them
			$view->set_global('username', 'Robbie');
			//or
			$template->set_global('username', 'Jonathan');

			//then getting in controller sub functions
			$template->get('username');
		</code>
	</pre>
</section>